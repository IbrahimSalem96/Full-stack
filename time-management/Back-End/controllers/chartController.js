const asyncHandler = require('express-async-handler')
const { Task } = require('../models/Task')


/**-------------------------------------------------------------
 * @desc    Get Count 
 * @route   /api/chart
 * @method  GET
 * @access  public  
---------------------------------------------------------------*/
module.exports.getCountTODOCtr1 = asyncHandler(async (req, res) => {
    const task = await Task.find()
    let arrCount = []
    let arrTitle = []
    for (let i = 0; i < task.length; i++) {
        arrCount.push(task[i].list.length)
        arrTitle.push(task[i].title)
    }

    //Total number of tasks
    const totalSum = arrCount.reduce((sum, current) => sum + current, 0)

    arrTitle.push('Total Task ')
    arrCount.push(totalSum)

    res.status(200).json({ arrCount, arrTitle, totalSum })

})

