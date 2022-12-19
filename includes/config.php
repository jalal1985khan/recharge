<?php
$con = new mysqli("localhost","u571935445_andmob","7[pY7cVRmU","u571935445_andmob");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
?>