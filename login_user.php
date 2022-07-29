<?php
session_start();
$con = mysqli_connect('localhost:1503', 'ecomm', '', 'vuser');
$email= $_POST['email'];
$password=$_POST['password'];
$captcha=$_POST['captcha'];
$query="SELECT * FROM appuser WHERE email='$email' AND password='$password'";
$fire=mysqli_query($con,$query);
if($fire){
if(mysqli_num_rows($fire)==0){
header("Location: login2.php");
}
else{
header("Location: home.php");
}
}
?>