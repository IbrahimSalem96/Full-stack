const express = require('express')
const router = express.Router()
const { verifyToken } = require('../middlewares/VerifyToken')
const { getA11Products, getProductsById, newQuantityProduct } = require('../controllers/productController')
const validateObjectld = require('../middlewares/validateObjectld')


router.route('/')
    .get(getA11Products)

router.route('/:id')
    .get(validateObjectld, getProductsById)
    .put(validateObjectld, verifyToken, newQuantityProduct)

module.exports = router


