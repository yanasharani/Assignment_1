<?php
session_start();
if(!isset($_SESSION['admin'])){ 
    header("Location: admin.php"); 
    exit(); 
}
include 'connect.php';

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $desc = $_POST['description'];

    // Prepare statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO activities (ActivitiesName, ActivitiesDes) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $desc);
    $stmt->execute();
    $stmt->close();

    header("Location: activities.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Activity</title>
    <style>
        body { font-family: Arial; padding: 20px; background: #f4f4f4; }
        form { background: white; padding: 20px; border-radius: 8px; width: 400px; }
        input, textarea { width: 100%; padding: 8px; margin: 10px 0; }
        button { padding: 10px 15px; background: deeppink; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #e76f51; }
    </style>
</head>
<body>
    <h2>Add New Activity</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Activity Name" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <button type="submit" name="save">Save</button>
    </form>
</body>
</html>
