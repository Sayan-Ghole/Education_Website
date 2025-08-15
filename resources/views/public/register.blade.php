
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffffff;
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container {
      width: 450px;
      background-color: #ffffff;
      border-radius: 8px;
      padding: 30px;
      margin: 80px;
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
    }
    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #cccccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 25px;
      background-color: #13033fff;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #1f0569ff;
    }


    
  </style>
</head>
<body>
  
  <div class="container">
    
    <h2>Sign Up</h2>
    <form action="{{url('/')}}/register" method="post">
        @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="number">Contract no:</label>
      <input type="text" id="ph_no" name="ph_no" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="password_confirmation">Confirm Password:</label>
      <input type="password" id="password_confirmation" name="password_confirmation" required>

      <input type="submit" value="Sign Up">
      <a href="user_login_page">Login</a>
    </form>
    
  </div>
</body>
</html>

