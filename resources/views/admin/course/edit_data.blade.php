<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
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
            <h1>Edit Course</h1>

            <form action="{{ route('course.update', $edit->id) }}" method="POST">
                @csrf
                @method('PUT')

                <label for="courseName">Course Name:</label>
                <input type="text" name="courseName" id="courseName" value="{{ $edit->title }}">

                <label for="courseDescription">Course Description:</label>
                <input type="text" name="courseDescription" id="courseDescription" value="{{ $edit->description }}">

                <button type="submit">Update Course</button>
            </form>
        <a href="{{ route('course.index') }}"><button>View All Course</button></a>

        </div>
    </div>
</body>
</html>
