const asyncHandler = require('express-async-handler')
const { Product } = require('../models/Products')


/**
* 
*  @desc Get all Product
*  @route /api/product
*  @method GET
*  @access public 
* 
*/
module.exports.getA11Products = asyncHandler(async (req, res) => {
    const product = await Product.find({})
    res.status(200).json(product)
})



/**
* 
*  @desc Get Product By Id
*  @route /api/product/:id
*  @method GET
*  @access public 
* 
*/
module.exports.getProductsById = asyncHandler(async (req, res) => {
    const product = await Product.findById(req.params.id)
    res.status(200).json(product)
})



/**
* 
*  @desc New Quantity Product
*  @route /api/product/:id
*  @method PUT
*  @access public 
* 
*/
module.exports.newQuantityProduct = asyncHandler(async (req, res) => {
    const { id } = req.params;
    const count = req.body.count;

    const product = await Product.findById(id);
    if (!product) {
        return res.status(404).json({ message: 'not found' });
    }

    if (product.quantity >= count) {
        product.quantity -= count;
    } else {
        return res.status(400).json({ message: 'The required quantity is greater than the available quantity. Please request the available quantity.' });
    }

    await product.save()
    res.json({ message: 'The request has been added', product });
})






