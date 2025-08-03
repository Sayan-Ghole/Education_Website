<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Navbar</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
}

.navbar {
  background-color: #FF6700;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 20px;
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
  font-size: 1.8em;
  cursor: pointer;
}
@media (max-width: 768px) {
  .nav-links {
    display: none;
    flex-direction: column;
    gap: 10px;
    background-color: #FF6700;
    position: absolute;
    top: 60px;
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

  </style>
</head>
<body>
  <nav class="navbar">
    <div class="logo">realSkill</div>
    <ul class="nav-links" id="navLinks">
      <li><a href="/">Home</a></li>
    </ul>
  </nav>
</body>
</html>
