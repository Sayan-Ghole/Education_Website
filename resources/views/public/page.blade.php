<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    /* Navbar */
    .navbar {
      background-color: #FF6700;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;

    }

    .logo {
      font-size: 1.5em;
      font-weight: bold;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-links li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
    }

    .nav-links li a:hover {
      text-decoration: underline;
    }

    .menu-toggle {
      display: none;
      font-size: 1.2em;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
        flex-direction: column;
        gap: 10px;
        background-color: #FF6700;
        position: absolute;
        top: 64px;
        right: 20px;
        padding: 15px;
        border-radius: 8px;
      }

      .menu-toggle {
        display: block;
      }

      .nav-links.show {
        display: flex;
      }
    }

    /* Carousel */
    #carouselExampleAutoplaying {
      max-width: 100%;
      overflow: hidden;
      margin-bottom: 40px;
    }

    .carousel-inner img {
      height: 500px;
      object-fit: cover;
    }

    /* Footer */
    .footer {
      background-color: #333;
      color: white;
      padding: 40px 20px 20px;
      font-size: 14px;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
    }

    .footer-section {
      flex: 1 1 200px;
    }

    .footer-section h3 {
      color: #FF6700;
      margin-bottom: 15px;
    }

    .footer-section a {
      color: #ccc;
      text-decoration: none;
    }

    .footer-section a:hover {
      text-decoration: underline;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
      border-top: 1px solid #444;
      padding-top: 10px;
      color: #aaa;
    }
    .container {
      width: 450px;
      margin: 50px auto;
      background-color: #ffffff;
      border-radius: 8px;
      padding: 30px;
      margin: 80px;
      margin-left: 128px;
      margin-top: 24px;
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
    .main-section {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  max-width: 100%;
  margin: 40px auto;
  padding: 20px;
  width: 100%;
}

.left-container{
  background-color: #ffffff;
  border-radius: 8px;
  padding: 30px;
  flex: 1;
  margin-right: 40px;
  margin-left: 20px;
  
  
}
.right-container {
  background-color: #ffffff;
  border-radius: 8px;
  padding: 30px;
  flex: 1;
 
}

.right-container {
  margin-left: 20px;
}

.about-us {
  max-width: 100%;
  margin: 60px auto;
  background-color: #f4f4f4;
  padding: 40px;
  width: 100%;
  margin-bottom: 0%;
}

.about-us h2 {
  text-align: center;
  color: #FF6700;
  margin-bottom: 20px;
}

.about-us p {
  font-size: 16px;
  line-height: 1.7;
  color: #333;
}

  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">realSkill</div>
    <ul class="nav-links" id="navLinks">
      <li><a href="{{route('Home_page')}}">Home</a></li>
      <li><a href="/user">Course</a></li>
      <li><a href="/user/files">Download File</a></li>
      <li><a href="{{route('Submit_page')}}">Submit</a></li>
      <li><a href="{{route('register')}}">Sign Up</a></li>
      <li><a href="{{route('user_logout')}}">Logout</a></li>
    </ul>
  </nav>

  
  <!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    
  </div> -->
    <!-- Main Two-Column Section -->
<div class="main-section">
  <!-- Left: Registration Form -->
  <div class="left-container">
    <h2 style="color: #FF6700;"></h2>
    
    
  </div>

  <!-- Right: About Section -->
  <div class="right-container">
    <h2 style="color:#FF6700;">Welcome to realSkill</h2>
    <h4>
      realSkill is your one-stop platform for accessing and submitting educational courses and files with ease.
      Whether you're a learner or a contributor, our portal offers seamless access to valuable resources.
</h4>
    <p>
      Easily register, download, and submit your educational content from anywhere. We’re committed to enhancing knowledge-sharing and simplifying the digital education experience.
    </p>
  </div>
</div>

<!-- About Us Section -->
<div class="about-us">
  <h2>About Us</h2>
  
    <h4>Welcome to realSkill, your trusted platform for learning, sharing, and growing.</h4> <br>
    <p>
We believe education should be accessible, organized, and collaborative. That’s why we’ve built a space where students, educators, and professionals can come together to upload, download, and manage valuable learning resources with ease.
<br>
Whether you're submitting assignments, accessing course materials, or exploring new topics, realSkill is designed to support your educational journey—anytime, anywhere.
<br>
Our mission is simple: <br>
To make digital learning smarter, faster, and more connected. <br>

Thank you for being a part of our growing community.
  </p>
</div>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>Contact Us</h3>
        <p>Email: sayanghole126@gmail.com</p>
        <p>Phone: +91 987654321</p>
        <p>Address: 123 Kolkata, India</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/submit">Submit</a></li>
          <li><a href="/register">Register</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <!-- <h3>Follow Us</h3>
        <p>
          <a href="#">Facebook</a> |
          <a href="#">Twitter</a> |
          <a href="#">Instagram</a>
        </p> -->
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy;realSkill.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
