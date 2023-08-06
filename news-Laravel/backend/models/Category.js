const mongoose = require('mongoose')
const Joi = require('joi')


const Schema = mongoose.Schema


const CategorySchema = new Schema({
    user: {
        type: mongoose.Schema.Types.ObjectId,
        ref: "User",
        required: true,
    },
    title: {
        type: String,
        required: true,
        trim: true
    },
}, { timestamps: true })


//Model Post
const Category = mongoose.model("Category", CategorySchema)

// Validate Create Category
function validateCreateCategory(obj) {
    const Schema = Joi.object({
        title: Joi.string().required().trim().label("Title"),
    })
    return Schema.validate(obj)
}


module.exports = { Category, validateCreateCategory }