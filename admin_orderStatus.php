<?php
require_once('db.php');

$id=$_GET['id_select'];
$p_id=$_GET['p_id'];
$s_id=$_GET['s_id'];
$user_id=$_GET['user_id'];
$p_img=$_GET['p_img'];
$p_name=$_GET['p_name'];
$p_price=$_GET['p_price'];


$query1=" INSERT INTO `deliverd_order`( `p_id`, `user_id`, `s_id`, `p_img`, `p_name`, `total_price`) VALUES ('$p_id','$user_id','$s_id','$p_img','$p_name','$p_price')";
    if (mysqli_query($con,$query1))
    {
       
            $query3="DELETE FROM `user_order` WHERE id= $id;";
        $delete=mysqli_query($con,$query3);

        echo" <script>
        window.location.href='admin_order.php';
        </script>
        ";

      

        
    }







?>