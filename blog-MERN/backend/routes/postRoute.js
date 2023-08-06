const express = require('express')
const router = express.Router()
const { verifyToken } = require('../middlewares/verifyToken')
const photoUpload = require('../middlewares/photoupload')
const validateObjegtId = require('../middlewares/validateObjectld')
const {
    createPostCtr1,
    getAllPostCtrl,
    getSinglePostCtrl,
    getCountPostCtrl,
    getDeletePostCtrl,
    UpdatePostCtrl,
    UpdatePostImageCtrl,
    ToggleLikeCtrl } = require('../controllers/postControllers')

//Get Post & Creat Post 
router.route('/')
    .post(verifyToken, photoUpload.single('image'), createPostCtr1)
    .get(getAllPostCtrl)


//Get Count Posts
router.route('/count').get(getCountPostCtrl)


//Get Post By ID 
router.route('/:id')
    .get(validateObjegtId, getSinglePostCtrl)
    .delete(validateObjegtId, verifyToken, getDeletePostCtrl)
    .put(validateObjegtId, verifyToken, UpdatePostCtrl)

//Update Post image by ID 
router.route('/upload-image/:id').put(validateObjegtId, verifyToken, photoUpload.single('image'), UpdatePostImageCtrl)


// Toggle Like 
router.route('/like/:id').put(validateObjegtId, verifyToken, ToggleLikeCtrl)

module.exports = router