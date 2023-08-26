<?php
session_start();

$user_id=$_SESSION['user_id'];

require_once "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST['purchase']))
{

$user_id=$_SESSION['user_id'];

    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];

    $query1=" UPDATE `users` SET `email`='$email',`phone`='$phone',`billing_name`='$name',`Address`='$address',`City`='$city',`Pin`='$pin',`State`='$state' WHERE id = $user_id";
    if (mysqli_query($con,$query1))
    {
        $query2="INSERT user_order SELECT * FROM cart WHERE user_id= $user_id;";
        if(mysqli_query($con,$query2))
        {
            $query3="DELETE FROM `cart` WHERE user_id= $user_id;";
        $delete=mysqli_query($con,$query3);

        echo" <script>
        window.location.href='orderplaced.php';
        </script>
        ";

        }
      

        
    }

}
}
?>