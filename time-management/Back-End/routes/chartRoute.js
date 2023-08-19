const express = require('express')
const router = express.Router()
const { getCountTODOCtr1 } = require('../controllers/chartController')


// route 
router.route('/')
    .get(getCountTODOCtr1)


module.exports = router
