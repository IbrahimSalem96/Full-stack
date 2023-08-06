const express = require('express')
const connectToDb = require('./config/connectToDb')
const { errorHandler, notFound } = require('./middlewares/error.js')
const cors = require('cors')
require('dotenv').config()

//integration API 


//connection to  Database
connectToDb()


//Init App
const app = express()


app.use(cors({
    origin: 'http://localhost:3000'
}))

//Middleware
app.use(express.json())


//Router 
app.use('/api/auth/', require('./routes/authRoute'))
app.use('/api/users/', require('./routes/userRoutr'))
app.use('/api/posts/', require('./routes/postRoute'))
app.use('/api/comments/', require('./routes/commentRoute'))
app.use('/api/categories/', require('./routes/categoryRoute'))


// Error Handler Middleware'
app.use(notFound)
app.use(errorHandler)


//Running The Server
const PORT = process.env.PORT || 8000
app.listen(PORT, "127.0.0.1", () => {
    console.log(`Server is running in ${process.env.MODE_ENV} mode on port ${PORT}`)
})