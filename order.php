<?php

session_start();
if(!isset($_SESSION['email'])){
  header('location:Login/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>YourLifestyle CheckOut</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image" href="common/yllogo.png">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
  


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="order_backend.php" method="POST">
      
      <!-- php for call data -->

      <?php
            $user_id=$_SESSION['user_id'];
                include "db.php";
                $query = " SELECT * FROM `users` WHERE id = $user_id ;";
                $sql = mysqli_query($con, $query);
                $item = mysqli_fetch_array($sql)

            ?>

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> FullName</label>
            <input type="text" id="fname" name="firstname" value="<?php echo $item['username']; ?>" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $item['email']; ?>" required>
            <label for="email"><i class="fa fa-phone"></i> Phone Number</label>
            <input type="text" id="phone" name="phone" value="<?php echo $item['phone']; ?>" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" value="<?php echo $item['Address']; ?>" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" value="<?php echo $item['City']; ?>" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" value="<?php echo $item['State']; ?>" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Pin No.</label>
                <input type="text" id="zip" name="pin" value="<?php echo $item['Pin']; ?>" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
          <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
      
      <?php
require_once "db.php";
 
$user_id=$_SESSION['user_id'];
$query = " SELECT name FROM `cart` WHERE user_id='$user_id';";

    $sql = mysqli_query($con, $query);

    $num = mysqli_num_rows($sql);
    ?>
    <h3 align="center">Your Cart Item Is <strong style="color:red;"> <?php echo $num ?></strong></h3>
    <?php
    
    if($num > 0){
        while($item = mysqli_fetch_array($sql)){
        
          echo"
          <p>$item[name] </P>
          ";
        }
      }
      ?>
      

      <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label>
          <input type="radio" checked="checked" name="pay_mod" value="COD"> Cash On Delivery
        </label>
    </div>
        </div>
          
        </div>
        
        <input type="submit" value="Place Order" name="purchase"class="btn">
      </form>
    </div>
  </div>
</div>

</body>
</html>