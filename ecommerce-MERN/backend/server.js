const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');
const { errorHandler, notFound } = require('./middlewares/error.js')
const app = express();
require('dotenv').config();


app.use(cors());
app.use(express.json());



// connect to db
mongoose
  .connect(process.env.MONGO_URL)
  .then(() => {
    console.log('connected to database');
    // listen to port
  })
  .catch((err) => {
    console.log(err);
  });

//routes 
app.use('/api/auth', require('./routes/auth'))
app.use('/api/product', require('./routes/product'))
app.use('/api/users', require('./routes/user'))
app.use('/api/cart', require('./routes/cart'))
app.use('/api/pastorder', require('./routes/pastorder'))
app.use('/password', require('./routes/password'))


// Error Handler Middleware'
app.use(notFound)
app.use(errorHandler)


app.listen(process.env.PORT, () => {
  console.log('listening for requests on port', process.env.PORT);
});
