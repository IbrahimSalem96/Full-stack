const mongoose = require('mongoose')
const Joi = require('joi')


const Schema = mongoose.Schema


const PostSchema = new Schema({
    title: {
        type: String,
        required: true,
        trim: true,
        minLength: 5,
        maxLenrth: 200,
    },
    description: {
        type: String,
        required: true,
        trim: true,
        minLength: 10,
    },
    user: {
        type: mongoose.Schema.Types.ObjectId,
        ref: "User"
    },
    category: {
        type: String,
        required: true,
    },
    image: {
        type: Object,
        default: {
            url: "",
            publicId: null
        }
    },
    likes: [
        {
            type: mongoose.Schema.Types.ObjectId,
            ref: "User"
        }
    ]
}, {
    timestamps: true,
    toJSON: { virtuals: true },
    toObject: { virtuals: true }
})


PostSchema.virtual("comments", {
    ref: "Comment",
    foreignField: "postId",
    localField: "_id"
})


//Model Post
const Post = mongoose.model("Post", PostSchema)


// Validate Create Post
function validateCreatePost(obj) {
    const Schema = Joi.object({
        title: Joi.string().trim().required().max(200).min(10),
        description: Joi.string().required().trim().min(10),
        category: Joi.string().required(),
    })
    return Schema.validate(obj)
}


// Validate Upate Post
function validateUpdatePost(obj) {
    const Schema = Joi.object({
        title: Joi.string().trim().max(200).min(5),
        description: Joi.string().trim().min(10),
        category: Joi.string().trim(),
    })
    return Schema.validate(obj)
}

module.exports = { Post, validateCreatePost, validateUpdatePost }