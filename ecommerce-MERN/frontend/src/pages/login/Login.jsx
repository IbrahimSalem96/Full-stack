import React, { useState, useContext } from 'react';
import axios from 'axios';
import './form.css';
import { TextInput, PasswordInput, Text, Paper, Group, Button, Divider, Checkbox, Anchor, Stack } from '@mantine/core';
import { useNavigate, Link } from 'react-router-dom';
import { UserInfoContext } from '../../context/UserInfoProvider';

export default function AuthenticationForm() {
  const navigate = useNavigate();
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [errors, setErrors] = useState({ email: '', password: '', unknown: '' });
  const { userInfo, setUserInfo } = useContext(UserInfoContext);

  const validateEmail = (email) => {
    // Regular expression for email validation
    const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/i;
    return emailRegex.test(email);
  };


  const validatePassword = (password) => {
    return password.length >= 2;
  };

  const onSubmit = async (e) => {
    e.preventDefault();

    if (!validateEmail(email)) {
      setErrors({ ...errors, email: 'Invalid email format' });
      return;
    } else {
      setErrors({ ...errors, email: '' });
    }

    if (!validatePassword(password)) {
      setErrors({ ...errors, password: 'Password must be at least 1 characters long' });
      return;
    } else {
      setErrors({ ...errors, password: '' });
    }

    try {
      const response = await axios.post('http://localhost:8000/api/auth/login', { email, password });
      localStorage.setItem('userInfo', JSON.stringify(response.data));

      //use Context
      setUserInfo(response.data)

      navigate('/products');
    } catch (error) {
      setErrors({ ...errors, unknown: 'invalid email or password' });
    }
  };

  return (
    <div style={{ height: "65vh" }}>
      <Paper radius='md' p='xl' withBorder className='form' style={{ margin: "5rem auto" }}>
        <Text size='lg' weight={500}>
          Welcome to Furniture Sooq, Log In
        </Text>

        <Divider label='Or continue with email' labelPosition='center' my='lg' />

        <form onSubmit={onSubmit}>
          <TextInput
            required
            label='Email'
            placeholder='hello@FurnitureSooq.dev'
            value={email}
            onChange={(e) => setEmail(e.target.value)}
            radius='md'
          />

          {errors.email && (
            <p className='validation-form'> {errors.email} </p>
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

          {errors.unknown && (
            <p className='validation-form'>{errors.unknown}</p>
          )
          }

          <Group position='apart' mt='xl'>
            <Anchor component='button' type='button' color='dimmed' size='xs'>
              <Link to='/register'>Don't have an account? Register</Link>
            </Anchor>
            <Button type='submit' radius='xl'>
              Log In
            </Button>
          </Group>
          <Anchor component='button' type='button' color='dimmed' size='xs' style={{ display: 'block' }}>
            <Link to='/ForgottPassword'>Forgot your password?</Link>
          </Anchor>
        </form>
      </Paper>
    </div>
  );
}
