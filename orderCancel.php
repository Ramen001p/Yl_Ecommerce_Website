<?php
include "db.php";
$id=$_GET['id_select'];

$q = "DELETE FROM `user_order` WHERE id = $id";
mysqli_query($con,$q);
echo "<script>
window.location.href='user_account.php';

</script>";
?>