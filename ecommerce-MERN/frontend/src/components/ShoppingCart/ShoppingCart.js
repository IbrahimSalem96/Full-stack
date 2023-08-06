import {
  Avatar,
  Table,
  Group,
  Text,
  ActionIcon,
  Anchor,
  ScrollArea,
} from "@mantine/core";
import { IconTrash } from "@tabler/icons-react";
import { QuantityInput } from "../Quantity/Quantity";
import { useState, useEffect } from 'react';
import { ToastContainer, toast } from 'react-toastify'
import axios from 'axios'



export default function ShoppingCart({ userInfo, setUserInfo }) {

  const [cart, setCart] = useState(userInfo.cart);
  // const [count, setCount] = useState(1);
  const [product, setProduct] = useState([]);


  //Increase Number  Quantity Product
  const handleIncreaseQuantity = (itemIndex) => {
    const updatedCart = [...cart]
    updatedCart[itemIndex].quantity++;
    setCart(updatedCart)
    setUserInfo({
      ...userInfo,
      cart: updatedCart,
    })
  };


  //Decrease Number  Quantity Product
  const handleDecreaseQuantity = (itemIndex) => {
    const updatedCart = [...cart]
    updatedCart[itemIndex].quantity--;
    setCart(updatedCart)
    setUserInfo({
      ...userInfo,
      cart: updatedCart,
    })
  };


  // Get All Product in Data
  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get('http://localhost:8000/api/product'); // Replace '/api/data' with your API endpoint
        setProduct(response.data);
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    fetchData();
  }, []);

  // Fetch  Delete Product in cart
  const fetchDataSingle = async (productID) => {
    try {
      const token = JSON.parse(localStorage.getItem('userInfo')).token;

      //Determine the quantity required to be re-added to the original product
      const countProduct = userInfo.cart.find((prodcut) => prodcut.id === productID)
      const count = countProduct.quantity

      // delete Product in cart
      const response = await axios.delete(`http://localhost:8000/api/cart/${productID}`, {
        headers: {
          token: token,
        },
        data: {
          count: count,
        },
      });

      //Retrieving and saving new data from the user
      const updatedUserInfo = {
        ...response.data,
        token: token,
      };
      localStorage.setItem('userInfo', JSON.stringify(updatedUserInfo));
      setUserInfo(updatedUserInfo);

      toast.success('Deleted successfully', {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      });
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
      });
    }
  };


  //Remove Product in Cart 
  const removeProduct = (productID) => {
    if (userInfo) {
      fetchDataSingle(productID)
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


  const rows = userInfo.cart.map((item, index) => (
    <tr key={index + 1}>
      <td>
        <Group spacing="sm">
          <Avatar size={100} src={item.image} radius={15} />
        </Group>
      </td>
      <td>
        <Anchor component="button" size="xl" style={{ color: 'black', textDecoration: 'none' }}>
          {item.title}
        </Anchor>
      </td>
      <td>
        <Text>
          <QuantityInput
            quantity={item.quantity}
            onIncrease={() => handleIncreaseQuantity(index)}
            onDecrease={() => handleDecreaseQuantity(index)}
          />
        </Text>
      </td>
      <td>
        <Anchor component="button" size="sm">
          $ {(item.price * item.quantity).toFixed(2)}
        </Anchor>
      </td>
      <td>
        <Group spacing={0} position="left">
          <ActionIcon color="red">
            <IconTrash size="1rem" stroke={1.5} onClick={() => removeProduct(item.id)} />
          </ActionIcon>
        </Group>
      </td>
    </tr>
  ));


  return (
    <ScrollArea className="card">
      <ToastContainer
        position="top-right"
        autoClose={5000}
        hideProgressBar={false}
        newestOnTop={false}
        closeOnClick
        rtl={false}
        pauseOnFocusLoss
        draggable
        pauseOnHover
        theme="light"
      />
      <Table sx={{ minWidth: 800 }} verticalSpacing="sm">
        <thead>
          <tr>
            <th>Product</th>
            <th>Title</th>
            <th> Quantity</th>
            <th>Price</th>
            <th />
          </tr>
        </thead>
        <tbody>{rows}</tbody>
      </Table>
    </ScrollArea>
  );
}
