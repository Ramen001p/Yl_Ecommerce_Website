<?php

session_start();

require_once('config.php');

//$name = $_POST['name'];
// $email = $_POST['email'];
$email =$_SESSION['admin_email'] = $_POST['email'];
//$phone =$_POST['phone'];
$pass = $_POST['password'];

$query = "SELECT * from admin_users WHERE email = '$email' && password = '$pass'";

$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num == 1){
    header("Location: ../../index.php");
}else{
    $_SESSION['status']="Wrong Email or <br>Password";
    $_SESSION['status_code'] = "error";
    header("Location: index.php");
}
?>