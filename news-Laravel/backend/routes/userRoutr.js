const express = require('express')
const router = express.Router()
const validateObjegtId = require('../middlewares/validateObjectld') //this middlewares validateObjectld
const photoUpload = require('../middlewares/photoupload')
const {
    getAllUserCtr1,
    updateUserProfileCtr1,
    getUsersCountCtr1,
    profilePhotoUp1oadCtr1,
    deleteUsersAccountCtr1,
    getUserProfileCtr1 } = require("../controllers/UserControllers")
const { verifyToken,
    verifyTokenAdmin,
    verifyTokenAndOnlyUser,
    verifyTokenAndOnlyAuthorization } = require('../middlewares/verifyToken')


//Get profile 
router.route('/profile').get(verifyTokenAdmin, getAllUserCtr1)


//Get User By ID 
router.route('/profile/:id')
    .get(validateObjegtId, getUserProfileCtr1)
    .put(validateObjegtId, verifyTokenAndOnlyUser, updateUserProfileCtr1)
    .delete(validateObjegtId, verifyTokenAndOnlyAuthorization, deleteUsersAccountCtr1)


//Get Count Users
router.route('/count').get(verifyTokenAdmin, getUsersCountCtr1)


//Upload image
router.route('/Profile/profile-photo-upload').post(verifyToken, photoUpload.single('image'), profilePhotoUp1oadCtr1)


module.exports = router 