<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
    exit();
}
include "connect.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Activities</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f9f9f9; }
        h1 { text-align: center; margin: 20px; color: deeppink; }
        table { margin: 20px auto; border-collapse: collapse; width: 80%; background: white; }
        table, th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: deeppink; color: white; }
        td { text-align: center; }
        .btn { padding: 6px 12px; text-decoration: none; border-radius: 5px; font-size: 14px; }
        .btn-add { background-color: deeppink; color: white; }
        .btn-edit { background-color: orange; color: white; }
        .btn-delete { background-color: red; color: white; }
        .btn:hover { opacity: 0.8; }
        .top-bar { text-align:center; margin-top:20px; }
    </style>
</head>
<body>
    <h1>Admin Panel: Manage Activities</h1>

    <div class="top-bar">
        <a href="add_act.php" class="btn btn-add">+ Add New Activity</a>
        <a href="logout.php" class="btn" style="background:gray; color:white;">Logout</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Activity</th>
            <th>Action</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM activities");
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['activity']."</td>";
            echo "<td>
                    <a href='edit_act.php?id=".$row['id']."' class='btn btn-edit'>Edit</a>
                    <a href='delete_act.php?id=".$row['id']."' class='btn btn-delete' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
