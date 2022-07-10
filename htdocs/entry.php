<?php
session_start();
header('location:home.php');
$con=mysqli_connect('localhost','root');
if($con){
  echo "Connection established successfully !";
}
else{
  echo "Could not establish connection with database !";
}
echo "hi";
mysqli_select_db($con,'signin');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$t1s=$_POST['Sleeping_Time'];
$t1w=$_POST['Wake_Time'];
  $qy="UPDATE signin SET t1s=$t1s,t1w=$t1w";
  mysqli_query($con,$qy);
?>
