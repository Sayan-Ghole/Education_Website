<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <style>
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

    </style>
</head>
<body>
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
    <p>&copy; realSkill</p>
  </div>
</footer>

</body>
</html>