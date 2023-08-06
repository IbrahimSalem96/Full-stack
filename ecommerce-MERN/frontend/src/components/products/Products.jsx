import { Card, Image, Text, Group, Badge, createStyles, Center, Button, rem, Container, Grid, SimpleGrid } from '@mantine/core';
import { IconGasStation, IconGauge, IconManualGearbox, IconUsers } from '@tabler/icons-react';
import { useEffect, useState, useContext } from 'react';
import { PaginationProduct } from '../../components/products/PaginationProduct';
import { Link } from "react-router-dom";
import axios from 'axios'
import { UserInfoContext } from '../../context/UserInfoProvider';
import { ToastContainer, toast } from 'react-toastify';


const useStyles = createStyles((theme) => ({
    card: {
        backgroundColor: theme.colorScheme === 'dark' ? theme.colors.dark[7] : theme.white,
    },

    imageSection: {
        padding: theme.spacing.md,
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'center',
        borderBottom: `${rem(1)} solid ${theme.colorScheme === 'dark' ? theme.colors.dark[4] : theme.colors.gray[3]}`,
        cursor: 'pointer',
    },

    label: {
        marginBottom: theme.spacing.xs,
        lineHeight: 1,
        fontWeight: 700,
        fontSize: theme.fontSizes.xs,
        letterSpacing: rem(-0.25),
        textTransform: 'uppercase',
    },

    section: {
        padding: theme.spacing.md,
        borderTop: `${rem(1)} solid ${theme.colorScheme === 'dark' ? theme.colors.dark[4] : theme.colors.gray[3]
            }`,
    },

    icon: {
        marginRight: rem(5),
        color: theme.colorScheme === 'dark' ? theme.colors.dark[2] : theme.colors.gray[5],
    },
}));

const mockdata = [
    { label: '4 passengers', icon: IconUsers },
    { label: '100 km/h in 4 seconds', icon: IconGauge },
    { label: 'Automatic gearbox', icon: IconManualGearbox },
    { label: 'Electric', icon: IconGasStation },
];

export function AllProducts({ selectedOption, search, show }) {
    const { classes } = useStyles();
    const { userInfo, setUserInfo } = useContext(UserInfoContext);
    const [count, setCount] = useState(1);


    const features = mockdata.map((feature) => (
        <Center key={feature.label}>
            <feature.icon size="1.05rem" className={classes.icon} stroke={1.5} />
            <Text size="xs">{feature.label}</Text>
        </Center>
    ));


    const [product, setProduct] = useState([])
    const [singlepPoduct, setsinglepPoduct] = useState([])


    //Sort Product
    if (selectedOption === 'Default sorting') {
        product.sort((a, b) => a.id - b.id);
    } else if (selectedOption === 'Sort by Oldest') {
        product.sort((a, b) => b.id - a.id);

    } else if (selectedOption === 'Sort by highest price') {
        product.sort((a, b) => a.price - b.price);

    } else if (selectedOption === 'Sort by lowest price') {
        product.sort((a, b) => b.price - a.price);

    }

    // Get All Product in Data
    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('http://localhost:8000/api/product');
                setProduct(response.data);
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        fetchData();
    }, [selectedOption]);


    // Fetch Single New Data
    const fetchDataSingle = async (productID) => {
        try {
            const token = JSON.parse(localStorage.getItem('userInfo')).token;
            // Check Count Product
            await axios.put(`http://localhost:8000/api/product/${productID}`, { count }, {
                headers: {
                    token: token,
                },
            });

            // Add Product in Cart
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

            // Update the quantity of the specific product with the given productID
            setProduct((prevProducts) =>
                prevProducts.map((product) =>
                    product._id === productID
                        ? { ...product, quantity: product.quantity - count }
                        : product
                )
            );

            toast.success(response.data.message, {
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


    //Add cart in user 
    const addCart = (productID) => {
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

    //Pagination Product
    const [currentPage, setCurrentPage] = useState(1)
    const recordsPerPage = show
    const lastIndex = currentPage * recordsPerPage
    const firstlndex = lastIndex - recordsPerPage
    const records = product.slice(firstlndex, lastIndex);
    const npage = Math.ceil(product.length / recordsPerPage)
    const numbers = [...Array(npage + 1).keys()].slice(1)

    //filter Product and show Product
    const getProduct = records
        .filter(item => {
            if (search && item.title.toLowerCase().includes(search.toLowerCase())) {
                return true;
            }
            return !search;
        })
        .map(item => {
            return (
                <Grid gutter="md" key={item.id}>
                    <Grid.Col >
                        <Card withBorder radius="md" className={classes.card} >
                            <Card.Section className={classes.imageSection}>
                                <Link to={`/singleProduct/${item._id}`}><Image src={item.image} alt="Tesla Model S" height='200' style={{ width: '100%' }} /></Link>
                            </Card.Section>

                            <Group position="apart" mt="md" style={{ height: '120px', paddingBottom: '10px' }}>
                                <div>
                                    <Text fw={500}>{item.title}</Text>
                                    <Text fz="xs" c="dimmed">
                                        {item.description}
                                    </Text>
                                </div>
                                <Badge variant="outline" >Quantity {item.quantity}</Badge>
                            </Group>

                            <Card.Section className={classes.section}>
                                <Group spacing={30}>
                                    <div>
                                        <Text fz="xl" fw={700} sx={{ lineHeight: 1 }}>
                                            ${item.price}
                                        </Text>
                                        <Text fz="sm" c="dimmed" fw={500} sx={{ lineHeight: 1 }} mt={3}>
                                            {/* per day */}
                                        </Text>
                                    </div>

                                    <Button radius="xl" style={{ flex: 1 }} onClick={() => addCart(item._id)}>
                                        Add to cart
                                    </Button>
                                </Group>
                            </Card.Section>
                        </Card>
                    </Grid.Col>
                </Grid>
            )
        });

    return (
        <Container my="md" size='xl' >
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
            <SimpleGrid cols={3} spacing="md" breakpoints={[{ maxWidth: 'sm', cols: 1 }]}>
                {getProduct}
            </SimpleGrid>
            <PaginationProduct pageNmbers={numbers} setCurrentPage={setCurrentPage} />
        </Container>
    );
}

