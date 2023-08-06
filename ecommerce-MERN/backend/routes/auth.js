const express = require('express')
const router = express.Router()
const { register, login, verifyUserAccountCtrl } = require('../controllers/authController')


router.post('/register', register)

router.post('/login', login)

router.get('/:userId/verify/:token', verifyUserAccountCtrl);



module.exports = router
