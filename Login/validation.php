<?php

session_start();

require_once('config.php');

//$name = $_POST['name'];
// $email = $_POST['email'];
$_SESSION['email'] = $_POST['email'];
//$phone =$_POST['phone'];
$pass = $_POST['password'];

$email =$_SESSION['email'];

$query = "SELECT * from users WHERE email = '$email' && password = '$pass'";

$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($query);
if($num == 1){
    $_SESSION['username']= $row['username'];
    $_SESSION['user_id']=$row['id'];
    header("Location: ../Home.php");
}else{
    $_SESSION['status']="Wrong Email or <br>Password";
    $_SESSION['status_code'] = "error";
    header("Location: index.php");
}
?>