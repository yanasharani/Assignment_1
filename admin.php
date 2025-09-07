<?php
session_start();
if(isset($_SESSION['admin'])){
    header("Location: activities.php");
    exit();
}

if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == "admin" && $pass == "1234"){ 
        $_SESSION['admin'] = $user;
        header("Location: activities.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .login-box {
            width: 300px; margin: 100px auto; padding: 20px;
            background: white; border: 1px solid #ccc; border-radius: 10px;
        }
        h2 { text-align: center; color: deeppink; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button {
            width: 100%; padding: 10px; background: deeppink; color: white;
            border: none; border-radius: 5px; cursor: pointer;
        }
        button:hover { background: black; }
        .error { color: red; text-align: center; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <?php if(!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>
