<?php
require_once('db.php');
$id=$_GET['id_select'];

$q = "DELETE FROM `categories` WHERE id = $id";
mysqli_query($con,$q);
header('location:admin_category.php');


?>