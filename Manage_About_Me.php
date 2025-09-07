<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit();
}
include 'connect.php';


$result = $conn->query("SELECT * FROM About_Me");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Profile</title>
    <style>
        body { 
            font-family: Arial; 
            background: #f4f4f4; 
            padding:20px; 
        }
        h1 { 
            color: deeppink; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top:20px; 
            background:white; 
        }
        table, th, td { 
            border: 1px solid #ccc; 
        }
        th, td { 
            padding: 10px; 
            text-align: center; 
        }
        a { 
            text-decoration: none; 
            margin: 0 5px; 
            color: deeppink;
        }
        a:hover {
            text-decoration: underline;
        }
        .add-btn { 
            display:inline-block; 
            padding:10px 15px; 
            background:deeppink; 
            color:white; 
            border-radius:5px; 
            margin-bottom:10px;
        }
        .logout-btn { 
            float:right; 
        }
        img { 
            width: 100px; 
            border-radius: 8px; 
        }
    </style>
</head>
<body>

<h1>Manage About Me</h1>
<a href="add_profile.php" class="add-btn">+ Add New</a>
<a href="logout.php" class="add-btn logout-btn">Logout</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Bio</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['Id'] ?></td>
        <td><?= $row['Name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['bio'] ?></td>
        <td><img src="uploads/<?= $row['Photo'] ?>" alt="Profile Photo"></td>
        <td>
            <a href="edit_profile.php?id=<?= $row['Id'] ?>">Edit</a> | 
            <a href="delete_profile.php?id=<?= $row['Id'] ?>" onclick="return confirm('Delete this?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
