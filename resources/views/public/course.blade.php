<!DOCTYPE html>
<html>
<head>
    <title>All Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #FF6700;
            color: white;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #ad4602ff;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #FF6700;
        }

        .course {
            background: white;
            padding: 20px;
            margin: 15px auto;
            width: 70%;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        .course a {
            display: inline-block;
            margin-top: 10px;
            background-color: #FF6700;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .course a:hover {
            background-color: #e05c00;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 style="text-align:center;">Menu</h2>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/user') }}">All Courses</a>
    </div>
    <div class="main-content">

    @foreach($courses as $course)
        <div class="course">
            <h2>{{ $course->title }}</h2>
            <p>{{ $course->description }}</p>
            <a href="{{ url('/user/courses/'.$course->id.'/topics') }}">View Topics</a>

        </div>
    @endforeach

    @if($courses->isEmpty())
        <p style="text-align:center;">No courses found.</p>
    @endif

  </div>
</body>
</html>
