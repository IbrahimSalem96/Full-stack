const asyncHandler = require('express-async-handler')
const { Category, validateCreateCategory } = require('../models/Category.js')

/**-------------------------------------------------------------
 * @desc    Create New Category
 * @route   /api/categories
 * @method  POST
 * @access  private ( only Admin )
---------------------------------------------------------------*/
module.exports.createCategorysCtr1 = asyncHandler(async (req, res) => {
    const { error } = validateCreateCategory(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    const category = await Category.create({
        title: req.body.title,
        user: req.user.id
    })

    res.status(201).json(category)
})


/**-------------------------------------------------------------
 * @desc    Get All categories
 * @route   /api/categories
 * @method  GET
 * @access  private ( only Admin )
---------------------------------------------------------------*/
module.exports.getCategoryCtr1 = asyncHandler(async (req, res) => {
    const categories = await Category.find()
    res.status(200).json(categories)
})


/**-------------------------------------------------------------
 * @desc    Delete Category
 * @route   /api/categories/:id
 * @method  DELETE
 * @access  private ( only Admin )
---------------------------------------------------------------*/
module.exports.deleteCategoryCtr1 = asyncHandler(async (req, res) => {

    const category = await Category.findById(req.params.id)
    if (!category) {
        res.status(404).json("category not found")
    }

    await Category.findByIdAndDelete(req.params.id)
    res.status(201).json({ message: ' category has been deleted successfully', categoryId: category._id })
})
