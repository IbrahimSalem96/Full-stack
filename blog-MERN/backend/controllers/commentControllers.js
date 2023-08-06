const asyncHandler = require('express-async-handler')
const { Comment, validateCreateComment, validateUpdateComment } = require('../models/Comment')
const { User } = require('../models/User')


/**-------------------------------------------------------------
 * @desc    Create New Comment
 * @route   /api/comments
 * @method  POST
 * @access  private ( only logged in user )
---------------------------------------------------------------*/
module.exports.createCommentCtr1 = asyncHandler(async (req, res) => {

    const { error } = validateCreateComment(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    //How do we get the private id in the user cup? It does not make a log. If I have a req.user, then I get the id for the person who is logged in.
    const profile = await User.findById(req.user.id)

    //Another way to replace the new Comment
    const comment = await Comment.create({
        postId: req.body.postId,
        text: req.body.text,
        user: req.user.id,
        username: profile.username
        
    })

    res.status(201).json(comment)

})


/**-------------------------------------------------------------
 * @desc    Get All Comments
 * @route   /api/comments
 * @method  GET
 * @access  private ( only Admin )
---------------------------------------------------------------*/
module.exports.getAllCommentsCtr1 = asyncHandler(async (req, res) => {
    const comments = await Comment.find().populate("user", ["-password"])
    res.status(201).json(comments)
})


/**-------------------------------------------------------------
 * @desc    delete comment by Id
 * @route   /api/comments/:id
 * @method  DELETE
 * @access  private ( only admin or owner of the post )
---------------------------------------------------------------*/
module.exports.dleleteCommentCtr1 = asyncHandler(async (req, res) => {

    const comment = await Comment.findById(req.params.id)
    if (!comment) {
        res.status(404).json({ message: "comment not found" })
    }

    if (req.user.isAdmin || req.user.id === comment.user._id.toString()) {
        await Comment.findByIdAndDelete(req.params.id)
        res.status(200).json({ message: "comment has been deleted" })
    } else {
        res.status(200).json({ message: "access denied, not allowed" })
    }
})


/**-------------------------------------------------------------
 * @desc    Update Comment
 * @route   /api/comments/:id
 * @method  PUT
 * @access  private ( only owner of the post )
---------------------------------------------------------------*/
module.exports.updateCommentCtr1 = asyncHandler(async (req, res) => {

    const { error } = validateUpdateComment(req.body)
    if (error) {
        res.status(400).json({ message: message.details[0].message })
    }

    const comment = await Comment.findById(req.params.id)
    if (!comment) {
        res.status(404).json({ message: "comment not found" })
    }

    if (req.user.id !== comment.user._id.toString()) {
        res.status(403).json({ message: "access denied, only user himself can edit his comment" })
    }

    const updateComment = await Comment.findByIdAndUpdate(req.params.id, {
        $set: {
            text: req.body.text
        }
    }, { new: true })

    res.status(200).json(updateComment)
})

