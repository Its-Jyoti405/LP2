<?php
include('db.php');
$name = $_POST['name'];
$email = $_POST['email'];
$event_id = $_POST['event_id'];

$sql = "INSERT INTO participants (name, email, event_id) VALUES ('$name','$email','$event_id')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Registration Successful!'); window.location='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
