<?php
include('db.php');
$id = $_GET['id'];

// When form is submitted
if(isset($_POST['update'])){
  $name = $_POST['name'];
  $date = $_POST['date'];
  $desc = $_POST['desc'];
  
  if(mysqli_query($conn, "UPDATE events SET name='$name', date='$date', description='$desc' WHERE id=$id")){
  echo "<script>alert('✅ Event updated successfully!'); window.location='admin_dashboard.php';</script>";
} else {
  echo "<script>alert('❌ Update failed!');</script>";
}


// Fetch existing event data
$res = mysqli_query($conn, "SELECT * FROM events WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Event</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Edit Event</h2>
  <form method="POST">
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    <input type="date" name="date" value="<?php echo $row['date']; ?>" required><br>
    <textarea name="desc" required><?php echo $row['description']; ?></textarea><br>
    <button type="submit" name="update">Update Event</button>
  </form>
</div>
</body>
</html>
