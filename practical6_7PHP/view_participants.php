<?php
include('db.php');
$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM participants WHERE event_id=$id");
?>
<!DOCTYPE html>
<html>
<head><title>Participants</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
  <h2>Participants for Event ID: <?php echo $id; ?></h2>
  <table border="1" cellpadding="10">
    <tr><th>ID</th><th>Name</th><th>Email</th></tr>
    <?php
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
    }
    ?>
  </table>
</div>
</body>
</html>
