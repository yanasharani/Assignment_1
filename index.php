<?php
include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    
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


        .nav-links li a.admin-btn {
            background-color: #000000;
            padding: 5px 12px;
            border-radius: 5px;
            font-size: 16px;
        }

        .nav-links li a.admin-btn:hover {
            background-color: #e76f51;
            color: white;
            text-decoration: none;
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

        .print-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: deeppink;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .print-button:hover {
            background-color: #000000;
        }
    </style>
</head>
<body>

<header>
    <div class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="logo.jpg" alt="My Logo">
            </a>
        </div>

        <ul class="nav-links">
            <li><a href="index.php" target="_blank">ABOUT ME</a></li>
            <li><a href="activities.php">ACTIVITIES</a></li>
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
           
            <li>
                <a href="login.php" target="_blank" class="admin-btn">ADMIN</a>
            </li>
        </ul>
    </div>
</header>

<section class="intro">
    <img src="profile pic.jpg" alt="profile" class="profile-pic">
    <h1>Hi, I am NURLYANA!</h1>
    <p>Hi! My name is Nurlyana, and I’m from Muar, Johor. I’m currently a Diploma in Computer Science student at Universiti Pendidikan Sultan Idris (UPSI), in Semester 4. I’m a passionate and active person who loves learning new things especially in technology and staying involved in sports and co-curricular activities. I always do my best and enjoy taking on new challenges.</p>

    <button class="print-button" onclick="window.print()">Print</button>
</section>

</body>
</html>
