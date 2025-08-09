<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manager Dashboard</title>
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
    <h2>Manager</h2>
    
    <a href="{{route('manager_page')}}">Home</a>
    <a href="{{route('submissions')}}">Submissions</a>
    <a href="{{route('registrations')}}">Registrations</a>
    
    <a href="{{route('manager_logout')}}">Logout</a>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <h1>Hi, {{auth()->guard('manager')->user()->name}}</h1>
    <h2>Welcome to the Manager Dashboard</h2>
      
    </section>
  </div>

</body>
</html>
