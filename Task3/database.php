<?php 
$con=mysqli_connect('localhost','root','','message');
echo "connected to database";

if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
?>