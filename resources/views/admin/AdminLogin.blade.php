<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Signup</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

.login-container {
  width: 350px;
  background: white;
  padding: 30px 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
  margin: 80px auto;
  text-align: center;
}

.login-container h2 {
  margin-bottom: 20px;
  color: #333;
}

.form-group {
  text-align: left;
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 6px;
}

.form-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #bbb;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #ff6700;
  border: none;
  color: white;
  font-weight: bold;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #e65c00;
}
.log{
  text-align: center;
  margin-top: 40px;
}




  </style>
</head>

<body>

  <div class="login-container">
    <h2>SignUp</h2>
    <form action="{{url('/AdminLoginPage')}}" method="post">
        @csrf
      <div class="form-group">
        <label for="name">Admin Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter admin name">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Enter password">
      </div>

      <div class="form-group">
        <label for="confirm">Confirm Password</label>
        <input type="password" id="confirm" name="confirm_password" required placeholder="Re-enter password">
      </div>

      <button type="submit">SignUp</button>
      <br>
      <a href="{{url('/AdminLogin')}}" class="log">Login</a>
    </form>
  </div>

</body>
</html>
