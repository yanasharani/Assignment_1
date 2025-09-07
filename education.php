<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Education</title>

  
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

     .intro { 
        text-align: center; 
        padding: 40px 20px; 
     }

     .profile-pic { 
        width: 150px; 
        height: 150px; 
        border-radius: 50%; 
        object-fit: cover; 
        margin-bottom: 20px; 
     }

     .graduation { 
        display: block;
        margin: 20px auto;
        width: 250px;
        border-radius: 10px;
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
            <li><a href="index.php" target="_blank">ABOUT ME</a></li>
            <li><a href="activities.php" target="_blank">ACTIVITIES</a></li>
            <li><a href="education.php" target="_blank">EDUCATION</a></li>
            <li><a href="qualification.php" target="_blank">QUALIFICATION</a></li>
            <li><a href="interest.php" target="_blank">INTEREST</a></li>
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
      <h2>MY EDUCATION</h2>
      <p>I started my education at Pra Sekolah SK Paya Panjang, Muar from 2011 to 2012. I then continued at the same school for my primary education from 2013 to 2018, where I received 2A, 2B, and 2C in the UPSR exam. After that, I studied at SMK Tun Perak, Muar from 2019 to 2023. In SPM, I achieved 6A, 1B, and 2C. Currently, I am continuing my studies at UPSI to build my future in the field of computer science.</p>
      <img src="graduation.jpg" alt="Graduation" class="graduation">
  </section>
</body>
</html>
