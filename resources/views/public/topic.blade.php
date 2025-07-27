<!DOCTYPE html>
<html>
<head>
    <title>Topics of {{ $courses->title }}</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
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
            background-color: #c34f02ff;
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

        .topic {
            background: white;
            padding: 15px;
            margin: 10px auto;
            width: 70%;
            border-radius: 8px;
            box-shadow: 0 0 5px #ccc;
        }

        .topic-title {
            font-size: 18px;
            font-weight: bold;
        }

        .topic-desc {
            margin-top: 5px;
            color: #555;
        }

        a.back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #FF6700;
            text-decoration: none;
        }

        a.back-link:hover {
            text-decoration: underline;
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

    <h1>Topics of {{ $courses->title }}</h1>

    @foreach($topics as $topic)
        <div class="topic">
            <div class="topic-title">{{ $topic->title }}</div>
            <div class="topic-desc">{{ $topic->description }}</div>
        </div>
    @endforeach

    @if($topics->isEmpty())
        <p style="text-align:center;">No topics found for this course.</p>
    @endif

    </div>
</body>
</html>
