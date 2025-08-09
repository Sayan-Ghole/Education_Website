
@extends("public.layouts.app")
@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Course, Topic & File Submission</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      justify-content: center;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 350px;
      margin: 40px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 22px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"],
    textarea,
    select,
    input[type="file"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      background-color: #FF6700;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #d85600ff;
    }
    #format{
      display: flex;
      margin: 98px;
    }
  </style>
</head>
<div id="format">
<body>

  <!-- Course Form -->
  <div class="form-container">
    <h2>Submit a Course</h2>
    <form action="{{route('Home_page')}}/submit" method="post">
        @csrf
      <label for="course-title">Course Title</label>
      <input type="text" id="course-title" name="course_title" required>

      <!-- <label for="course-title">Id</label>
      <input type="text" id="course-title" name="id" required> -->
      

      <label for="course-description">Course Description</label>
      <textarea id="course-description" name="course_description" rows="4" required></textarea>

      <button type="submit">Submit Course</button>
    </form>
  </div>

  <!-- Topic Form -->
  <div class="form-container">
    <h2>Submit a Topic</h2>
    <form action="{{route('Home_page')}}/submit2" method="post">
        @csrf
      <label for="select-course">Select Course</label>
      <select id="select-course" name="course_id" required>
        <option > Choose a Course </option>
        <option value="1">C</option>
        <option value="2">Java</option>
        <option value="3">R Programming</option>
        <option value="4">JavaScript</option>
        <option value="5">PHP</option>
      </select>
      <label for="topic-title">Topic Title</label>
      <input type="text" id="topic-title" name="topic_title" required>

      <label for="topic-description">Topic Description</label>
      <textarea id="topic-description" name="topic_description" rows="4" required></textarea>

      <button type="submit">Submit Topic</button>
    </form>
  </div>

  <!-- File Form -->
  <div class="form-container">
    <h2>Upload a File</h2>
    <form action="{{route('Home_page')}}/submit3" method="post" enctype="multipart/form-data">
        @csrf
        
      <label for="select-topic">Select Topic</label>
      <select id="select-topic" name="topic_id" required>
        <option value=""> Choose a Topic </option>
        <option value="1">Topic X</option>
        <option value="2">Topic Y</option>
        <option value="3">Topic Z</option>
      </select>

      <label for="file-title">File Title</label>
      <input type="text" id="file-title" name="file_title" required>

      <label for="upload-file">Upload File</label>
      <input type="file" id="upload-file" name="uploaded_file" required>

      <button type="submit">Submit File</button>
    </form>
  </div>

</body>
 </div>
</html>

@endsection
