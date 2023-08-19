const mongoose = require('mongoose')

const Schema = mongoose.Schema

const TaskSchema = new Schema({
    title: {
        type: String,
        required: true,
        trim: true,
        minlength: 2,
        maxlength: 100,
    },
    color: {
        type: String,
        trim: true,
        required: true,
    },
    list: {
        type: Array,
    },
})

//Model Task
const Task = mongoose.model("Task", TaskSchema)

module.exports = { Task }
