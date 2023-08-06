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
import { Link } from "react-router-dom";
import './profile.css'
import { useState, useEffect, useContext } from "react";
import axios from 'axios'
import { toast, ToastContainer } from 'react-toastify'
import { UserInfoContext } from '../../context/UserInfoProvider';


export default function Profile() {
    const [product, setProduct] = useState([])
    const { userInfo, setUserInfo } = useContext(UserInfoContext);

    // Get All Post Order in Profile
    useEffect(() => {
        const token = JSON.parse(localStorage.getItem('userInfo')).token;

        const fetchData = async () => {
            try {
                const response = await axios.get(`http://localhost:8000/api/pastorder/`, {
                    headers: {
                        token: token,
                    },
                });

                setProduct(response.data);
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        fetchData();
    }, []);


    // Fetch  Delete Orders
    const fetchRemoveOrder = async (productID) => {
        try {
            const token = JSON.parse(localStorage.getItem('userInfo')).token;

            // delete Product in Profile
            const response = await axios.delete(`http://localhost:8000/api/pastorder/${productID}`, {
                headers: {
                    token: token,
                }
            });

            const responseProduct = await axios.get(`http://localhost:8000/api/pastorder/`, {
                headers: {
                    token: token,
                },
            });
            setProduct(responseProduct.data);



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


    //Remove Order
    const removeorder = (productID) => {
        if (userInfo) {
            fetchRemoveOrder(productID)
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

    const pastOrders = product.map((item, index) => {
        return (
            <tr key={index + 1}  >
                <td>
                    <Group spacing="sm">
                        <Avatar size={100} src={item.image} radius={15} />
                        <Text fz="sm" fw={500}>
                            image
                        </Text>
                    </Group>
                </td>

                <td>
                    <Anchor component="button" size="sm">
                        {item.title}
                    </Anchor>
                </td>
                <td>
                    <Text fz="sm" c="dimmed">
                        {" "}
                        {item.quantity}
                    </Text>
                </td>
                <td>
                    <Text fz="sm" c="dimmed">
                        {" "}
                        {item.price}
                    </Text>
                </td>
                <td>
                    <Group spacing={0} position="right">
                        <ActionIcon color="red">
                            <IconTrash
                                size="1rem"
                                stroke={1.5}
                                onClick={() => removeorder(item._id)}
                            />
                        </ActionIcon>
                    </Group>
                </td>
            </tr>
        )
    })
    return (
        <>
            <ScrollArea className="card h-Page-footer">
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
                <h1>Past Order</h1>
                <Table sx={{ minWidth: 800 }} verticalSpacing="sm" >
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                        {pastOrders}
                    </tbody>
                </Table>
            </ScrollArea>
        </>
    )
}