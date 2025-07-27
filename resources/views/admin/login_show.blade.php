<!DOCTYPE html>
<html>
<head>
  <title>Manager Table</title>
  <style>
    body {
        margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      width: 80%;
      height: 100%;
      margin: 0 auto;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      color: black;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #FF6700;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }
    /* Sidebar */
    .sidebar {
      height: 100vh;
      width: 200px;
      position: fixed;
      background-color:#FF6700;
      color: white;
      padding-top: 20px;
      top: 0;
      left :0;
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
      background-color: #f06b13ff;
    }

    /* Main content */
    .main-content {
      margin-left: 200px;
      background-color: #f4f4f4;
      padding: 20px;
    }

    .main-content h1 {
      color: #333;
      align-items: center;
      margin-top: 0;
    }
    .delete {
      background-color: #FF0000;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .delete:hover {
      background-color: #8B0000;;
    }
    .edit {
      background-color: #3399FF;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-left: 20px;
      margin-right: 20px;
    }

    .edit:hover {
      background-color: #004080

;
    }
  </style>
</head>
<body>
     
  <div class="sidebar" >
    
    <h2>Admin</h2>
    <a href="/admin">Home</a>
    <a href="/admin_sub_view">Submissions</a>
    
    <a href="/login2">Managers</a>
    <a href="/login_admin">Add Managers</a>
    <a href="/course">View All Courses</a>
    <a href="/topic">View All Topics</a>
    <a href="/upload">View All Files</a>
  </div>

   <div class="main-content">
  <h1>Managers Information Table</h1>
  

  <table>
    <tr>
      <th>Name</th>
      <th>User Id</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th>Status</th>

    </tr>
         @foreach($login as $log)
    <tr>
      <td>{{$log->name}}</td>
      <td>{{$log->userid}}</td>

      <td>{{$log->created_at}}</td>
      <td>{{$log->updated_at}}</td>
      <td>
        <a href="{{url('/login2/edit/'.$log->userid)}}"><button class="edit">Edit</button></a>
        <a href="{{url('/login2/delete/'.$log->userid)}}"><button class="delete">Delete</button></a>
      </td>
    </tr>
    @endforeach    
  </table>
</div>
</body>
</html>
