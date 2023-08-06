import { Container, Grid, Image, Text, createStyles, Group } from '@mantine/core';
import { Tab } from './Tabs'
import { QuantityInput } from './Quantity'
import { SocialIcons } from './SocialIcons'
import { useParams } from 'react-router-dom'
import { useEffect, useState, useContext } from 'react';
import axios from 'axios'
import { UserInfoContext } from '../../context/UserInfoProvider';
import { useNavigate } from 'react-router-dom';

const useStyles = createStyles((theme) => ({
    showSingle: {
        marginBottom: '50px'
    },
    line: {
        width: '100px',
        height: '2px',
        marginTop: '6px',
        marginBottom: '6px',
        backgroundColor: '#e7e7e7',
    },
    price: {
        padding: '10px 0',
    },
    prg: {
        marginBottom: '20px'
    },
    Upline: {
        width: '100%',
        height: '1px',
        marginTop: '30px',
        marginBottom: '6px',
        backgroundColor: '#e7e7e7',
    },
    coverImage: {
        width: '200px',
        height: '400px',
        objectFit: 'cover',
    },

}));


export function SingleProduct() {
    let { productId } = useParams()
    let navigate = useNavigate()
    const [product, setProduct] = useState({})
    const { userInfo, setUserInfo } = useContext(UserInfoContext);

    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get(`http://localhost:8000/api/product/${productId}`);
                setProduct(response.data);
            } catch (error) {
                if (error.response.status === 400) {
                    navigate('*')
                }

                console.error('Error fetching data:', error);
            }
        };

        fetchData();
    }, []);


    const { classes, theme } = useStyles();
    return (
        <Container size="xl" style={{ padding: '50px 0' }}>

            <Grid className={classes.showSingle}>

                <Grid.Col md={6} lg={5}>
                    <Image mx="auto" src={product?.image} alt={product.title} style={{ objectFit: 'contain', width: '300px', height: '400px' }} />
                </Grid.Col>

                <Grid.Col md={6} lg={7}>
                    <Text fw={700} fz={26}>{product.title}</Text>
                    <Text className={classes.line}></Text>
                    <Text fw={700} fz={24} className={classes.price}>${product.price}</Text>
                    <Text color="dimmed" className={classes.prg}>
                        {product.description}
                    </Text>

                    <Group fz={13}>
                        <Text color="dimmed">CATEGORY: </Text>
                        <Text fw={700} color="dark">CLOTHING, FASHION</Text>
                    </Group>

                    <Group fz={13}>
                        <Text color="dimmed">QUANTITY: </Text>
                        <Text fw={700} color="dark">{product.quantity}</Text>
                    </Group>

                    {/* QuantityInput */}
                    <Text className={classes.Upline}></Text>

                    <QuantityInput productId={productId} product={product} setProduct={setProduct} />

                    <Text className={classes.Upline}></Text>

                    <SocialIcons />
                </Grid.Col>
            </Grid>
            {/* Tab */}
            <Tab />
        </Container >
    );
}
