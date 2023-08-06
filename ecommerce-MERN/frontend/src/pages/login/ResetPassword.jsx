import {
    createStyles,
    Paper,
    Title,
    TextInput,
    Button,
    Container,
    Group,
    Anchor,
    rem,
} from '@mantine/core';
import { toast, ToastContainer } from 'react-toastify'
import axios from 'axios'
import { useState } from 'react';
import { useNavigate, useParams } from 'react-router-dom';

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

export default function ResetPassword() {
    const { classes } = useStyles();
    const [password, setPassword] = useState('')
    let { userId } = useParams()
    let { token } = useParams()
    let navigate = useNavigate()

    const isValidPassword = (password) => {
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
        return passwordPattern.test(password)
    };



    // Fetch Reset Password 
    const fetchResetPassword = async () => {
        try {
            if (isValidPassword(password)) {
                await axios.post(`http://localhost:8000/password/reset-password/${userId}/${token}`, { password });
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
                navigate('/login')
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
                    Reset Password
                </Title>
                <Paper withBorder shadow="md" p={30} radius="md" mt="xl">
                    <TextInput label="New Password" onChange={(e) => setPassword(e.target.value)} placeholder="New Password" required />
                    <Group position="apart" mt="lg" className={classes.controls}>
                        <Anchor color="dimmed" size="sm" className={classes.control}>
                        </Anchor>
                        <Button className={classes.control} onClick={() => fetchResetPassword()}>Reset password</Button>
                    </Group>
                </Paper>
            </Container>
        </div>
    );
}