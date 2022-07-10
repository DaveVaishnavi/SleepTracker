<?php
session_start();
header('location:login.php');
$con=mysqli_connect('localhost','root');
if($con){
  echo "Connection established successfully !";
}
else{
  echo "Could not establish connection with database !";
}
echo "hi";
mysqli_select_db($con,'sleeptracker');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$q="select * from signin where fullname='$name' && password='$password'&& email='$email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
  echo "Duplicate session detected !";
}
else{
  $qy="INSERT INTO signin (fullname,email,password) VALUES ('$name','$email','$password')";
  mysqli_query($con,$qy);
}
?>
