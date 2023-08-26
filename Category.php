<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/6686d476a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="shortcut icon" type="image" href="common/yllogo.png">
    <title>YourLifestyle Category</title>
    
    <style>
      
        .coumn {
          float: left;
          width: 25%;
          padding: 12px;
          box-sizing: border-box;
          font-size: 24px;
          text-align: center;
          letter-spacing:10px;
          line-height: 2;
        }
        
        /* Clearfix (clear floats) */
        .row::after {
          content: "";
          clear: both;
          display: table;
          box-sizing: border-box;
        }

        .coumn:hover{
          box-shadow: 10px 10px 10px 10px grey;
        }
        
        .footer{
          margin-top:600px;]
        }
        
        h2{
          padding-left:18px;
          font-weight: bold;
        }


        </style>
</head>
<body>
  
<div class="header">
  <?php include('common/header.php') ?>
</div>

<h2>Shop by category <i class="fas fa-clipboard-list"></i></h2>
<br>

<!--coloum=coumn-->

  <?php

	require_once "db.php";
	
    $query = " SELECT * FROM `categories`;";

    $sql = mysqli_query($con, $query);
 
    $num = mysqli_num_rows($sql);
	
    if($num > 0){
        while($item = mysqli_fetch_array($sql)){
          $selectcategory= $item['SelectCategory'];
			
			
         
    ?>


<div class="category">
  <div class="coumn">
  <a href="sub_category.php?category_select=<?php echo $selectcategory?>&title_sub=<?php echo $item['Category_Name']; ?>"><img src="<?php echo $item['Category_Image']; ?>" style="height:480px; width:100%;"></a>
      <?php echo $item['Category_Name']; ?>
  </div>

  <?php

        }
    }
?>
</div>

<br>
<br><br><br>


      
</body>
</html>