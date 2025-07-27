<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit File</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 220px;
            background-color: #f4f4f4;
            padding: 20px;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            display: block;
            margin: 10px 0;
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .sidebar a:hover {
            color: #FF6700;
        }

        .main {
            flex: 1;
            padding: 40px;
        }

        h1 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
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
            background-color: #e25d00;
        }
    </style>
</head>
<body>
    <div class="container">
        

        <!-- Main Content Area -->
        <div class="main">
            <h1>Edit File</h1>

            <form action="{{ route('upload.update',$edit->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
       @method('PUT')

      <label for="courseName">Course Id:</label>
      <input type="number" name="courseId" id="courseName" value="{{$edit->course_id}}">

      <label for="courseName">File Name:</label>
      <input type="text" name="filename" id="courseName" value="{{$edit->filename}}">

      <label for="">Upload file:</label>
        <input type="file" name="path" id="file" value="{{$edit->path}}">
            <br>
      <button type="submit">Add</button>
    </form>
        <a href="{{ route('upload.index') }}"><button>View All Files</button></a>

        </div>
    </div>
</body>
</html>
