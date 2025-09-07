<?php
include "connect.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Activities</title>
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

        .section {
            text-align: center;
            padding: 40px 20px;
            margin: 20px auto;
            width: 90%;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .activity-img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 15px;
        }

        h1 {
            color: deeppink;
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
            <li><a href="index.php">ABOUT ME</a></li>
            <li><a href="activities.php">ACTIVITIES</a></li>
            <li><a href="education.php">EDUCATION</a></li>
            <li><a href="qualification.php">QUALIFICATION</a></li>
            <li><a href="interest.php">INTEREST</a></li>
            <li>
                <a href="tel:+601140009317" style="color:white; font-size:22px;">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </li>
            <li>
                <a href="mailto:yanasharani@gmail.com" style="color:white; font-size:22px;">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </li>
        </ul>
    </div>
</header>

<section class="section">
    <h1>My Activities</h1>
    <p>Here are some of the activities I am involved in:</p>

    <div>
        <img src="activities.jpg" alt="Activity 1" class="activity-img">
        <h3>Sport</h3>
        <p>Throughout my school years, I was actively involved in co-curricular and sports activities. I was honoured to be named the Olahragawati Sekolah twice (2016 & 2018), and I also received the prestigious Tokoh Kokurikulum award.</p>
    </div>
    </div>


    <button class="print-button" onclick="window.print()">Print</button>
</section>

</body>
</html>
