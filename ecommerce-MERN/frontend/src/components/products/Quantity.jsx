import React, { useState, useEffect, useContext } from 'react'
import { Button, Text, Group } from '@mantine/core'
import { UserInfoContext } from '../../context/UserInfoProvider'
import { ToastContainer, toast } from 'react-toastify'
import axios from 'axios'


export function QuantityInput({ productId, product, setProduct }) {
  const [count, setCount] = useState(1);
  const { userInfo, setUserInfo } = useContext(UserInfoContext)


  const handleIncrement = () => {
    if (count < 10) {
      setCount((prevCount) => prevCount + 1)
    }
  };

  const handleDecrement = () => {
    if (count > 1) {
      setCount((prevCount) => prevCount - 1)
    }
  };

  //Fetch New Data
  const fetchData = async (productID) => {
    try {
      const token = JSON.parse(localStorage.getItem('userInfo')).token
      //check Count Product 
      await axios.put(`http://localhost:8000/api/product/${productID}`, { count }, {
        headers: {
          token: token,
        },
      })

      //Add Product in Cart 
      const response = await axios.put(`http://localhost:8000/api/cart/${productID}`, { count }, {
        headers: {
          token: token,
        },
      });

      const updatedUserInfo = {
        ...response.data.user,
        token: token,
      };
      localStorage.setItem('userInfo', JSON.stringify(updatedUserInfo));
      setUserInfo(updatedUserInfo);

      const updatedData = { ...product, quantity: product.quantity - count };
      setProduct(updatedData);

      toast.success(response.data.message, {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      })
    } catch (error) {
      toast.error(error.response.data.message, {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      })
    }
  };

  //Add cart in user 
  const addCart = (productID) => {
    if (userInfo) {
      fetchData(productID);
    } else {
      toast.error('👮 You must be logged in!', {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      });
    }
  }

  return (
    <div>
      <Group style={{ marginTop: '30px' }}>
        <ToastContainer
          position="bottom-left"
          autoClose={5000}
          hideProgressBar={false}
          newestOnTop={false}
          closeOnClick
          rtl={false}
          pauseOnFocusLoss
          draggable
          pauseOnHover
          theme="colored"
        />
        <Button onClick={handleDecrement}>-</Button>
        <Text style={{ fontSize: 18, margin: '0 10px' }}>{count}</Text>
        <Button onClick={handleIncrement}>+</Button>
        <Button onClick={() => addCart(productId)}><i className="bi bi-cart-fill" style={{ marginRight: '10px' }}></i> ADD TO CART</Button>
      </Group>
    </div >
  );
};
