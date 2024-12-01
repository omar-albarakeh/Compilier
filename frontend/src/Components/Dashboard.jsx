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
    <div>
      <h2>Dashboard</h2>
      {user ? (
        <div>
          <p>Welcome, {user.username}!</p>
          <p>Email: {user.email}</p>
          <button onClick={handleLogout}>Logout</button>
        </div>
      ) : (
        <p>Loading...</p>
      )}
    </div>
  );
};

export default Dashboard;