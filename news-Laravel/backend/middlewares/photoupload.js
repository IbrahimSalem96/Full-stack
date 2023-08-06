const multer = require('multer')
const path = require('path')


//photo Storage
const photoStorage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, path.join(__dirname, "../images/"))
    },
    filename: function (req, file, cb) {
        if (file) {
            cb(null, new Date().toISOString().replace(/:/g, "-") + file.originalname)
        } else {
            cb(null, false)
        }
    }
})


// Photo Upload Middleware
const photoUpload = multer({
    storage: photoStorage,
    fileFilter: function (req, file, cb) { // filter uplop image 
        if (file.mimetype.startsWith("image")) { // only image jpg or png . . .. 
            cb(null, true)
        } else {
            cb({ message: "Unsupported file format" }, false)
        }
    },
    // limits: { fileSize: 1024 * 1024 *2 } // 2 megabyte
    limits: { fileSize: 1024 * 1024 } // 1 megabyte
})


module.exports = photoUpload