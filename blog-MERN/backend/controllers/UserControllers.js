const asyncHandler = require('express-async-handler')
const { User, ValidateUpdateUser } = require('../models/User')
const bcrypt = require('bcryptjs')
const path = require('path')
const { cloudinaryUploadImage, cloudinaryRemoveImage, cloudinaryRemoveMultipleImage } = require('../utils/cloudinary')
const fs = require('fs')
const { Post } = require('../models/Post')
const { Comment } = require('../models/Comment')

/**-------------------------------------------------------------
 * @desc    Get All User
 * @route   /api/users/profile
 * @method  GET
 * @access  private ( only Admin  )
---------------------------------------------------------------*/
module.exports.getAllUserCtr1 = asyncHandler(async (req, res) => {
    const user = await User.find({}).populate("posts") //populate("posts")  =>  The same word we wrote in model user virtual to block posts
    res.status(200).json(user)
})


/**-------------------------------------------------------------
 * @desc    Get User Profile  
 * @route   /api/users/profile/:id
 * @method  GET
 * @access  public
---------------------------------------------------------------*/
module.exports.getUserProfileCtr1 = asyncHandler(async (req, res) => {
    const user = await User.findById(req.params.id).select('-password').populate("posts") //populate("posts")  =>  The same word we wrote in model user virtual to block posts
    if (!user) {
        return res.status(404).json({ message: "user not found" })
    }
    res.status(200).json(user)
})


/**-------------------------------------------------------------
 * @desc    Update User profile
 * @route   /api/users/profile/:id
 * @method  POST
 * @access  private ( only user himself )
---------------------------------------------------------------*/
module.exports.updateUserProfileCtr1 = asyncHandler(async (req, res) => {
    const { error } = ValidateUpdateUser(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    if (req.body.password) {
        const salt = await bcrypt.genSalt(10)
        req.body.password = await bcrypt.hash(req.body.password, salt)
    }

    const updateUser = await User.findByIdAndUpdate(req.params.id, {
        $set: {
            username: req.body.username,
            password: req.body.password,
            bio: req.body.bio
        }
    }, { new: true }).select("-password")

    res.status(200).json(updateUser)

})


/**-------------------------------------------------------------
 * @desc    Get Count User
 * @route   /api/users/count
 * @method  GET
 * @access  private ( only Admin  )
---------------------------------------------------------------*/
module.exports.getUsersCountCtr1 = asyncHandler(async (req, res) => {
    const count = await User.count()
    res.status(200).json(count)
})


/**-------------------------------------------------------------
 * @desc    Profile Upload Photo
 * @route   /api/users/Profile/profile-photo-upload
 * @method  POST
 * @access  private ( only Logged in user  )
---------------------------------------------------------------*/
module.exports.profilePhotoUp1oadCtr1 = asyncHandler(async (req, res) => {
    // 1. Validation
    if (!req.file) {
        res.status(400).json({ message: "no file providec" })
    }

    // 2. Get the path to the image
    const imagePath = path.join(__dirname, `../images/${req.file.filename}`)
    // console.log(imagePath)

    // 3. Upload to cloudinary
    const result = await cloudinaryUploadImage(imagePath)
    // console.log(result)

    // 4. Get the user from DB
    const user = await User.findById(req.user.id)

    // 5. Delete the old profile photo if exist
    if (user.profilePhoto.publicId !== null) {
        await cloudinaryRemoveImage(user.profilePhoto.publicId);
    }

    // 6. Change the profilePhoto field in the DB
    user.profilePhoto = {
        url: result.secure_url, // Object cloudinary result 
        publicId: result.public_id // Object cloudinary result
    }

    await user.save()
    // 7. Send response to client
    res.status(200).json({
        message: "your profile photo uploaded successfully",
        profilePhoto: {
            url: result.secure_url,
            publicId: result.public_id
        }
    })

    // 8. Remvoe image from the server
    fs.unlinkSync(imagePath)
})


/**-------------------------------------------------------------
 * @desc    Delete User Profile
 * @route   /api/users/Profile/:id
 * @method  Delete
 * @access  private ( only Admin & user himself)
---------------------------------------------------------------*/
module.exports.deleteUsersAccountCtr1 = asyncHandler(async (req, res) => {
    // 1. Get the user from DB
    const user = await User.findById(req.params.id)
    if (!user) {
        return res.status(404).json({ message: "user not found" })
    }

    // 2. Get all posts from DB
    const posts = await Post.find({ user: user._id })

    // 3. Get the public ids from the posts
    const publicIds = posts?.map((post) => post.image.publicId)

    // 4. Delete all posts image from cloudinary that belong to this user
    if (publicIds?.length > 0) { // Make sure there are pictures 
        await cloudinaryRemoveMultipleImage(publicIds)
    }

    // 5. Delete the profile picture from cloudinary
    if (user.profilePhoto.publicId !== null) {
        await cloudinaryRemoveImage(user.profilePhoto.publicId);
    }


    //Delete, user posts & comments
    await Post.deleteMany({ user: user._id })
    await Comment.deleteMany({ user: user._id })

    // 7. Delete the user himself
    await User.findByIdAndDelete(req.params.id)

    // 8. Send a response to the client
    res.status(200).json({ message: "your profile has been deleted" })
})