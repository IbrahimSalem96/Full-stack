const express = require('express')
const router = express.Router()
const { getAllColumnCtr1, createColumnCtr1, updateColumnCtr1,
    updateSuccessTaskCtr1, changeColumnCtr1, deleteColumnCtr1 } = require('../controllers/taskController')
const validateObjegtId = require('../middlewares/validateObjectld')


router.route('/')
    .get(getAllColumnCtr1)
    .post(createColumnCtr1)
    .put(updateColumnCtr1)


router.route('/success/:index/:substask/:id')
    .put(validateObjegtId, updateSuccessTaskCtr1)


router.route('/:index/:id')
    .put(validateObjegtId, changeColumnCtr1)


router.route('/:id')
    .delete(validateObjegtId, deleteColumnCtr1)


module.exports = router
