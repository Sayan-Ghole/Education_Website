@extends("public.layouts.app")
@section('main-section')
<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .container {
      width: 450px;
      margin: 50px auto;
      background-color: #ffffff;
      border: 1px solid #cccccc;
      border-radius: 8px;
      padding: 30px;
      margin: 80px;
      margin-left: 180px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
  </style>
</head>
<body>
  <div class="container">
    <h2>User Registration Form</h2>
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

      <input type="submit" value="Register">
    </form>
  </div>
</body>
</html>

@endsection