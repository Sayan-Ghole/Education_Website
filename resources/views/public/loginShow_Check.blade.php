<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="{{route('loginCheck')}}" method="post">
        @csrf
    <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="number">Contract no:</label>
      <input type="text" id="ph_no" name="ph_no" required>

      <input type="submit" value="Login">

      </form>
</body>
</html>