import React, { useState } from 'react';
import API from '../api';

const Login = () => {
  const [formData, setFormData] = useState({ username: '', password: '' });
  const [message, setMessage] = useState('');

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const response = await API.post('/login', formData);
      localStorage.setItem('token', response.data.token);
      setMessage('Login successful.');
      window.location.href = '/dashboard'; 
    } catch (error) {
      setMessage('Error: Invalid credentials.');
    }
  };
  return (
    <div>Login</div>
  )
}

export default Login