<?php
session_start();
include('db.php');
$category_select=$_SESSION['category_select'];
$p_id=$_SESSION['product_id'];

if(isset($_POST['r_submit'])){
    $chooseStar = $_POST['chooseStar'];
    $review = $_POST['review'];
    $p_id=$_SESSION['product_id'];
    $user_id=$_SESSION['user_id'];
    $user_name = $_SESSION['username'];
    $date_time = 'hh24:mi:ss';

   if(!isset($_SESSION['email'])){
    header('location:Login/index.php');
}else{
    $q="SELECT * from deliverd_order WHERE p_id = $p_id";
    $l=mysqli_query($con,$q);
    $num = mysqli_num_rows($l);
    if($num == 1){
        $q2="SELECT * from review_table WHERE user_id = $user_id AND product_id = $p_id";
        $l2=mysqli_query($con,$q2);
        $n = mysqli_num_rows($l2);
        if($n == 1){
            

            $_SESSION['msg'] = "<div class='alert' style=' padding: 20px;
            background-color: #ff9800;
            color: white;text-align:center;'> 
            <h3>You already gave review !</h3> 
            </div>";

            header( "Location: description.php?id={$p_id}&category_select={$category_select} & user_id={$user_id}" );
 

                   
        }else{
           $insert="INSERT INTO `review_table`( `product_id`, `user_id`, `user_name`, `user_rating`, `user_review`) VALUES ('$p_id','$user_id','$user_name','$chooseStar','$review')";
            $link=mysqli_query($con,$insert);
            $_SESSION['msg'] = "<div class='alert' style=' padding: 20px;
            background-color: #2196F3;
            color: white;text-align:center;'> 
            <h3>Thank you for review </h3> 
            </div>";
            header( "Location: description.php?id={$p_id}&category_select={$category_select} & user_id={$user_id}" );
            

        }

    }else{
        $_SESSION['msg'] = "<div class='alert' style=' padding: 20px;
        background-color: #ff9800;
        color: white;text-align:center;'> 
        <h3>You Did Not Purchase This Item Yet!</h3> 
        </div>";

        header( "Location: description.php?id={$p_id}&category_select={$category_select} & user_id={$user_id}" );
        
    }


    
}
}






 











?>