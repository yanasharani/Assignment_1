<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit();
}
include 'connect.php';
$result = $conn->query("SELECT * FROM activities");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Activities</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; padding:20px; }
        h1 { color: deeppink; }
        table { width: 100%; border-collapse: collapse; margin-top:20px; background:white; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: center; }
        a { text-decoration: none; margin: 0 5px; }
        .add-btn { display:inline-block; padding:10px 15px; background:deeppink; color:white; border-radius:5px; }
        .logout-btn { float:right; }
    </style>
</head>
<body>
    <h1>Manage Activities</h1>
    <a href="add_act.php" class="add-btn">+ Add New</a>
    <a href="logout.php" class="add-btn logout-btn">Logout</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Activity Name</th>
            <th>Description</th>
            <th>Date</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['Id'] ?></td>
            <td><?= $row['ActivitiesName'] ?></td>
            <td><?= $row['ActivitiesDes'] ?></td>
            <td><?= $row['ActivitiesDate'] ?></td>
            <td><img src="uploads/<?= $row['image'] ?>" width="100"></td>
            <td>
                <a href="edit_act.php?id=<?= $row['Id'] ?>">Edit</a> | 
                <a href="delete_act.php?id=<?= $row['Id'] ?>" onclick="return confirm('Delete this?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

