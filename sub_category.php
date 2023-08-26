<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/6686d476a9.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="category_style.css">
	<link rel="shortcut icon" type="image" href="common/yllogo.png">
	<title>Online Shopping for <?php $title_sub= $_GET['title_sub']; echo $title_sub; ?> </title>
</head>
<body>

<div class="header">
	<?php include('common/header.php') ?>
</div>
<br>
<p style="font-size:30px; color:blue;"  align="center">Shop for <?php $title_sub= $_GET['title_sub']; echo $title_sub; ?> <i class="fas fa-shopping-bag"></i></i></p>

	<div class="product-grid">

	<?php

	require_once "db.php";
	$category_select = $_GET['category_select'];
	
    $query = " SELECT * FROM `products` WHERE category ='$category_select';";

    $sql = mysqli_query($con, $query);
 
    $num = mysqli_num_rows($sql);
	
    if($num > 0){
        while($item = mysqli_fetch_array($sql)){
			
			$id=$item['id'];
			$s_id=$item['s_id'];
			$user_id=$_SESSION['user_id'];
         
    ?>
		<div class="product_box" >
			

			<?php
			echo '<a href="description.php?id='. $id .'&category_select='.$category_select.'& user_id='.$user_id.'"><img src='.$item['image'].'></a>';
			?>

			<p align="center" style="color:crimson;font-size:22px;padding-top:10px"> <?php echo $item['product_name'];?> &nbsp;
			<mark style="color:green;font-size:15px;">4.1 <i class="fa fa-star"> </i></mark></p>

			<P style="font-size:13px; color:black; opacity: 0.7; text-align:center;"><?php echo $item['description'];  ?></P>
			<p style="font-size:22px;text-align:center;">Rs. <?php echo $item['price'];  ?></p>

			<?php
			if($item['quantity']==0){
				?>
			
				<input type="submit" name="Out Of Stock"class="btn btn-danger  form-control" value="Out Of Stock" style="text-align=center";><br><br>
			<?php

			}
			else{
				?>
				<form action="mycart.php" method="post">
				<input type="hidden"name="p_id" value='<?php echo $id;?>'>
				<input type="hidden" name="sellerId" value='<?php echo $s_id;?>'>
				<input type="hidden" name="image" value="<?php echo $item['image'];?>" >
				<input type="hidden" name="name" value="<?php echo $item['product_name'];?>" >
				<input type="hidden" name="price" value="<?php echo $item['price'];  ?>" >
			
					<input type="submit" name="Add_To_Cart"class="btn btn-dark  form-control" value="Add to Cart" style="text-align=center";><br><br>
			

				<?php
				

			}

			?>
		
			</form>
		</div>
	
	<?php		
		}
	}
	?>
	 </div>

	 <div class="footer">
  		<?php include('common/footer.php') ?>
	</div>

</body>
</html>