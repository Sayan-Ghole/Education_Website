<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create Course</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      background-color: #FF6700;
      padding: 20px;
      height: 100vh;
      color: white;
    }

    .sidebar h2 {
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      margin: 15px 0;
      font-weight: bold;
    }

    .sidebar a:hover {
      text-decoration: underline;
    }

    /* Main Content */
    .main-content {
      padding: 40px;
      flex-grow: 1;
      background-color: #f4f4f4;
    }

    h1 {
      margin-top: 0;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 300px;
      padding: 8px;
      margin-top: 5px;
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #FF6700;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #e65c00;
    }
  </style>
</head>
<body>
  @php
    $from = request()->query('from');
@endphp

@if($from === 'manager')
    <div class="sidebar" >
    <h2>Manager</h2>
    <a href="{{route('manager_page')}}">Home</a>
    <a href="{{route('submissions')}}">Submissions</a>
    <a href="{{route('registrations')}}">Registrations</a>
    <a href="{{route('manager_logout')}}">Logout</a>
  </div>

@else
  <div class="sidebar">
    <h2>All Courses</h2>
    <a href="{{ route('course.create') }}">Create Course</a>
    <a href="{{ route('course.index') }}">View All Course</a>
    <a href="/admin_directly">Home</a>
  </div>
@endif

  <div class="main-content">
    <h1>Create Course</h1>

    <form action="{{ route('course.store') }}" method="POST">
      @csrf

      <label for="courseName">Course Name:</label>
      <input type="text" name="courseName" id="courseName" value="{{request('title')}}">

      <label for="courseDescription">Course Description:</label>
      <input type="text" name="courseDescription" id="courseDescription" value="{{request('des')}}">
    <br>
      <button type="submit">Add Course</button>
    </form>
  </div>
</body>
</html>
