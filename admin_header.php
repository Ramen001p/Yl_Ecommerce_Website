<?php 


session_start();
if(!isset($_SESSION['admin_email'])){
  header('location:admin/admin_login/index.php');
}

$email=$_SESSION['admin_email'];
require_once('db.php');
$query= "SELECT * FROM `admin_users` WHERE email='$email'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$_SESSION['admin_id'] = $row['s_id'];
$_SESSION['username'] = $row['username'];
// echo $_SESSION['admin_id'];
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/style2.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="shortcut icon" type="image" href="common/yllogo.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/a4948164db.js" crossorigin="anonymous"></script>


</head>

<body>
<section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fa fa-desktop"></i> <span>A - Z</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="index.php?section=Dashboard"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
                <li><a href="admin_category.php?section='Category'"><i class="fa fa-cc"></i> <span>Category</span></a></li>
                 <li><a href="admin_Addproducts.php?section='Add Products'"><i class="fa fa-plus-square-o"></i> <span>Add Products</span></a></li>
                 <li><a href="admin_Allproducts.php?section='All Products'"><i class="fa fa-product-hunt"></i> <span>All Product</span></a></li>
                <li><a href="admin_order.php"><i class="fa fa-truck" aria-hidden="true"></i> <span>Orders</span></a></li>
                <li><a href="admin/admin_login/logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
            </ul>
        </div>
    </section>

    