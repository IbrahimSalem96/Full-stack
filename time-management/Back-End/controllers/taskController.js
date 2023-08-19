const asyncHandler = require('express-async-handler')
const { Task } = require('../models/Task')


/**-------------------------------------------------------------
 * @desc    Get All Task
 * @route   /api/task
 * @method  GET
 * @access  public  
---------------------------------------------------------------*/
module.exports.getAllColumnCtr1 = asyncHandler(async (req, res) => {
    const task = await Task.find({})
    res.status(200).json(task)
})


/**-------------------------------------------------------------
 * @desc    Create Column   
 * @route   /api/task
 * @method  PUT
 * @access  public  
---------------------------------------------------------------*/
module.exports.createColumnCtr1 = asyncHandler(async (req, res) => {
    const existingColumn = await Task.findOne({ title: req.body.title });

    if (existingColumn) {
        return res.status(403).json({ message: 'This field already exists' });
    }

    const column = new Task({
        title: req.body.title,
        color: req.body.color,
    });

    await column.save();
    res.status(200).json(column);
});

/**-------------------------------------------------------------
 * @desc    Update New Task
 * @route   /api/task/ 
 * @method  PUT
 * @access  public  
---------------------------------------------------------------*/
module.exports.updateColumnCtr1 = asyncHandler(async (req, res) => {
    const task = await Task.findOne({ title: req.body.column });
    if (!task) {
        return res.status(404).json({ message: 'Task not found' });
    }

    // Insert All Data 
    const newData = {
        title: req.body.title,
        task: req.body.task,
        success: [],
    };

    // Use push() to add newData to the list array
    task.list.push(newData);

    await task.save();

    res.status(200).json(task);
});


/**-------------------------------------------------------------
 * @desc    Update Success Task
 * @route   /api/task/success/:index/:substask/:id/
 * @method  PUT
 * @access  public
---------------------------------------------------------------*/
module.exports.updateSuccessTaskCtr1 = asyncHandler(async (req, res) => {

    //index array of list
    const taskId = req.params.id;

    //id List
    const index = req.params.index;

    //index subtask in array
    const taskIndex = req.params.substask;
    try {
        let task = await Task.findById(taskId);

        if (!task) {
            return res.status(404).json({ message: 'Task not found' });
        }

        if (!task.list[index] || !task.list[index].task[taskIndex]) {
            return res.status(400).json({ message: 'Invalid task index or task does not exist' });
        }

        //Update the array and delete it from the task array
        const movedTask = task.list[index].task.splice(taskIndex, 1);
        task.list[index].success.push(movedTask[0]);

        //Save New Data
        let arr = task.list

        //Delete all Date
        task.list = []

        //Push New Array
        for (let i = 0; i < arr.length; i++) {
            task.list.push(arr[i])
        }

        await task.save();
        res.status(200).json(task);

    } catch (error) {
        return res.status(500).json({ message: 'Error updating task', error });
    }
});


/**-------------------------------------------------------------
 * @desc    Move to another column
 * @route   /api/task/:index/:id
 * @method  PUT
 * @access  public  
---------------------------------------------------------------*/
module.exports.changeColumnCtr1 = asyncHandler(async (req, res) => {
    const taskIndex = req.params.index;
    const taskId = req.params.id;
    try {
        const task = await Task.findById(taskId);

        if (!task) {
            return res.status(404).json({ message: 'Task not found' });
        }

        if (taskIndex < 0 || taskIndex >= task.list.length) {
            return res.status(400).json({ message: 'Invalid task index' });
        }

        // Extract the specified task using the index taskIndex
        const selectedTask = task.list[taskIndex];

        // delete the specified task from the list array in the document (task)
        task.list.splice(taskIndex, 1);

        const newColumn = await Task.findOne({ title: req.body.column });
        if (!newColumn) {
            return res.status(404).json({ message: 'New column not found' });
        }

        // Add the specified task to the list array in the new column document
        newColumn.list.push(selectedTask);

        await newColumn.save();
        await task.save();
        res.status(200).json(newColumn);

    } catch (error) {
        return res.status(500).json({ message: 'Error moving task to new column', error });

    }
});


/**-------------------------------------------------------------
 * @desc    Delete Column
 * @route   /api/task/:id
 * @method  DELETE
 * @access  public  
---------------------------------------------------------------*/
module.exports.deleteColumnCtr1 = asyncHandler(async (req, res) => {
    const column = await Task.findById(req.params.id)
    if (!column) {
        res.status(404).json({ message: "Column not found" })
    }

    await Task.findByIdAndDelete(req.params.id)
    res.status(200).json({ message: "Column has been deleted" })
});