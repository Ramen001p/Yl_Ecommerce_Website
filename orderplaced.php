<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="shortcut icon" type="image" href="common/pic.png">
    <title>Order_Placed</title>
    <style>
        body {
    background-color: #eee
}

.card {
    background-color: #fff;
    width: 300px;
    border: none;
    border-radius: 16px
}

.info {
    line-height: 19px
}

.name {
    color: #4c40e0;
    font-size: 18px;
    font-weight: 600
}

.order {
    font-size: 14px;
    font-weight: 400;
    color: #b7b5b5
}

.detail {
    line-height: 19px
}

.summery {
    color: #d2cfcf;
    font-weight: 400;
    font-size: 13px
}
.text {
    line-height: 15px
}

.new {
    color: #000;
    font-size: 14px;
    font-weight: 600
}

.money {
    font-size: 14px;
    font-weight: 500
}

.address {
    color: #d2cfcf;
    font-weight: 500;
    font-size: 14px
}

.last {
    font-size: 10px;
    font-weight: 500
}

.address-line {
    color: #4C40E0;
    font-size: 11px;
    font-weight: 700
}
    </style>
</head>
<body>
<div class="info text-center text-danger mt-5 font-weight-bold" style="letter-spacing: 2px; font-size:20px;">  Your Order Is Placed :)</div>
    <?php
    require_once "db.php";
    session_start();
    $user_id=$_SESSION['user_id'];

$query = " SELECT * FROM users WHERE id = $user_id";

$sql = mysqli_query($con, $query);

$num = mysqli_num_rows($sql);

if($num > 0){
    while($item = mysqli_fetch_array($sql)){

        ?>
    
    <div class="container  d-flex justify-content-center">
    <div class="card p-4 mt-3">
        <div class="first d-flex justify-content-between align-items-center mb-3">
            
            <div class="info"> <span class="d-block name mt-1">Thank you, <br> <?php echo $item['billing_name'];?></span> </div> <img src="https://i.imgur.com/NiAVkEw.png" width="40" />
        </div>
        
        <div class="detail"> <span class="d-block summery">Your order has been dispatched. we are delivering you order.</span> </div>
        <hr>
        <div class="text"> <span class="d-block new mb-1"><?php echo $item['billing_name'];?></span> </div> <span class="d-block address mb-3"><?php echo $item['Address']; echo"<br>"; echo $item['City']; echo"<br>"; echo $item['State']; echo ","; echo $item['Pin'];?></span>
        <div class=" money d-flex flex-row mt-2 align-items-center"> <img src="https://i.imgur.com/ppwgjMU.png" width="20" /> <span class="ml-2">Cash on Delivery</span> </div>
        
    </div>
    <?php 
        }
    }
    ?>
</div>
<div class="pt-5">
<center>
    <a href="Home.php">
<button type="button" class="btn btn-outline-primary  btn-lg">Home</button></div></a>
</center>
</body>
</html>