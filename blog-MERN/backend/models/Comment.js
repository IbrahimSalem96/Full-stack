const mongoose = require('mongoose')
const Joi = require('joi')


const Schema = mongoose.Schema


const CommentSchema = new Schema({
    postId: {
        type: mongoose.Schema.Types.ObjectId,
        ref: "Post",
        required: true,
    },
    user: {
        type: mongoose.Schema.Types.ObjectId,
        ref: "User",
        required: true,
    },
    text: {
        type: String,
        required: true,
        trim: true
    },
    username: {
        type: String,
        required: true,
    },
}, { timestamps: true })


//Model Post
const Comment = mongoose.model("Comment", CommentSchema)

// Validate Create Post
function validateCreateComment(obj) {
    const Schema = Joi.object({
        postId: Joi.string().required().label("Post ID"), // label("Post ID") To modify the error format => \"postId\ => \ Post ID \
        text: Joi.string().required().trim().label("Text"),
    })
    return Schema.validate(obj)
}


// Validate Upate Post
function validateUpdateComment(obj) {
    const Schema = Joi.object({
        text: Joi.string().trim(),
    })
    return Schema.validate(obj)
}

module.exports = { Comment, validateCreateComment, validateUpdateComment }