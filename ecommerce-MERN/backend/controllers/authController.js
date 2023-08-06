const asyncHandler = require('express-async-handler')
const { User, ValidateRegisterUser, ValidateLoginUser } = require('../models/User')
const bcrypt = require('bcrypt')
const VerificationToken = require("../models/VerificationToken");
const crypto = require("crypto");
const sendEmail = require("../utils/sendEmail");

/**
 *
 *  @desc Register New User
 *  @route /api/auth/register
 *  @method POST
 *  @access public
 *
 */
const register = asyncHandler(async (req, res) => {
    const { error } = ValidateRegisterUser(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    let user = await User.findOne({ email: req.body.email })
    if (user) {
        return res.status(400).json("This user is already registered.")
    }

    const salt = await bcrypt.genSalt(10);
    req.body.password = await bcrypt.hash(req.body.password, salt)

    user = new User({
        email: req.body.email,
        username: req.body.username,
        password: req.body.password,
    })

    const result = await user.save()

    // Creating new VerificationToken & save it toDB
    const verifictionToken = new VerificationToken({
        userId: user._id,
        token: crypto.randomBytes(32).toString("hex"),
    });
    await verifictionToken.save();

    // Making the link
    const link = `${process.env.CLIENT_DOMAIN}users/${user._id}/verify/${verifictionToken.token}`;

    // Putting the link into an html template
    const htmlTemplate = `
    <div>
        <p>Click on the link below to verify your email</p>
        <a href="${link}">Verify</a>
    </div>`;

    // Sending email to the user
    await sendEmail(user.email, "Verify Your Email", htmlTemplate);

    // Response to the client
    res.status(201).json({
        message: "We sent to you an email, please verify your email address",
    });

})



/**
 *
 *  @desc Login User
 *  @route /api/auth/login
 *  @method POST
 *  @access public
 *
 */
const login = asyncHandler(async (req, res) => {
    const { error } = ValidateLoginUser(req.body)
    if (error) {
        return res.status(400).json({ message: error.details[0].message })
    }

    let user = await User.findOne({ email: req.body.email })
    if (!user) {
        return res.status(401).json("invalid email or password")
    }

    const isPasswordMatch = await bcrypt.compare(req.body.password, user.password)
    if (!isPasswordMatch) {
        return res.status(401).json("invalid email or password")
    }

    if (!user.isAccountVerified) {
        let verificationToken = await VerificationToken.findOne({
            userId: user._id,
        });


        if (!verificationToken) {
            verificationToken = new VerificationToken({
                userId: user._id,
                token: crypto.randomBytes(32).toString("hex"),
            });
            await verificationToken.save();
        }

        const link = `${process.env.CLIENT_DOMAIN}/users/${user._id}/verify/${verificationToken.token}`;

        const htmlTemplate = `
    <div>
        <p>Click on the link below to verify your email</p>
        <a href="${link}">Verify</a>
    </div>`;

        await sendEmail(user.email, "Verify Your Email", htmlTemplate);

        return res.status(400).json({
            message: "We sent to you an email, please verify your email address",
        });
    }

    const token = user.generateToken()
    const { password, ...other } = user._doc
    res.status(201).json({ ...other, token })
})




/**-----------------------------------------------
 * @desc    Verify User Account
 * @route   /api/auth/:userId/verify/:token
 * @method  GET
 * @access  public
-------------------------------------------------*/
const verifyUserAccountCtrl = asyncHandler(async (req, res) => {
    // console.log(req.params.userId)
    // console.log(req.params.token)


    const user = await User.findById(req.params.userId);
    if (!user) {
        return res.status(400).json({ message: "invalid link" });
    }

    const verificationToken = await VerificationToken.findOne({
        userId: user._id,
        token: req.params.token,
    });

    if (!verificationToken) {
        return res.status(400).json({ message: "invalid link" });
    }


    user.isAccountVerified = true;
    await user.save();

    await VerificationToken.findOneAndDelete({ userId: user._id, });

    res.status(200).json({ message: "Your account verified" });
});


module.exports = { register, login, verifyUserAccountCtrl }