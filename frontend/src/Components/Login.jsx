import React from 'react'

const Login = () => {

   const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const { login, user } = useContext(AuthContext);

   const handleLogin = () => {
    // Example: Simulate user login
    login({ email });
  };
  return (
    <div>Login</div>
  )
}

export default Login