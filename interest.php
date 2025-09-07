<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Interest</title>

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
     body { 
        background-image: url("wallpaper.jpg"); 
        margin: 0;
        font-family: Arial, sans-serif;
     }

     header { 
        background-color: deeppink; 
        padding: 20px 0; 
     }

     .navbar { 
        width: 90%; 
        margin: 0 auto; 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
     }

     .navbar .logo img {
        height: 50px;
        width: auto;
        border-radius: 8px;
     }

     .nav-links { 
        list-style: none; 
        display: flex; 
        gap: 20px; 
        padding: 0; 
        margin: 0; 
        align-items: center;
     }

     .nav-links li a { 
        color: white; 
        text-decoration: none; 
        font-weight: bold; 
        font-size: 18px;
     }

     .nav-links li a:hover { 
        text-decoration: underline; 
        color: #e76f51; 
     }

     h2 {
        text-align: center;
        margin-top: 30px;
        color: deeppink;
     }

     p {
        text-align: center;
        font-size: 18px;
        max-width: 800px;
        margin: 10px auto;
        line-height: 1.6;
     }
  </style>
</head>
<body>
  <header>
    <div class="navbar">
        <div class="logo">
            <a href="index.html">
                <img src="logo.jpg" alt="My Logo">
            </a>
        </div>

        <ul class="nav-links">
            <li><a href="index.html" target="_blank">ABOUT ME</a></li>
            <li><a href="activities.php" target="_blank">ACTIVITIES</a></li>
            <li><a href="education.html" target="_blank">EDUCATION</a></li>
            <li><a href="qualification.html" target="_blank">QUALIFICATION</a></li>
            <li><a href="interest.html" target="_blank">INTEREST</a></li>
            <li>
                <a href="tel:+601140009317" target="_blank" style="color:white; font-size:22px;">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </li>
            <li>
                <a href="mailto:yanasharani@gmail.com" target="_blank" style="color:white; font-size:22px;">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
  </header>

  <section class="intro">
      <h2>MY INTEREST</h2>
      <p>I have a deep interest in physical activities and sports. I enjoy any games that involve movement and energy. Besides sports, I’m also passionate about exploring new things in technology, learning new skills, working in groups, and creating simple tech projects. I believe that a balance between study and activity is important for personal growth and success.</p>
  </section>
</body>
</html>

