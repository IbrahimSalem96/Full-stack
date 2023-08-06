const fs = require('fs')
const path = require('path')
const asyncHandler = require('express-async-handler')
const { Post, validateCreatePost, validateUpdatePost } = require('../models/Post')
const { cloudinaryUploadImage, cloudinaryRemoveImage } = require('../utils/cloudinary')
const { Comment } = require('../models/Comment')

/**-------------------------------------------------------------
 * @desc    Create New Post 
 * @route   /api/posts/
 * @method  POST
 * @access  private ( only logged in user )
---------------------------------------------------------------*/
module.exports.createPostCtr1 = asyncHandler(async (req, res) => {
    // 1. Validation for image
    if (!req.file) {
        res.status(400).json({ message: "no file provided" })
    }

    // 2. Validation for data
    const { error } = validateCreatePost(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    // 3. Upload photo
    const imagePath = path.join(__dirname, `../images/${req.file.filename}`)
    const result = await cloudinaryUploadImage(imagePath)

    // 4. Create new post and save it to DB
    const post = new Post({
        title: req.body.title,
        description: req.body.description,
        category: req.body.category,
        user: req.user.id,
        image: {
            url: result.secure_url,
            publicId: result.public_id
        }
    })

    await post.save()

    // 5. Send response to the client
    res.status(200).json({ message: "done New post " })

    // 6. Remove image from the server
    fs.unlinkSync(imagePath)

})


/**-------------------------------------------------------------
 * @desc    Get All Posts
 * @route   /api/posts/
 * @method  Get
 * @access  public
---------------------------------------------------------------*/
module.exports.getAllPostCtrl = asyncHandler(async (req, res) => {
    const POST_PER_PAGE = 3
    const { pageNumber, category } = req.query
    let posts

    if (pageNumber) {
        posts = await Post.find()
            .skip((pageNumber - 1) * POST_PER_PAGE)
            .limit(POST_PER_PAGE).sort({ createdAt: -1 }).populate("user", ["-password"]).populate("comments")

    } else if (category) {
        posts = await Post.find({ category }).sort({ createdAt: -1 }).populate("user", ["-password"]).populate("comments")

    } else {
        posts = await Post.find().sort({ createdAt: -1 }).populate("user", ["-password"]).populate("comments")

    }
    res.status(200).json(posts)

})


/**-------------------------------------------------------------
 * @desc    Get Post by Id
 * @route   /api/posts/:id
 * @method  Get
 * @access  public
---------------------------------------------------------------*/
module.exports.getSinglePostCtrl = asyncHandler(async (req, res) => {
    const post = await Post.findById(req.params.id).populate("user", ["-password"]).populate("comments")
    if (!post) {
        res.status(404).json({ message: "post not found " })
    }
    res.status(200).json(post)
})


/**-------------------------------------------------------------
 * @desc    Get Posts Count 
 * @route   /api/posts/count
 * @method  Get
 * @access  public
---------------------------------------------------------------*/
module.exports.getCountPostCtrl = asyncHandler(async (req, res) => {
    const post = await Post.count()
    res.status(200).json(post)
})


/**-------------------------------------------------------------
 * @desc    Delete Posts  
 * @route   /api/posts/:id
 * @method  Delete
 * @access  private (only admin or owner of the post)
---------------------------------------------------------------*/
module.exports.getDeletePostCtrl = asyncHandler(async (req, res) => {
    const post = await Post.findById(req.params.id)
    if (!post) {
        res.status(404).json({ message: "post not found" })
    }

    if (req.user.isAdmin || req.user.id === post.user.toString()) { // req.user.id => User /// post.user=> rlation ship user and post

        //Delete Delete Post
        await Post.findByIdAndDelete(req.params.id)

        //Delete Image Post
        await cloudinaryRemoveImage(post.image.publicId)

        //Delete all comments that belong to this post
        await Comment.deleteMany({ postId: post._id })

        res.status(200).json({
            message: "post has been deleted successfully",
            postId: post._id
        })
    } else {
        res.status(403).json({
            message: "access denied,forbidden"
        })
    }

})


/**-------------------------------------------------------------
 * @desc    Update Post   
 * @route   /api/posts/:id
 * @method  PUT
 * @access  private  (only admin or owner of the post)
---------------------------------------------------------------*/
module.exports.UpdatePostCtrl = asyncHandler(async (req, res) => {
    const { error } = validateUpdatePost(req.body)
    if (error) {
        res.status(400).json({ message: error.details[0].message })
    }

    const post = await Post.findById(req.params.id)
    if (!post) {
        res.status(404).json("post not found")
    }

    if (req.user.id !== post.user.toString()) {
        res.status(403).json({ message: 'access denied, you are not allowed' })
    }

    const updatedPost = await Post.findByIdAndUpdate(req.params.id, {
        $set: {
            title: req.body.title,
            description: req.body.description,
            category: req.body.category,
        }
    }, { new: true }).populate("user", ["-password"])

    res.status(201).json(updatedPost)
})


/**-------------------------------------------------------------
 * @desc    Update Post   
 * @route   /api/posts/upload-image/:id
 * @method  PUT
 * @access  private  (only admin or owner of the post)
---------------------------------------------------------------*/
module.exports.UpdatePostImageCtrl = asyncHandler(async (req, res) => {
    if (!req.file) {
        res.status(400).json({ message: error.details[0].message })
    }

    const post = await Post.findById(req.params.id)
    if (!post) {
        res.status(404).json("post not found")
    }

    if (req.user.id !== post.user.toString()) {
        res.status(403).json({ message: 'access denied, you are not allowed' })
    }

    await cloudinaryRemoveImage(post.image.publicId)

    const imagePath = path.join(__dirname, `../images/${req.file.filename}`)
    const result = await cloudinaryUploadImage(imagePath)

    const updatedPost = await Post.findByIdAndUpdate(req.params.id, {
        $set: {
            image: {
                url: result.secure_url,
                publicId: result.public_id
            }
        }
    }, { new: true })

    res.status(201).json(updatedPost)
    fs.unlinkSync(imagePath)
})


/**-------------------------------------------------------------
 * @desc    Toggle Like   
 * @route   /api/posts/like/:id
 * @method  PUT
 * @access  private ( only logged in user )
---------------------------------------------------------------*/
module.exports.ToggleLikeCtrl = asyncHandler(async (req, res) => {

    let post = await Post.findById(req.params.id)
    if (!post) {
        res.status(404).json({ message: "post not found" })
    }

    //Toggle Like
    const isPostA1readyLiked = post.likes.find((user) => user.toString() === req.user.id)
    if (isPostA1readyLiked) {
        post = await Post.findByIdAndUpdate(req.params.id, {
            $pull: { // It is an update, if a worker likes it, let him like it
                likes: req.user.id // We store the value of the ID of the person who made a like
            }
        }, { new: true })
    } else {
        post = await Post.findByIdAndUpdate(req.params.id, {
            $push: { // If the above condition is not met, then it is not a like, so we do push because we add to the Array
                likes: req.user.id // We store the value of the ID of the person who made a like
            }
        }, { new: true })
    }
    res.status(200).json(post)
})