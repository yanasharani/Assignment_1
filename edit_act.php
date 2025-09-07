<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: admin.php"); exit(); }
include 'connect.php';

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM activities WHERE id=$id");
$row = $res->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $conn->query("UPDATE activities SET name='$name', description='$desc' WHERE id=$id");
    header("Location: activities.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Activity</title></head>
<body>
    <h2>Edit Activity</h2>
    <form method="post">
        <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
        <textarea name="description"><?= $row['description'] ?></textarea><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
