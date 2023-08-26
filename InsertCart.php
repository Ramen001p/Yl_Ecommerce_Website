<?php
session_start();
require_once "db.php";
if(isset($_POST['update_cart'])){
    $update_qnty = $_POST['cart_qnty'];
    $update_id = $_POST['cart_id'];
     $p_id=$_POST['p_id'];



    $check = " SELECT * FROM `products` WHERE id =$p_id;";
    $sql = mysqli_query($con, $check);
    $item = mysqli_fetch_array($sql);
     $num = $item['quantity'] ;
    if($num>$update_qnty){
        $query="UPDATE `cart` SET quantity = '$update_qnty' WHERE id ='$update_id'";
        $link =mysqli_query($con,$query);

        $_SESSION['check'] = " <div class='alert alert-success text-center' role='alert'>
        Product Quantity Updated Successfully!</div>";
        header('location:mycart.php');

    }else{
        $_SESSION['check'] = " <div class='alert alert-danger text-center' role='alert'>
        Sorry, Only $num item left</div>";
                            header('location:mycart.php');
    }





   
                       
                        
}



    
    

?>