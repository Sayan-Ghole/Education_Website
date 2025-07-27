<!DOCTYPE html>
<html>
<head>
    <title>Download Files</title>
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

        
        .file { 
            background: #fff; 
            margin: 15px auto;
             padding: 15px;
              border-radius: 10px;
               width: 70%; 
               box-shadow: 0 0 8px #ccc;
             }
        .file p {
             margin: 5px 0; 
            }
        .file a {
             background: #FF6700; 
             color: #fff; 
             padding: 8px 12px; 
             text-decoration: none; 
             border-radius: 5px; 
            }
        .file a:hover {
             background: #e05c00; 
            }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2 style="text-align:center;">Menu</h2>
        <a href="{{ url('/') }}">Home</a>
    </div>
    <div class="main-content">
    <h1> Download Files</h1>

    @foreach($file as $fi)
        <div class="file">
            <p><strong>📂 {{ $fi->filename }}</strong></p>
           <br>
            <p>📅 Uploaded on: {{ $fi->created_at->format('d M Y') }}</p>
            <br>
            <a href="/user/download/{{ $fi->id }}">⬇️ Download</a>
        </div>
    @endforeach

    </div>
   
</body>
</html>
