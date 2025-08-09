<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload files</title>
</head>
<body>
    <form action="post" enctype="multipart/form-data">
        <label for="">Upload file:</label>
        <input type="file" name="file" id="file">

        <button type="submit">Add</button>

    </form>
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Files</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 200px;
            background-color: #FF6700;
            color: #fff;
            min-height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            width: 15%;
        }

        .sidebar h2 {
            font-size: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            margin-bottom: 10px;
            background-color: #ca5303ff;
            border-radius: 4px;
        }

        .sidebar a:hover {
            background-color: #a94502ff;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            width: 85%;
        }

        .course-card {
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            
        }

        .course-card h3 {
            margin: 0 0 10px 0;
        }

        .course-actions a, .course-actions form {
            margin-right: 10px;
            display: inline-block;
            
        }

        .course-actions button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .course-actions button:hover {
            background-color: #c0392b;
        }

        .course-actions a {
            text-decoration: none;
            padding: 6px 12px;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
        }

        .course-actions a:hover {
            background-color: #2980b9;
        }

    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Files</h2>
        <a href="{{ route('upload.create') }}"> Upload File</a>
        <a href="{{ route('upload.index') }}"> View All Files</a>
        <a href="/admin_directly">Home</a>
    </div>

    <div class="content">
        <h1>All Files</h1>

        @foreach($upload as $to)
        <div class="course-card">
            <h3>{{ $to-> course_id}}</h3>
            <p>{{ $to->filename }}</p>
            <p>{{ $to->path }}</p>

            <div class="course-actions">
                
                <a href="{{ route('upload.edit', $to->id) }}">✏️ Edit</a>
                

                <form action="{{ route('upload.destroy', $to->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">🗑️ Delete</button>
                </form>
            </div>
        </div>
        @endforeach

    </div>

</body>
</html>
