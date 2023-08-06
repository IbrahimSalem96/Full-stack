const express = require('express')
const router = express.Router()
const { verifyTokenAdmin } = require('../middlewares/verifyToken')
const validateObjectld = require('../middlewares/validateObjectld')

const {
    createCategorysCtr1,
    getCategoryCtr1,
    deleteCategoryCtr1 } = require('../controllers/categoriesControllers')



router.route('/')
    .post(verifyTokenAdmin, createCategorysCtr1)
    .get(getCategoryCtr1)


router.route('/:id')
    .delete(validateObjectld, verifyTokenAdmin, deleteCategoryCtr1)





module.exports = router