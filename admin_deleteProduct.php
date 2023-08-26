
<?php
require_once('db.php');
$id=$_GET['id_select'];

$q = "DELETE FROM `products` WHERE id = $id";
mysqli_query($con,$q);
header('location:admin_allProducts.php');








?>