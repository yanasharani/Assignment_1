<?php
include "connect.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

$sql = "UPDATE activities SET title='$title', description='$description' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: activities.php");
} else {
    echo "Error: " . $conn->error;
}
?>
