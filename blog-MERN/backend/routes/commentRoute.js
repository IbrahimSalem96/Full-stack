const express = require('express')
const router = express.Router()
const {
    createCommentCtr1,
    getAllCommentsCtr1,
    dleleteCommentCtr1,
    updateCommentCtr1 } = require('../controllers/commentControllers')
const { verifyToken, verifyTokenAdmin } = require('../middlewares/verifyToken')
const validateObjectld = require('../middlewares/validateObjectld')


router.route('/')
    .post(verifyToken, createCommentCtr1)
    .get(verifyTokenAdmin, getAllCommentsCtr1)



router.route('/:id')
    .delete(validateObjectld, verifyToken, dleleteCommentCtr1)


router.route('/:id')
    .put(validateObjectld, verifyToken, updateCommentCtr1)








module.exports = router