<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Create Topics</title>
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
    <a href="/manager">Home</a>
    <a href="/view2">Submissions</a>
    <a href="/view">Registrations</a>
    <a href="/login">Login</a>
  </div>

@else
  <div class="sidebar">
    <h2>All Topics</h2>
    <a href="{{ route('topic.create') }}">Create Topic</a>
    <a href="{{ route('topic.index') }}">View All Topic</a>
    <a href="/admin">Home</a>
  </div>

  @endif

  <div class="main-content">
    <h1>Create Topic</h1>

    <form action="{{ route('topic.store') }}" method="POST">
      @csrf

      <label for="courseName">Course Id:</label>
      <input type="number" name="courseId" id="courseName" value="{{request('id')}}">

      <label for="courseName">Topic Name:</label>
      <input type="text" name="topicName" id="courseName" value="{{request('title')}}">

      <label for="courseDescription">Topic Description:</label>
      <input type="text" name="topicDescription" id="courseDescription" value="{{request('des')}}">
            <br>
      <button type="submit">Add Topic</button>
    </form>
  </div>
</body>
</html>
