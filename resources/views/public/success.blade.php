<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .thankyou-box {
      background-color: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    .thankyou-box h1 {
      color: #28a745;
      font-size: 32px;
      margin-bottom: 10px;
    }

    .thankyou-box p {
      font-size: 18px;
      color: #333;
      margin-bottom: 30px;
    }

    .thankyou-box a {
      text-decoration: none;
      background-color: #FF6700;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      transition: background-color 0.3s;
    }

    .thankyou-box a:hover {
      background-color: #c95305ff;
    }
  </style>
</head>
<body>

  <div class="thankyou-box">
    <h1>Thank You!</h1>
    <br>
    <a href="{{route('Home_page')}}">Go to Home</a>
  </div>

</body>
</html>
