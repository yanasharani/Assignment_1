<?php
session_start();
include "connect.php"; 


if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "Sila isi Username dan Password. <a href='login.php'>Kembali</a>";
    exit();
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['admin'] = $username;
    header("Location: dashboard.php"); 
    exit();
} else {
    echo "<p style='color:red;'>Login gagal! Username atau Password salah.</p>";
    echo "<a href='login.php'>Cuba lagi</a>";
}
?>
