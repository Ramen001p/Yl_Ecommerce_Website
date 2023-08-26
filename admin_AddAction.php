<?php
session_start();
 $seller_id=$_SESSION['admin_id'];
include "db.php";
    $ProductName=$_POST['Pname'];
    $category=$_POST['Category'];
    $Description=$_POST['Description'];
    $Details=$_POST['Details'];
    $SF=$_POST['sf'];
    $MC=$_POST['mc'];
    $Price=$_POST['Price'];
    $Offprice=$_POST['Offprice'];
    $Discount=$_POST['Discount'];
    $qnty=$_POST['qnty'];
    $img1=$_FILES['img1'];
    $img2=$_FILES['img2'];
    $img3=$_FILES['img3'];
    $img4=$_FILES['img4'];
    $img5=$_FILES['img5'];


    $file_name=$_FILES['img1'] ['name'];
    $file_tmp=$_FILES['img1'] ['tmp_name'];

    $file_name2=$_FILES['img2'] ['name'];
    $file_tmp2=$_FILES['img2'] ['tmp_name'];


    $file_name3=$_FILES['img3'] ['name'];
    $file_tmp3=$_FILES['img3'] ['tmp_name'];


    $file_name4=$_FILES['img4'] ['name'];
    $file_tmp4=$_FILES['img4'] ['tmp_name'];


    $file_name5=$_FILES['img5'] ['name'];
    $file_tmp5=$_FILES['img5'] ['tmp_name'];


    move_uploaded_file($file_tmp,"product/". $file_name);
    move_uploaded_file($file_tmp2,"product/". $file_name2);
    move_uploaded_file($file_tmp3,"product/". $file_name3);
    move_uploaded_file($file_tmp4,"product/". $file_name4);
    move_uploaded_file($file_tmp5,"product/". $file_name5);
 
        // insert product into product
    $sql="INSERT INTO `products`(`id`, `s_id`, `product_name`, `category`, `description`, `details`, `size_fit`, `material_care`, `price`, `off_price`, `discount_off`, `quantity`, `image`, `image1`, `image2`, `image3`, `image4`) VALUES ('','$seller_id','$ProductName','$category','$Description','$Details','$SF','$MC','$Price','$Offprice','$Discount','$qnty','product/$file_name','product/$file_name2','product/$file_name3','product/$file_name4','product/$file_name5')";
    $result = $con->query($sql);
    if ($result == TRUE) {

      echo '<script>alert("Product Inserted")</script>';
        header('location:admin_Allproducts.php');
  
      }else{
  
        echo "Error:". $sql . "<br>". $con->error;
  
      } 


      






?>