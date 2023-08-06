const express = require('express')
const router = express.Router()
const { verifyToken } = require('../middlewares/VerifyToken')
const { getCartCrtl, addCartCtrl, deleteProductCart, newQuantityProductMany } = require('../controllers/cartController')
const validateObjectld = require('../middlewares/validateObjectld')


router.route('/')
    .get(verifyToken, getCartCrtl)
    .post(verifyToken, newQuantityProductMany)

router.route('/:id')
    .put(validateObjectld, verifyToken, addCartCtrl)
    .delete(validateObjectld, verifyToken, deleteProductCart)



module.exports = router


