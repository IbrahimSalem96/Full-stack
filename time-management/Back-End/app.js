const express = require('express')
const connectToDb = require('./config/connectToDb')
const { errorHandler, notFound } = require('./middlewares/error.js')
const cors = require('cors')
require('dotenv').config()

//connection to  Database
connectToDb()


//Init App
const app = express()

//integration API 
app.use(cors({
    origin: 'http://localhost:3000'
}))

//Middleware
app.use(express.json())


//Router 
app.use('/api/task', require('./routes/taskRoute'))
app.use('/api/chart', require('./routes/chartRoute'))


// Error Handler Middleware'
app.use(notFound)
app.use(errorHandler)


//Running The Server
app.listen(process.env.PORT, () => {
    console.log(`Server is running in ${process.env.MODE_ENV} mode on port ${process.env.PORT}`)
})