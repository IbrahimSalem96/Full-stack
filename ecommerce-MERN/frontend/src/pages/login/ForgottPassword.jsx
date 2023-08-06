import {
    createStyles,
    Paper,
    Title,
    Text,
    TextInput,
    Button,
    Container,
    Group,
    Anchor,
    Center,
    Box,
    rem,
} from '@mantine/core';
import { IconArrowLeft } from '@tabler/icons-react';
import { Link } from 'react-router-dom';
import { toast, ToastContainer } from 'react-toastify'
import axios from 'axios'
import { useState } from 'react';
import { useNavigate } from 'react-router-dom';
const useStyles = createStyles((theme) => ({
    title: {
        fontSize: rem(26),
        fontWeight: 900,
        fontFamily: `Greycliff CF, ${theme.fontFamily}`,
    },

    controls: {
        [theme.fn.smallerThan('xs')]: {
            flexDirection: 'column-reverse',
        },
    },

    control: {
        [theme.fn.smallerThan('xs')]: {
            width: '100%',
            textAlign: 'center',
        },
    },
}));

export default function ForgotPassword() {
    const { classes } = useStyles();
    const [email, setEmaile] = useState('')
    let navigate = useNavigate()

    const isValidEmail = (email) => {
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    };

    // Fetch Forgot Password
    const fetchForgotPassword = async () => {
        try {
            if (isValidEmail(email)) {
                await axios.post(`http://localhost:8000/password/reset-password-link`, { email });
                toast.success("An email has been sent to reset the password", {
                    position: "bottom-left",
                    autoClose: 5000,
                    hideProgressBar: false,
                    closeOnClick: true,
                    pauseOnHover: true,
                    draggable: true,
                    progress: undefined,
                    theme: "colored",
                });
            } else {
                toast.error("The email is incorrect", {
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

            navigate('/')

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


    return (
        <div style={{ height: "70vh" }}>
            <Container size={460} my={30}>
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
                <Title className={classes.title} align="center">
                    Forgot your password?
                </Title>
                <Text c="dimmed" fz="sm" ta="center">
                    Enter your email to get a reset link
                </Text>

                <Paper withBorder shadow="md" p={30} radius="md" mt="xl">
                    <TextInput onChange={(e) => setEmaile(e.target.value)} label="Your Email" placeholder="Your Email" required />
                    <Group position="apart" mt="lg" className={classes.controls}>
                        <Anchor color="dimmed" size="sm" className={classes.control}>
                            <Center inline>
                                <IconArrowLeft size={rem(12)} stroke={1.5} />
                                <Link to='/login'><Box ml={5}>Back to the login page</Box></Link>
                            </Center>
                        </Anchor>
                        <Button className={classes.control} onClick={() => fetchForgotPassword()}>Send Email</Button>
                    </Group>
                </Paper>
            </Container>
        </div>
    );
}