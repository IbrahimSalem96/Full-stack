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
    bio: {
        type: String
    },
    isAdmin: {
        type: Boolean,
        default: false
    },
    isAccuntVerified: {
        type: Boolean,
        default: false
    }
}, {
    timestamps: true,
    //In order for virtual to work, both
    toJSON: { virtuals: true },
    toObject: { virtuals: true }
}
)


// virtual in mongoose
// Populate Posts That Belongs To This User When he/she Get his/her Profile
UserSchema.virtual("posts", { //posts => He will add an array containing all the posts of the person who downloaded it, in case he has posts, and add the posts inside the schema
    ref: "Post", //Reference Posts  collection
    foreignField: "user", // In the model post, I have a relationship with the user, and this is how I say bring the id to the posts that match this id
    localField: "_id" // After you answer the ID, store the ID for each post with the person's account
})

//Generate Auth Token 
UserSchema.methods.generateAuthToken = function () {
    return jwt.sign({ id: this._id, isAdmin: this.isAdmin }, process.env.JWT_SECRET)
}


//Model User
const User = mongoose.model("User", UserSchema)


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


//Validate Update User
function ValidateUpdateUser(obj) {
    const Schema = Joi.object({
        username: Joi.string().min(2).max(100).trim(),
        password: Joi.string().min(8).trim(),
        bio: Joi.string()
    })
    return Schema.validate(obj)
}


module.exports = { User, ValidateRegisterUser, ValidateLoginUser, ValidateUpdateUser }