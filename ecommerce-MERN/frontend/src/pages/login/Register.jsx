import React, { useState } from 'react';
import axios from 'axios';
import { TextInput, PasswordInput, Text, Paper, Group, Button, Divider, Anchor } from '@mantine/core';
import { useNavigate, Link } from 'react-router-dom';
import './form.css';
export default function Register() {
    const navigate = useNavigate();
    const [username, setUsername] = useState('');
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [errors, setErrors] = useState({});

    const validateEmail = (email) => {
        const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/i;
        return emailRegex.test(email);
    };

    const validatePassword = (password) => {
        const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return passwordRegex.test(password);
    };


    const onSubmit = async (e) => {
        e.preventDefault();

        let errorFound = false;
        const newErrors = {};

        if (!username) {
            newErrors.username = 'Name is required';
            errorFound = true;
        }

        if (!email || !validateEmail(email)) {
            newErrors.email = 'Invalid email format';
            errorFound = true;
        }

        if (!password || !validatePassword(password)) {
            newErrors.password =
                `Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one special character`;
            errorFound = true;
        }

        setErrors(newErrors);

        if (!errorFound) {
            try {
                const response = await axios.post('http://localhost:8000/api/auth/register', {
                    username,
                    email,
                    password,
                });
                navigate('/verifyEmail');
            } catch (error) {
                console.error('Authentication error:', error.response?.data?.message || 'Unknown error occurred');
            }
        }
    };

    return (
        <div style={{ height: "70vh" }}>
            <Paper radius='md' p='xl' withBorder className='form' style={{ margin: "2rem auto" }}>
                <Text size='lg' weight={500}>
                    Welcome to Furniture Sooq, Register
                </Text>

                <Divider label='Or continue with email' labelPosition='center' my='lg' />

                <form onSubmit={onSubmit}>
                    <TextInput
                        label='Name'
                        placeholder='Your name'
                        value={username}
                        onChange={(e) => setUsername(e.target.value)}
                        radius='md'
                    />
                    {errors.username && (
                        <p className='validation-form'>{errors.username}</p>
                    )
                    }


                    <TextInput
                        required
                        label='Email'
                        placeholder='hello@FurnitureSooq.dev'
                        value={email}
                        onChange={(e) => setEmail(e.target.value)}
                        radius='md'
                    />
                    {errors.email && (
                        <p className='validation-form'>{errors.email}</p>
                    )
                    }


                    <PasswordInput
                        required
                        label='Password'
                        placeholder='Your password'
                        value={password}
                        onChange={(e) => setPassword(e.target.value)}
                        radius='md'
                    />
                    {errors.password && (
                        <p className='validation-form'>{errors.password}</p>
                    )
                    }


                    <Group position='apart' mt='xl'>
                        <Anchor component='button' type='button' color='dimmed' size='xs'>
                            <Link to='/login'>Already have an account? Login</Link>
                        </Anchor>
                        <Button type='submit' radius='xl'>
                            Register
                        </Button>
                    </Group>
                </form>
            </Paper>
        </div>
    );
}
