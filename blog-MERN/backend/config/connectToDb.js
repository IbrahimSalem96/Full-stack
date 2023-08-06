const mongoose = require('mongoose');

module.exports = async () => {
    try {
        mongoose.connect(process.env.MONGO_URL)
    } catch (error) {
        console.log('Connection Failed To MongoDB!', error)
    }
}