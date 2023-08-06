const mongoose = require('mongoose');
const Joi = require('joi');

const Schema = mongoose.Schema

const PastOrderSchema = new Schema({
    title: {
        type: String,
    },
    description: {
        type: String,
    },
    price: {
        type: Number,
    },
    user: {
        type: mongoose.Schema.Types.ObjectId,
        ref: 'user'
    },
    image: {
        type: String
    }
},)


const PastOrder = mongoose.model('PastOrder', PastOrderSchema);


module.exports = { PastOrder }