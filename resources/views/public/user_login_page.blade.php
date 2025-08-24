
<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
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
      background-color: #FF6700;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #e65c00;
    }

    .red-text{
      color: red;
      font-size: 4px ;

    }
    
  </style>
</head>
<body>
  
  <div class="container">
    
    <h2>Login</h2>
    <form action="{{url('/user_login_page')}}" method="post">
        @csrf
     
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <div class="red-text">
      @error('email')
        {{ $message }}
      @enderror
        </div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login">
    </form>
    
  </div>
</body>
</html>

