<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Files</title>
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
    input[type="number"] {
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
        <h2>Files</h2>
        <a href="{{ route('upload.create') }}"> Upload File</a>
        <a href="{{ route('upload.index') }}"> View All Files</a>
        <a href="/admin_directly">Home</a>
    </div>

    @endif

  <div class="main-content">
    <h1>Upload Files</h1>

    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <label for="courseName">Course Id:</label>
      <input type="number" name="courseId" id="courseName" value="{{request('id')}}">

      <label for="courseName">File Name:</label>
      <input type="text" name="filename" id="courseName" value="{{request('title')}}">

      <label for="">Upload file:</label>
        <input type="file" name="path" id="file" value="{{request('path')}}">
            <br>
      <button type="submit">Add</button>
    </form>
  </div>
</body>
</html>
