<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Sidebar */
    .sidebar {
      height: 100vh;
      width: 200px;
      position: fixed;
      background-color:#FF6700;
      color: white;
      padding-top: 20px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      padding: 12px 20px;
      color: white;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #d45907ff;
    }

    /* Main content */
    .main-content {
      margin-left: 200px;
      padding: 20px;
      background-color: #f4f4f4;
      height: 100vh;
    }

    .main-content h1 {
      color: #333;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Admin</h2>
    <a href="/admin">Home</a>
    <a href="/admin_sub_view">Submissions</a>
    
    <a href="/login2">Managers</a>
    <a href="/login_admin">Add Managers</a>
    <a href="/course">View All Courses</a>
    <a href="/topic">View All Topics</a>
    <a href="/upload">View All Files</a>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <h1>Welcome to the Admin Dashboard</h1>
      
    </section>
  </div>

</body>
</html>
