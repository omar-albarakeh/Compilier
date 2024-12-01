import React, { useEffect, useState } from 'react';
import API from '../api';

const Dashboard = () => {
  const [user, setUser] = useState(null);

  useEffect(() => {
    const fetchUser = async () => {
      try {
        const response = await API.get('/user');
        setUser(response.data.user);
      } catch (error) {
        localStorage.removeItem('token');
        window.location.href = '/login'; 
      }
    };
    fetchUser();
  }, []);

  const handleLogout = async () => {
    await API.post('/logout');
    localStorage.removeItem('token');
    window.location.href = '/login';
  };
  return (
    <div>Dashboard</div>
  )
}

export default Dashboard