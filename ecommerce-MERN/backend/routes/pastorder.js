const express = require('express')
const router = express.Router()
const { verifyToken } = require('../middlewares/VerifyToken')
const { addPastOrederCtrl, getPastOrder, deletePastOrederCtrl } = require('../controllers/PastOrderController')
const validateObjectld = require('../middlewares/validateObjectld')


router.route('/')
    .post(verifyToken, addPastOrederCtrl)
    .get(verifyToken, getPastOrder)

router.route('/:id')
    .delete(validateObjectld, verifyToken, deletePastOrederCtrl)


module.exports = router


