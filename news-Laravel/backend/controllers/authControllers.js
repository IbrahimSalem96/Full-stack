const asyncHandler = require('express-async-handler')
const bcrypt = require('bcryptjs')
const { User, ValidateRegisterUser, ValidateLoginUser } = require('../models/User')


/**-------------------------------------------------------------
 * @desc    Register New User
 * @route   /api/auth/register
 * @method  POST
 * @access  public
---------------------------------------------------------------*/
module.exports.registerUserCtr1 = asyncHandler(async (req, res) => {

    const { error } = ValidateRegisterUser(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    let user = await User.findOne({ email: req.body.email })
    if (user) {
        return res.status(400).json({ message: "user already exist" })
    }

    const salt = await bcrypt.genSalt(10)
    const hashedPassword = await bcrypt.hash(req.body.email, salt)

    user = new User({
        username: req.body.username,
        email: req.body.email,
        password: hashedPassword
    })

    await user.save()
    res.status(201).json({ message: "you registered successfully, please log in" })

})


/**-------------------------------------------------------------
 * @desc    Login User
 * @route   /api/auth/login
 * @method  POST
 * @access  public
---------------------------------------------------------------*/
module.exports.loginUserCtrl = asyncHandler(async (req, res) => {
    const { error } = ValidateLoginUser(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    const user = await User.findOne({ email: req.body.email })
    if (!user) {
        return res.status(400).json({ message: "nvalid email or password" })
    }

    const isPasswordMatch = await bcrypt.compare(req.body.email, user.password)
    if (!isPasswordMatch) {
        return res.status(400).json({ message: "nvalid email or password" })
    }

    const token = user.generateAuthToken()

    res.status(200).json({
        _id: user._id,
        isAdmin: user.isAdmin,
        profilePhoto: user.profilePhoto,
        token,
        username: user.username
    })


})