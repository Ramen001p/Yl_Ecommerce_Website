<?php include "admin_header.php";
include "admin_headerTop.php"; ?>
<br><br><br><br><br><br>
<!-- Style Part -->
<style>
	*{
		font-family: 'Raleway', sans-serif;

	}
    .product-grid{
        
    
			padding:20px 20px;
			display:grid;
			grid-template-columns: 1fr 1fr 1fr 1fr ;
			gap:50px;
		}

		img{
			width:100%;
		}

		p{
			line-height: 1.5;
		}
      
		.product_box{
			padding-top:10px;
			padding-bottom:12px;
			padding-left:20px;
			padding-right:20px;
			line-height: 0;
			box-sizing: border-box;
			gap: 10px;
			
			
		}
		.product_box:hover{
			-moz-box-shadow: 0 0 10px #ccc;
      		-webkit-box-shadow: 0 0 10px #ccc;
      		box-shadow: 0 0 10px #ccc;
		}

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 100%;
			margin: auto;
			text-align: center;
		}
		.card button {
			border: none;
			outline: 0;
			padding: 25px;
			color: white;
			background-color: #000;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}

		.card button:hover {
			opacity: 0.7;
		
		}
		
		
</style>


<!-- html & php -->

<div class="product-grid">

	<?php
	
	$seller_id=$_SESSION['admin_id'];
	require_once "db.php";
	
    $query = " SELECT * FROM `products`WHERE s_id = $seller_id;";

    $sql = mysqli_query($con, $query);
 
    $num = mysqli_num_rows($sql);
	
    if($num > 0){
        while($item = mysqli_fetch_array($sql)){
			$id=$item['id'];
    ?>
		<div class="product_box" >
			
		<div class="delete">
      <a href="admin_deleteProduct.php?id_select=<?php echo $id; ?>"><button style="color:red;float:right; border:none; cursor:pointer;" 
	  	onclick="return confirm('Are you sure you want delete this product?');">
  <i class="fa fa-minus-circle" aria-hidden="true" style="font-size:26px;"></i></button></a>
  </div>
  <div class="update">
      <a href="updateProduct.php?id_select=<?php echo $id;?>"><button style="color:#4085F5;float:left; border:none; cursor:pointer;"
	  onclick="return confirm('Do you want to update this product?');">
      <i class="fa fa-pencil-square" aria-hidden="true"style="font-size:26px;"></i></button></a>

      
  </div>
			<?php
			echo '<img src='.$item['image'].'>';
			?>

			<p align="center" style="color:crimson;font-size:22px;padding-top:10px"> <?php echo $item['product_name'];?> &nbsp;

			<P style="font-size:13px; color:black;  text-align:center;"><?php echo $item['description'];  ?></P>
			<p style="font-size:22px;text-align:center;">Rs. <?php echo $item['price'];  ?></p>
		</div>
	
	<?php		
		}
	}
	?>
	 </div>