import React, { createContext, useState } from "react";

export const AuthContext = createContext();

const AuthProvider = ({ children }) => {
   const [user, setUser] = useState(null);

  const login = (userData) => {
    setUser(userData);
  };

    const logout = () => {
    setUser(null);
  };

   const signup = (userData) => {
    setUser(userData);
  };

   return (
    <AuthContext.Provider value={{ user, login, logout, signup }}>
      {children}
    </AuthContext.Provider>
  );
};

export default AuthProvider;
