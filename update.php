<?php
include "connect.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM activities WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Activity</title>
</head>
<body>
  <h2>Edit Activity</h2>
  <form method="POST" action="update_act.php">
      <input type="hidden" name="id" value="<?= $row['id']; ?>">
      Title: <input type="text" name="title" value="<?= $row['title']; ?>"><br><br>
      Description:<br>
      <textarea name="description" rows="5" cols="40"><?= $row['description']; ?></textarea><br><br>
      <button type="submit">Update</button>
  </form>
</body>
</html>
