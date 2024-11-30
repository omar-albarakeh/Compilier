import React from 'react'

const Login = () => {

   const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const { login, user } = useContext(AuthContext);

  
  return (
    <div>Login</div>
  )
}

export default Login