<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      width: 100%;
      height: 100%;
      background-color: #5fa8d3;
    }

    /* Navbar */
    .navbar {
      background-color: #5fa8d3;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      
      padding: 28px 40px;

    }

    .logo {
      font-size: 1.5em;
      font-weight: bold;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .nav-links li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
    }

    /* .nav-links li a:hover {
      text-decoration: dashed;
    } */

    .menu-toggle {
      display: none;
      font-size: 1.2em;
      cursor: pointer;
    }

    

    /* Footer */
    .footer {
      background-color: #13033fff;
      color: white;
      /* color: #13033fff; */
      padding: 40px 20px 20px;
      font-size: 14px;
    }

    .footer-content {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
    }

    .footer-section {
      flex: 1 1 200px;
    }

    .footer-section h3 {
      color: white;
      margin-bottom: 15px;
    }

    .footer-section a {
      color: #ccc;
      text-decoration: none;
    }

    .footer-section a:hover {
      text-decoration: underline;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
      border-top: 1px solid #100234ff;
      padding-top: 10px;
      color: #aaa;
    }
    .container {
      width: 450px;
      margin: 50px auto;
      background-color: #ffffff;
      border-radius: 8px;
      padding: 30px;
      margin: 80px;
      margin-left: 128px;
      margin-top: 24px;
    }
      
    
    .main-section {
  display: flex;
  justify-content: space-between;
  gap: 30px;
  max-width: 100%;
  margin: 2px auto;
  padding: 60px;
  width: 100%;
}

.left-container{
  /* background-color: #ffffff; */
  border-radius: 8px;
  padding: 30px;
  flex: 1;
  margin-right: 40px;
  margin-top: 54px;
  margin-left: 20px;
  
  
}
.right-container {
  /* background-color: #ffffff; */
  padding: 80px;
  font-family: Arial, Helvetica, sans-serif;
  margin-top: 0;
  flex: 1;
 
}
.about-container2 {
  
  padding: 60px;
  font-family: Arial, Helvetica, sans-serif;
  width: 40%;
  font-size: 28px;
  margin: 20px auto;
  margin-top: 0;
  margin-right: 0;
  margin-right: 40px;
  color: #15158bff;
  font-weight: bold;
  
  flex: 1;
 
}
.about-container1 {
  
  padding: 60px;
  width: 60%;
  display: flex;
  justify-content: center;   
  align-items: center;
  max-width: 700px;         
  margin: auto;
  margin-top: 0;
  flex: 1;
 
}
.about-container1 img {
  width: 80%;           
  height: 100%;      
}
.customar-task2{
  padding: 80px;
  height: 80%;
  width: 60%;
  margin: 20px;
  margin-right: 0px;
  /* background-color: red; */
  border-radius: 12px;

}
.customar-task2 img{
  width: 68%;  
  height: 100%; 

}
.customar-task1{
  padding: 80px;
  /* height: 100%; */
  
  width: 80%;
  margin: 20px;
  margin-right: 10px;
  /* background-color: red; */
  border-radius: 12px;
  

}

h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 68px;
      animation: bounceFade 1s ease-out forwards;
    }
    h2 {
      text-align: center;
      font-size: 38px;
      margin-bottom: 25px;
    }
h4 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 28px;
    }


.right-container {
  margin-left: 20px;
}

.about-us {
  max-width: 100%;
  /* margin: 60px auto; */
  margin-left: 0;
  margin-top: 0;
  /* background-color: white; */
  padding: 40px;
  width: 100%;
  margin-right: 0;
    padding-right: 0;
    margin-left: 0;
  padding-left: 0;
  
  /* display: flex; */
  margin-bottom: 0%;
}



.about-us p {
  font-size: 16px;
  line-height: 1.7;
  color: #333;
}
.sec1{
  display: flex;
  background-color: white;
  border-top-left-radius: 300px;
  border-bottom-left-radius: 300px;
  /* border-bottom-right-radius: 20px; */
  margin: 40px 40px;
  margin-top: 0;
  margin: 20px;
  margin-right: 0;
  padding-right: 0;
  margin-left: 180px;
}
.sec2{
  display: flex;
  background-color: white;
  border-top-right-radius: 300px;
  border-bottom-right-radius: 300px;
  margin: 40px 40px;
  margin-top: 0;
  margin: 20px;
  margin-left: 0;
  padding-left: 0;
  margin-right: 180px;
}


@keyframes bounceFade {
      0% { opacity: 0; transform: translateY(-50px); }
      50% { opacity: 1; transform: translateY(0px); }
      70% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }



    .course-link {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #220769ff;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    
    transition: background-color 0.3s ease;
}

.course-link:hover {
    background-color: #100335ff;
}


.customar-task1 p{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  color: #15158bff;

  font-weight: bold;
}
.about-container2 p{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
  color: #15158bff;

  font-weight: bold;
}
.course-link2 {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #220769ff;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 10;
    font-size: 16px;
    /* font-weight: bold; */
    transition: background-color 0.3s ease;
}
.course-link2:hover {
    background-color: #100335ff;
}
.section-title{
  font-family: Arial, Helvetica, sans-serif;
  color: #13033fff;
  margin-top: 60px;
  margin-bottom: 60px;
  font-size: 60px;

}



