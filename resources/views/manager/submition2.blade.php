<!DOCTYPE html>
<html>
<head>
  <title>Submition table </title>
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

    .approve {
  background-color: #90EE90;
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}


    .approve:hover {
  background-color: #76d776;
}

        .reject {
  background-color: #FF0000;  
  color: white;
  padding: 12px 24px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}


    .reject:hover {
  background-color: #cc0000;
}

  </style>
</head>
<body>
     <!-- Sidebar -->
  <div class="sidebar" >
    <h2>Manager</h2>
    <a href="/manager">Home</a>
    <a href="/view2">Submissions</a>
    <a href="/view">Registrations</a>
    <a href="/login">Login</a>
  </div>

   <div class="main-content">
  <h1>Submit Course Information Table</h1>

  <table>
    
    <tr>
      <th>Id</th>
      <th>Course Title</th>
      <th>Course Description</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th>Status</th>
    </tr>
    @foreach($sub_c as $submit)
    <tr>
      <td>{{$submit->id}}</td>
      <td>{{$submit->course_title}}</td>
      <td>{{$submit->course_description}}</td>
      
      <td>{{$submit->created_at}}</td>
      <td>{{$submit->updated_at}}</td>
      <td>
        <input type="hidden" name="role" value="manager">

     <a href="/admin_sub_approve/{{$submit->id}}/{{$submit->course_title}}/{{$submit->course_description}}?from=manager"><button class="approve">Approve</button></a>

      <a href="/admin_sub_delete/{{$submit->id}}"><button class="reject">Reject</button></a>
      </td>
    </tr>
    @endforeach
  </table>
  <br>
  <br>
  <h1>Submit Topic Information Table</h1>
  <table>
    <tr>
      <th>Course Id</th>
      <th>Topic Title</th>
      <th>Topic Description</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th>Status</th>
    </tr>
        @foreach($sub_t as $submit_t)
    <tr>
      <td>{{$submit_t->course_id}}</td>
      <td>{{$submit_t->topic_title}}</td>
      <td>{{$submit_t->	topic_description}}</td>
      <td>{{$submit_t->created_at}}</td>
      <td>{{$submit_t->updated_at}}</td>
      <td>
       <a href="/admin_sub_approveT/{{$submit_t->course_id}}/{{$submit_t->topic_title}}/{{$submit_t->	topic_description}}?from=manager"><button class="approve">Approve</button></a>

      <a href="/admin_sub_delete2/{{$submit_t->course_id}}"><button class="reject">Reject</button></a>
      </td>
    </tr>
    @endforeach   
  </table>
  <br>
  <br>
  <h1>Upload File Information Table</h1>
  <table>
    <tr>
      <th>Topic Id</th>
      <th>File Title</th>
      <th>Uploaded File</th>
      <th>Created At</th>
      <th>Updated At</th>
      <th>Status</th>
    </tr>
         @foreach($upload as $up)
    <tr>
      <td>{{$up->topic_id}}</td>
      <td>{{$up->file_title}}</td>
      <td>{{$up->uploaded_file}}</td>
      <td>{{$up->created_at}}</td>
      <td>{{$up->updated_at}}</td>
      <td>
          <a href="/admin_sub_approveF/{{$up->topic_id}}/{{$up->file_title}}?from=manager"><button class="approve">Approve</button></a>

      <br>
      <a href="/admin_sub_delete3/{{$up->topic_id}}"><button class="reject">Reject</button></a>
      </td>
    </tr>
    @endforeach   
  </table>
</div>
</body>
</html>
