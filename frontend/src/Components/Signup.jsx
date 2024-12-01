import React, { useState } from 'react';
import API from '../api';

const Register = () => {
  const [formData, setFormData] = useState({ username: '', email: '', password: '' });
  const [message, setMessage] = useState('');

  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      const response = await API.post('/register', formData);
      setMessage('Registration successful. Please log in.');
    } catch (error) {
      setMessage('Error: ' + (error.response?.data?.errors || 'Something went wrong.'));
    }
  };
  return (
    <div>Signup</div>
  )
}

export default Signup