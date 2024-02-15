<?php
include "../config/dbcon.php";
$UserID = $_GET["UserID"];
$sql = "DELETE FROM `users` WHERE UserID = $UserID";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: ../dashboard/member.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}