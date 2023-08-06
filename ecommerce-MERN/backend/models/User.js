const mongoose = require('mongoose')
const Joi = require('joi')
const jwt = require('jsonwebtoken')

const Schema = mongoose.Schema

const UserSchema = new Schema({
    username: {
        type: String,
        required: true,
        trim: true,
        minlength: 2,
        maxlength: 100,
    },
    email: {
        type: String,
        required: true,
        trim: true,
        minlength: 5,
        maxlength: 100,
        unique: true
    },
    password: {
        type: String,
        required: true,
        trim: true,
        minlength: 8,
    },
    profilePhoto: {
        type: Object,
        default: {
            url: "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
            publicId: null
        }
    },
    cart: {
        type: Array
    },
    isAccountVerified: {
        type: Boolean,
        default: false,
    },
}

)

//token 
UserSchema.methods.generateToken = function () {
    return jwt.sign({ id: this._id }, process.env.JWT_SECRET_KEY)
}

//Model User
const User = mongoose.model("user", UserSchema)


//Validate Register User
function ValidateRegisterUser(obj) {
    const Schema = Joi.object({
        username: Joi.string().min(2).max(100).trim().required(),
        email: Joi.string().min(5).max(100).trim().required().email(),
        password: Joi.string().min(8).trim().required(),
    })
    return Schema.validate(obj)
}


//Validate login User
function ValidateLoginUser(obj) {
    const Schema = Joi.object({
        email: Joi.string().min(5).max(100).trim().required().email(),
        password: Joi.string().min(8).trim().required(),
    })
    return Schema.validate(obj)
}


// Validate Email
function validateEmail(obj) {
    const schema = Joi.object({
        email: Joi.string().trim().min(5).max(100).required().email(),
    });
    return schema.validate(obj);
}

// Validate New Password
function validateNewPassword(obj) {
    const schema = Joi.object({
        password: Joi.required(),
    });
    return schema.validate(obj);
}


module.exports = { User, ValidateRegisterUser, ValidateLoginUser, validateEmail, validateNewPassword }
