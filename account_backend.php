<?php
include "db.php";
session_start();
$user_id=$_SESSION['user_id'];

if(isset($_POST['update_information'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];

    $query="UPDATE `users` SET `username`='$name',`email`='$email',`phone`='$phone',`Address`='$address',`City`='$city',`Pin`='$pin',`State`='$state' WHERE id = $user_id";
    $link =mysqli_query($con,$query);
    echo "<script>
alert('Information successfuly saved');
window.location.href='user_account.php';
</script>";
// header('location:user_account.php');

}

?>  

