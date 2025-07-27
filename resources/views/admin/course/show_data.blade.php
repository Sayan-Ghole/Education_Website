<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Course Information</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
        }

        
        .sidebar {
            width: 220px;
            background-color: #FF6700;
            color: white;
            height: 100vh;
            padding: 20px;
            width: 12%;
        }

        .sidebar h2 {
            color: #f4efebff;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #c55002ff;
        }

        
        .main-content {
            flex: 1;
            padding: 30px;
            background-color: #f5f5f5;
            width: 88%;
        }

        .course-info {
            background: white;
            padding: 20px;
            border-radius: 8px;
        }

        .course-info h1 {
            color: #dc5901ff;
        }

        .course-info label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Courses</h2>
        
        <a href="{{ route('course.index') }}">View All Courses</a>
    </div>

    <div class="main-content">
        <div class="course-info">
            <h1>Single Course Information</h1>
            <label>Course Title:</label>
            {{ $courseAdmin->title }} <br><br>
            <label>Course Description:</label>
            {{ $courseAdmin->description }}
        </div>
    </div>

</body>
</html>
