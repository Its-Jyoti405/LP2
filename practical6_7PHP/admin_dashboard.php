
<?php
session_start();
include('db.php');

if(!isset($_SESSION['admin'])){
  header("Location: admin_login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Admin Dashboard</h2>
  <a href="logout.php" style="float:right; margin:10px;">Logout</a>
  <a href="add_event.php">Add Event</a>
  <table border="1" cellpadding="10">
    <tr><th>ID</th><th>Name</th><th>Date</th><th>Description</th><th>Actions</th></tr>
    <?php
    $res = mysqli_query($conn, "SELECT * FROM events");
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['date']}</td>
                <td>{$row['description']}</td>
                <td>
                  <a href='edit_event.php?id={$row['id']}'>Edit</a> |
                  <a href='delete_event.php?id={$row['id']}'>Delete</a> |
                  <a href='view_participants.php?id={$row['id']}'>View Participants</a>
                </td>
              </tr>";
    }
    ?>
  </table>
</div>
</body>
</html>
