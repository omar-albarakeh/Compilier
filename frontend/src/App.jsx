// App.js
import React from "react";
import AuthProvider from "./AuthContext";
import Login from "./Login";
import Signup from "./Signup";

const App = () => {
  return (
    <AuthProvider>
      <div>
        <h1>Authentication Example</h1>
        <Login />
        <Signup />
      </div>
    </AuthProvider>
  );
};

export default App;
