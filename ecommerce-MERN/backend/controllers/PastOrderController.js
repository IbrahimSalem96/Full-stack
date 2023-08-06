const asyncHandler = require('express-async-handler')
const { User } = require('../models/User')
const { PastOrder } = require('../models/PastOrder')
const jwt = require('jsonwebtoken')




/**-------------------------------------------------------------
 * @desc    Add Past Oreder
 * @route   /api/pastorder 
 * @method  POST
 * @access  private ( only logged in user )
---------------------------------------------------------------*/
module.exports.addPastOrederCtrl = asyncHandler(async (req, res) => {
    const user = await User.findById(req.user.id)
    const pastOrder = user.cart
    let trash
    if (pastOrder.length) {

        for (let i = 0; i < pastOrder.length; i++) {
            trash = new PastOrder(
                {
                    title: pastOrder[i].title,
                    description: pastOrder[i].description,
                    price: pastOrder[i].price,
                    user: req.user.id,
                    image: pastOrder[i].image,
                    quantity: pastOrder[i].quantity,
                },
            )
            await trash.save()
        }
        user.cart = []
        await user.save()
        res.status(200).json({ message: 'Order Done', user })
    } else {
        res.status(404).json({ message: 'You have no orders' })
    }
})


/**
* 
*  @desc Get all pastorder
*  @route /api/pastorder 
*  @method GET
*  @access public 
* 
*/
module.exports.getPastOrder = asyncHandler(async (req, res) => {
    const pastOrder = await PastOrder.find();
    const user = await User.findById(req.user.id);
    const arr = pastOrder.filter(past => past.user.toString() == req.user.id);
    res.status(200).json(arr);
});



/**-------------------------------------------------------------
 * @desc    Delete Past Order 
 * @route   /api/pastorder/:id 
 * @method  DELETE
 * @access  private ( only logged in user )
---------------------------------------------------------------*/
module.exports.deletePastOrederCtrl = asyncHandler(async (req, res) => {
    const findorders = await PastOrder.findById(req.params.id)
    if (!findorders) {
        res.status(404).json({ message: 'Not found' })
    }
    const orders = await PastOrder.findByIdAndDelete({ _id: req.params.id })
    res.status(200).json({ message: 'Deleted successfully' })
})
