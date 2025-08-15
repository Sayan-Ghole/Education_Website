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
      padding: 40px;
      border-radius: 15px;
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    /* Animation for the Thank You text */
    @keyframes bounceFade {
      0% { opacity: 0; transform: translateY(-50px); }
      50% { opacity: 1; transform: translateY(0px); }
      70% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }

    .thankyou-box h1 {
      color: #28a745;
      font-size: 56px;
      margin-bottom: 10px;
      animation: bounceFade 1s ease-out forwards;
    }

    .thankyou-box a {
      text-decoration: none;
      background-color: #13033fff;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      transition: background-color 0.3s;
    }

    .thankyou-box a:hover {
      background-color: #22066dff;
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
