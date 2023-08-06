const mongoose = require('mongoose');
const Joi = require('joi');

const Schema = mongoose.Schema

const ProductskSchema = new Schema({
    title: {
        type: String,
        required: true,
        trim: true,
        maxLength: 100,
        minLength: 3
    },
    description: {
        type: String,
        required: true,
        trim: true,
        maxLength: 1024,
        minLength: 0
    },
    price: {
        type: Number,
        required: true,
        trim: true,
    },
    quantity: {
        type: Number,
    },
    image: {
        type: Object,
    },
},)


const Product = mongoose.model('Product', ProductskSchema);
// Product.insertMany([
//     {
//         title: "Modern Single Sofa",
//         description: "A modern and comfortable single sofa for your living room.",
//         price: 499.99,
//         quantity: 10,
//         image: "https://www3.0zz0.com/2023/07/29/16/693080776.png"
//     },
//     {
//         title: "Modern L-Shaped Sofa",
//         description: "A modern and spacious L-shaped sofa for your living room.",
//         price: 899.99,
//         quantity: 8,
//         image: "https://www3.0zz0.com/2023/07/29/16/374516210.png"
//     },
//     {
//         title: "Compact Single Sofa",
//         description: "A compact and space-saving single sofa for small living areas.",
//         price: 349.99,
//         quantity: 12,
//         image: "https://www3.0zz0.com/2023/07/29/16/181748099.png"
//     },
//     {
//         title: "Mid-Century Modern Dining Chair",
//         description: "A mid-century modern dining chair with a sleek and minimalist look.",
//         price: 109.99,
//         quantity: 14,
//         image: "https://www3.0zz0.com/2023/07/29/16/524493947.png"
//     },
//     {
//         title: "Classic Wooden Dining Table",
//         description: "A classic wooden dining table that complements any decor.",
//         price: 599.99,
//         quantity: 5,
//         image: "https://www3.0zz0.com/2023/07/29/16/588240244.png"
//     },
//     {
//         title: "Mid-Century rectangle Dining Table",
//         description: "A mid-century rectangle dining table with a timeless design.",
//         price: 749.99,
//         quantity: 6,
//         image: "https://www6.0zz0.com/2023/07/29/16/927239235.png"
//     },
//     {
//         title: "Modern Wooden Bedside Table",
//         description: "A modern wooden bedside table with a sleek design.",
//         price: 99.99,
//         quantity: 15,
//         image: "https://www10.0zz0.com/2023/07/29/16/522092489.png"
//     },
//     {
//         title: "Classic Leather Office Chair",
//         description: "A classic leather office chair with a traditional and elegant design.",
//         price: 299.99,
//         quantity: 8,
//         image: "https://www10.0zz0.com/2023/07/29/16/550427689.png"
//     },
//     {
//         title: "Sleek Leather Office Chair",
//         description: "A sleek leather office chair that complements any workspace.",
//         price: 269.99,
//         quantity: 9,
//         image: "https://www8.0zz0.com/2023/07/29/16/763186893.png"
//     },
//     {
//         title: "Wooden garden Table",
//         description: "A sturdy and practical wooden garden table for your living space.",
//         price: 149.99,
//         quantity: 18,
//         image: "https://www3.0zz0.com/2023/07/29/16/588240244.png"
//     },
//     {
//         title: "Velvet Single Sofa",
//         description: "A luxurious velvet single sofa that adds elegance to any space.",
//         price: 599.99,
//         quantity: 7,
//         image: "https://www12.0zz0.com/2023/07/29/16/395332064.png"
//     },
//     {
//         title: "Modern Geometric Wall Art",
//         description: "A modern geometric wall art that adds a contemporary touch to your space.",
//         price: 49.99,
//         quantity: 20,
//         image: "https://www12.0zz0.com/2023/07/29/16/698658499.png"
//     },
//     {
//         title: "Velvet Green Sofa",
//         description: "A luxurious velvet chaise sofa for comfort and style.",
//         price: 949.99,
//         quantity: 4,
//         image: "https://www12.0zz0.com/2023/07/29/16/826482816.png"
//     },
//     {
//         title: "Chic Fabric Dining Chair",
//         description: "A chic fabric dining chair with a stylish and comfortable design.",
//         price: 119.99,
//         quantity: 10,
//         image: "https://www12.0zz0.com/2023/07/29/16/919670706.png"
//     },
//     {
//         title: "Chaise Lounge Sofa",
//         description: "An elegant chaise lounge sofa for added comfort and style.",
//         price: 799.99,
//         quantity: 7,
//         image: "https://www12.0zz0.com/2023/07/29/16/596830397.png"
//     },
//     {
//         title: "Modern Glass Top Dining Table",
//         description: "A modern glass top dining table that exudes elegance.",
//         price: 699.99,
//         quantity: 5,
//         image: "https://www7.0zz0.com/2023/07/29/16/383207061.png"
//     },
//     {
//         title: "Orange Single Sofa Chair",
//         description: "An orange single sofa chair that adds a pop of color and comfort to your living room.",
//         price: 349.99,
//         quantity: 3,
//         image: "https://www7.0zz0.com/2023/07/29/16/406364838.png"
//     },
//     {
//         title: "Modern Living Room Storage Unit",
//         description: "A modern living room storage unit with ample space for organizing your belongings.",
//         price: 499.99,
//         quantity: 2,
//         image: "https://www7.0zz0.com/2023/07/29/16/315707503.png"
//     },
//     {
//         title: "Modern Platform Bed",
//         description: "A modern platform bed that combines style and comfort.",
//         price: 899.99,
//         quantity: 3,
//         image: "https://www12.0zz0.com/2023/07/29/16/965119591.png"
//     },
//     {
//         title: "White Kitchen ",
//         description: "A beautiful white kitchen  that brings a clean and fresh look to your kitchen.",
//         price: 1599.99,
//         quantity: 1,
//         image: "https://www12.0zz0.com/2023/07/29/16/872799461.png"
//     },
//     {
//         title: "Brown Comfy Sofa",
//         description: "A brown comfy sofa that offers ultimate relaxation and comfort.",
//         price: 799.99,
//         quantity: 4,
//         image: "https://www5.0zz0.com/2023/07/29/16/171068701.png"
//     },
//     {
//         title: "White Modern Sofa",
//         description: "A white modern sofa that combines contemporary design with comfort.",
//         price: 899.99,
//         quantity: 5,
//         image: "https://www5.0zz0.com/2023/07/29/16/510782408.png"
//     },
//     {
//         title: "Modern Single Sofa",
//         description: "A modern and comfortable single sofa for your living room.",
//         price: 499.99,
//         quantity: 10,
//         image: "https://www3.0zz0.com/2023/07/29/16/693080776.png"
//     },
//     {
//         title: "Modern L-Shaped Sofa",
//         description: "A modern and spacious L-shaped sofa for your living room.",
//         price: 899.99,
//         quantity: 8,
//         image: "https://www3.0zz0.com/2023/07/29/16/374516210.png"
//     }

// ]).then(function () {
//     console.log("Data inserted")  // Success
// }).catch(function (error) {
//     console.log(error)      // Failure
// });



module.exports = { Product }