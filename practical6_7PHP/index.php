<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Event Registration</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Available Events</h2>
  <ul>
    <?php
    $res = mysqli_query($conn, "SELECT * FROM events");
    while($row = mysqli_fetch_assoc($res)){
        echo "<li>{$row['name']} ({$row['date']}) - {$row['description']}</li>";
    }
    ?>
  </ul>

  <h3>Register for Event</h3>
  <form method="POST" action="register.php">
    <input type="text" name="name" placeholder="Your Name" required><br>
    <input type="email" name="email" placeholder="Your Email" required><br>
    <select name="event_id" required>
      <option value="">Select Event</option>
	  <option>Hackathon 2025</option>
        <option>AI Workshop</option>
        <option>Cloud Summit</option>
      <?php
      $res = mysqli_query($conn, "SELECT * FROM events");
      while($r = mysqli_fetch_assoc($res)){
          echo "<option value='{$r['id']}'>{$r['name']}</option>";
      }
      ?>
    </select><br>
    <button type="submit">Register</button>
  </form>
</div>
</body>
</html>
