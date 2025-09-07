<?php
session_start();
if(!isset($_SESSION['admin'])){ header("Location: admin.php"); exit(); }
include 'connect.php';

$id = $_GET['id'];
$conn->query("DELETE FROM activities WHERE id=$id");
header("Location: activities.php");
?>
