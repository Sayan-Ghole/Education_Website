<!DOCTYPE html>
<html>
<head>
  <title>User Table</title>
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

    /* paginationss.. */
    .w-5.h-5 {
    height: 20px;
    width: 20px;
    padding: 6px;
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 4px;
    color: #007bff;
    font-size: 14px;
    transition: background-color 0.3s;
    vertical-align: middle;
    margin-left: 40px;
}


.w-5.h-5:hover {
    background-color: #e2e6ea;
}

nav[role="navigation"] {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

nav[role="navigation"] {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
    gap: 8px;
}


nav[role="navigation"] ul {
    list-style: none;
    display: flex;
    gap: 10px; 
    padding: 0;
    margin: 0;
    justify-content: center;
    align-items: center;
}


  </style>
</head>
<body>
     <!-- Sidebar -->
  <div class="sidebar" >
    <h2>Manager</h2>
    <a href="{{route('manager_page')}}">Home</a>
    <a href="{{route('submissions')}}">Submissions</a>
    <a href="{{route('registrations')}}">Registrations</a>
    <a href="{{route('manager_logout')}}">Logout</a>
  </div>

   <div class="main-content">
  <h1>User Information Table</h1>

  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      
      <th>Created At</th>
      <th>Updated At</th>
    </tr>
            @foreach($reg as $register)
    <tr>
      <td>{{$register->name}}</td>
      <td>{{$register->email}}</td>
      
      <td>{{$register->created_at}}</td>
      <td>{{$register->updated_at}}</td>
    </tr>
    @endforeach
  </table>
  {{$reg->links()}}
</div>
</body>
</html>
