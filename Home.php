<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="common/yllogo.png">
    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/6686d476a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <title>YourLifestyle Home</title>
    <style>
      .product-grid{
			padding:20px 20px;
			display:grid;
			grid-template-columns: 1fr 1fr 1fr 1fr ;
			gap:50px;
		}
    </style>
    
</head>
<body>
  
<div class="header">
  <?php include('common/header.php') ?>
</div>

      <marquee behavior="scroll" direction="right" scrollamount="20">Big Billion Day Sale Live Now</marquee>
      <main>
  <!-- Baner -->
  
  <div id="slider">
    <figure>
        <a href="sub_category.php?category_select=women_category&title_sub=Women"><img src="banner/imgbn1.jpg"style="height:530px;"></a>
        <a href="sub_category.php?category_select=men_category&title_sub=Men"><img src="banner/imgbn2.jpg"style="height:530px;"></a>
        <a href="sub_category.php?category_select=shoes_category&title_sub=Footwear"><img src="banner/imgbn3.jpg"style="height:530px;"></a>
    </figure>
</div>
<br>

<div class="sale">
  <table border="0" align="center" background="banner/off.jpg">
    <tr>
      <td style="font-size:25px; padding-left:630px; padding-right:630px; padding-top:25px; padding-bottom:25px;">Sale is on </td>
    </tr>
  </table>
</div>
</main>
<br><br>

<div class="featured_img">
<b><h3>Our Featured</h3></b>
<div class="product-grid">
  <?php

                          
require_once "db.php";

$query = " SELECT * FROM `products` WHERE category='men_category' ORDER BY RAND ( ) LIMIT 4;";

$sql = mysqli_query($con, $query);

$num = mysqli_num_rows($sql);

if($num > 0){
    while($item = mysqli_fetch_array($sql)){
      $id=$item['id'];
			$s_id=$item['s_id'];
			$user_id=$_SESSION['user_id'];
       $img=$item['image']; 
       $category_select=$item['category'];

?>
     <div class="product_box" ><a href="description.php?id=<?php  echo $id; ?>&category_select=<?php echo $category_select;?>&user_id=<?php echo $user_id;?>"><img src=<?php echo $img; ?> alt=""></a></div>
   
   
   
<?php
    }
  }
?>
</div>
</div>



<section class="banner">
<img src="product/nike.jpg" alt="shoes" srcset="" align="left"style=" height: 400px;width: 50%;padding: 10px;">
</section>

<section class="ad" align="right">
  <video height="400px" width="50%" loop="true" autoplay="true" muted >
  <source src="banner/shoead.mp4" type="video/mp4" />
  </video>
</section>
<br>

<div class="featured_img">
<b><h3>Footwears For You</h3></b>
<div class="product-grid">
  <?php

                          
require_once "db.php";

$query = " SELECT * FROM `products` WHERE category='shoe_category' ORDER BY RAND ( ) LIMIT 4;";

$sql = mysqli_query($con, $query);

$num = mysqli_num_rows($sql);

if($num > 0){
    while($item = mysqli_fetch_array($sql)){
      $id=$item['id'];
			$s_id=$item['s_id'];
			$user_id=$_SESSION['user_id'];
       $img=$item['image']; 
       $category_select=$item['category'];

?>
     <div class="product_box" ><a href="description.php?id=<?php  echo $id; ?>&category_select=<?php echo $category_select;?>&user_id=<?php echo $user_id;?>"><img src=<?php echo $img; ?> alt=""></a></div>
   
   
   
<?php
    }
  }
?>
</div>
</div>



<div class="footer">
  <?php include('common/footer.php') ?>
</div>

  </body>
  </html>