<?php
include('db.php');
if(isset($_POST['add'])){
  $name = $_POST['name'];
  $date = $_POST['date'];
  $desc = $_POST['desc'];
  if(mysqli_query($conn, "INSERT INTO events (name, date, description) VALUES ('$name','$date','$desc')")){
  echo "<script>alert('✅ Event added successfully!'); window.location='admin_dashboard.php';</script>";
} else {
  echo "<script>alert('❌ Failed to add event!');</script>";
}

  header("Location: admin_dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Event</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
  <h2>Add Event</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="Event Name" required><br>
    <input type="date" name="date" required><br>
    <textarea name="desc" placeholder="Description"></textarea><br>
    <button type="submit" name="add">Add Event</button>
  </form>
</div>
</body>
</html>
