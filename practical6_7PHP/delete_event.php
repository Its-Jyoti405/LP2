<?php
include('db.php');
$id = $_GET['id'];
if(mysqli_query($conn, "DELETE FROM events WHERE id=$id")){
  echo "<script>alert('🗑️ Event deleted successfully!'); window.location='admin_dashboard.php';</script>";
} else {
  echo "<script>alert('❌ Deletion failed!'); window.location='admin_dashboard.php';</script>";
}

header("Location: admin_dashboard.php");
?>
