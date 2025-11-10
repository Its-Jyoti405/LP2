<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Check if email already exists
$sql_check = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
  echo "⚠️ Email already registered!";
} else {
  $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  if ($conn->query($sql) === TRUE) {
    echo "🎉 Registration successful! <a href='login.html'>Click here to Login</a>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
