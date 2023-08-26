<?php
include "db.php";
 //Add Category

 $category_name=$_POST['cname'];
 $category_select=$_POST['scategory'];
 $category_img=$_POST['cimg'];

 $file_name=$_FILES['cimg'] ['name'];
 $file_tmp=$_FILES['cimg'] ['tmp_name'];
 move_uploaded_file($file_tmp,"Category_pic/". $file_name);
 

 $sql2="INSERT INTO `categories`(`Category_Name`, `Category_Image`, `SelectCategory`) VALUES (' $category_name','Category_pic/$file_name',' $category_select')";
 $result2 = $con->query($sql2);

 if ($result2 == TRUE) {

   echo '<script>alert("Category Inserted")</script>';
     header('location:admin_category.php');

   }else{

     echo "Error:". $sql2 . "<br>". $con->error;

   } 
