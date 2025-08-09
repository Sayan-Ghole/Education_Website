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

        label {
  font-weight: bold;
  margin-right: 10px;
  font-size: 1rem;
}

input[type="text"] {
  padding: 8px 12px;
  border: 1px solid #ccc;
  border-radius: 8px;
  outline: none;
  font-size: 1rem;
  width: 650px;
  transition: 0.3s ease;
}

input[type="text"]:focus {
  border-color: #ff6700;
  box-shadow: 0 0 5px rgba(255, 103, 0, 0.4);
}

button {
  padding: 8px 16px;
  background-color: #ff6700;
  color: white;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
  margin-left: 10px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #e65c00;
}

/* Optional: Group everything in one row */
label, input[type="text"], button {
  vertical-align: middle;
}
#search_ber{
    margin: 56px 182px;
}

    </style>
</head>
<body>
    <div class="sidebar">
        <h2 style="text-align:center;">Menu</h2>
        <a href="{{route('Home_page')}}">Home</a>
        <a href="{{ url('/user') }}">All Courses</a>
    </div>
    <div class="main-content">
        <h1>Courses</h1>
        <div id="search_ber">
        <form action="{{route('search_course')}}" method="post">
            @csrf
            <label for="search">
                Search Course:
            </label>
            <input type="text" name="search"  >
            <button value="search">Search</button>
        </form>
        </div>

    @foreach($courses as $course)
        <div class="course">
            <h2>{{ $course->title }}</h2>
            <p>{{ $course->description }}</p>
            <a href="{{ route('course_topics', ['id' => $course->id]) }}">View Topics</a>

        </div>
    @endforeach

    @if($courses->isEmpty())
        <p style="text-align:center;">No courses found.</p>
    @endif

  </div>
</body>
</html>
