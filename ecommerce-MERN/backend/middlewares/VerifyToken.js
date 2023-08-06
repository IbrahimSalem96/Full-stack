const jwt = require('jsonwebtoken')

//Verify Token user
function verifyToken(req, res, next) {
    const token = req.headers.token

    if (token) {
        try {
            const decoded = jwt.verify(token, process.env.JWT_SECRET_KEY)
            req.user = decoded
            next()
        } catch (error) {
            res.status(401).json("invalid token")
        }
    } else {
        res.status(401).json("no token provided")
    }
}


module.exports = { verifyToken }