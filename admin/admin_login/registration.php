<?php

session_start();
header('location:index.php');

require_once('config.php');

$name=$_SESSION['name'] = $_POST['name_r'];
$email = $_POST['email_r'];
$phone =$_POST['phone_r'];
$pass = $_POST['password_r'];

$query = "SELECT * from admin_users WHERE username = '$name'";

$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION['status']= "Username Already Taken";
    $_SESSION['status_code'] = "warning";
}else{
    $reg = "INSERT INTO admin_users(username,email,phone,password) VALUES('$name','$email','$phone','$pass')";
    mysqli_query($con,$reg);
     $_SESSION['status']="Registration Successful";
     $_SESSION['status_code'] = "success";
     
    
}


?>