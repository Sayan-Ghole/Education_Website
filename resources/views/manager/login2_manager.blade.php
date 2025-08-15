<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manager login Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: white;
    }

    .login-box {
      width: 350px;
      margin: 100px auto;
      padding: 30px;
      border-radius: 10px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #444444;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      background-color: #FF6700;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #e65c00;
    }
  </style>
</head>
<body>

  <div class="login-box">
    <h2>Login</h2>
    <form action="{{url('/login2_manager')}}" method="post">
      @csrf
      

      <label for="userid">User ID</label>
      <input type="text" id="userid" name="userid" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      

      <input type="submit" value="Login">
    </form>
  </div>

</body>
</html>