/* edit.. */


  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">Skill_Up</div>
    <ul class="nav-links" id="navLinks">
      
      <li><a href="/user">Course</a></li>
      <li><a href="/user/files">Download File</a></li>
      <li><a href="{{route('Submit_page')}}">Submit</a></li>
      <li><a href="{{route('register')}}">Sign Up</a></li>
      <li><a href="{{route('user_logout')}}">Logout</a></li>
    </ul>
  </nav>

  
  
    <!-- Main Two-Column Section -->
<div class="main-section">
  <!-- Left: Registration Form -->
  <div class="left-container">
    
  <h1 style="color: #04042cff;">Welcome to Skill_Up</h1>
    
    
  </div>

  <!-- Right: About Section -->
  <div class="right-container">
    
    <h4 style="color: white;">
      Skill_Up is your one-stop platform for accessing and submitting educational courses and files with ease.
      Whether you're a learner or a contributor, our portal offers seamless access to valuable resources.
  </h4>
    <p style="color: #13033fff;">
      Easily register, download, and submit your educational content from anywhere. We’re committed to enhancing knowledge-sharing and simplifying the digital education experience.
    </p>
  </div>
</div>

<!-- About Us Section -->
 <div class="about-main" style="margin-right: 0;">
<div class="about-us">

    <div class="sec1">
        <div class="about-container1">
            <img src="https://media.istockphoto.com/id/1389823038/vector/young-man-working-on-the-laptop-computer-and-having-a-idea-freelance-job-creativity.jpg?s=612x612&w=0&k=20&c=eAlHMALZxQG21xy8n5RNd-kXDIy9Gvz3d9AZJL8BPMc=" 
                 alt="Man working on computer">
        </div>
        <div class="about-container2">
            <h2 style="color: #13033fff;">Why Skill_Up</h2>
            <ul>
                <li>Help learners find quality educational resources quickly.</li>
                <li>Empower contributors to share their own courses and topics effortlessly.</li>
                <li>Simplify access with a clean, easy-to-use interface.</li>
            </ul>
        </div>
    </div>

    <h2 class="section-title">What You Can Do on Skill_Up</h2>
    
    <div class="sec2">
        <div class="customar-task1">
          <h2 style="color: #13033fff;">Courses</h2>
            <p>
                Easily browse through different courses, explore detailed descriptions, 
                and access related topics with downloadable resources. Whether you’re 
                a student looking to enhance your skills or a contributor sharing your expertise,
                our platform keeps everything simple and organized.
            </p>
            <a href="/user" class="course-link">Explore Courses</a>
            
        </div>
        <div class="customar-task2">
          <img src="https://cdn-icons-png.freepik.com/256/2721/2721593.png" alt="Courses Icon">
            
        </div>
    </div>
    <div class="sec1" style="margin-top: 48px;">
        <div class="about-container1">
            <img src="https://cdn.pixabay.com/photo/2017/03/08/21/20/pdf-2127829_640.png" 
                 alt="Man working on computer">
        </div>
        <div class="about-container2">
            <h2 style="color: #13033fff;">Download Files</h2>
            <p>Here, you can find and download course materials, 
              project files, reference documents, and other essential content in
               just a few clicks. Files are neatly organized by course and category,
                making it easy to locate exactly what you need.
              </p>
                <a href="/user/files" class="course-link2"> Explore Files</a>
        </div>
    </div>

    <div class="sec2" style="margin-top: 48px;">
        <div class="customar-task1">
          <h2 style="color: #13033fff;">Submission</h2>
            <p>
              You can submit new courses, add detailed topics, 
              and upload files that support your content. Whether you’re sharing 
              study materials, practical guides, or multimedia resources, our 
              platform makes the process simple and organized. Each submission is 
              reviewed to ensure quality, helping us maintain a valuable and reliable 
              knowledge base for all users.
                   
            </p>
            <a href="{{route('Submit_page')}}" class="course-link">Submit New</a>
            
        </div>
        <div class="customar-task2">
          <img src="https://media.istockphoto.com/id/1257397992/vector/agreement-or-directory-submission-icon-design.jpg?s=612x612&w=0&k=20&c=31C-OFa78Gb5n5zSShQyaI3G64W6OfKwX_CKOmFBXWw=" alt="Courses Icon">
            
        </div>
    </div>

</div>
<!-- Connect with a growing learning community. -->
  </p>
</div>

</div>


  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>Contact Us</h3>
        <p>Email: sayanghole126@gmail.com</p>
        <p>Phone: +91 987654321</p>
        <p>Address: 123 Kolkata, India</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/submit">Submit</a></li>
          <li><a href="/register">Register</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <!-- <h3>Follow Us</h3>
        <p>
          <a href="#">Facebook</a> |
          <a href="#">Twitter</a> |
          <a href="#">Instagram</a>
        </p> -->
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy;Skill_Up.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
