// Not Found Middleware
const notFound = (req, res, next) => {

    const error = new Error(`not Found ${req.originalUrl}`)
    res.status(404)
    next(error)
}


// Error Handler Middleware
const errorHandler = (err, req, res, next) => {

    const statusCode = res.statusCode === 200 ? 500 : res.statusCode

    res.status(statusCode).json({
        message: err.message,
        stack: process.env.MODE_ENV === "production" ? null : err.stack // If there is an error in the server, the error path is not shown in the development environment
    })
}


module.exports = { errorHandler, notFound }