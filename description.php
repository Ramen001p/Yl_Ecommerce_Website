<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
 $id = $_GET['id'];
 $_SESSION['product_id'] = $_GET['id'];
 $category_select = $_GET['category_select'];
 $_SESSION['category_select']=$_GET['category_select'];
include('db.php');  
$query = "SELECT * FROM products WHERE category='$category_select' AND id=$id;";
$sql = mysqli_query($con, $query);
$item = mysqli_fetch_array($sql);
$num = $item['quantity'] ;



//if Product  not Available

if($num==0){
  $qnty_status= "OOPS! Product is unavailable";
  ?>
  <body>
  <link rel="stylesheet" href="description.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://kit.fontawesome.com/a4948164db.js" crossorigin="anonymous"></script>

    

  <div class="row">
    <div class="column left">
      <div class="product">
        <div class="product_small">
          <img src="<?php echo $item['image']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image1']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image2']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image3']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image4']?>" onclick="myfunction(this)">
        </div>
        <div class="imgcontainer">
        
          <img  src =" <?php echo $item['image']?>" id="imageBox">
        </div>
      </div>
      
      <script>
        function myfunction(smallImg)
        {
              var fullImg=document.getElementById("imageBox");
              fullImg.src=smallImg.src;
            }
      </script>
    </div>


    <div class="column right" >
      
      <h4 style="color: grey;"><?php echo $item['description']?></h4>
      <p style="font-size: 20px;"><span class="label label-success">4.1 <span class="fas fa-star"></span></span></p>
      <p style="font-size: 20px; color:red;"><?php echo $qnty_status ?>
      <hr style="border:2px solid #f1f1f1">


      <s style="color: rgb(150, 146, 146);"><p style="font-size: 30px;"><b>Rs. <?php echo $item['price']?></b></s> </p>

      <p style="font-size: 18px;color:#49a749;">inclusive of all taxes</p><br>

      
      <!------Add to Cart Button------>
        <div class="addcart_button">
          <button class="cart-button" name="Add_To_Cart">
            <span class="add-to-cart">Out Of Stock</span>
          </button>

      
      <br><br>


      <div>
        <p>100% Original Products</p>
        <p>Pay on delivery might be available</p>
        <p>Easy 30 days returns and exchanges</p>
      </div>
        
      <br>


      <h3>Product Details <i class="fas fa-file-alt"></i></h3>
      <p><?php echo $item['details']?></p>
      <br>
      <h3>Size & Fit</h3>  
      <p><?php echo $item['size_fit']?></p>
      <br>
      <h3>Material & Care</h3>
      <p><?php echo $item['material_care']?></p>
      <br>
  <?php
}




//if Product Available




else{
  if($num<5){
    $qnty_status= "Only " .$num . " item left";
  }
  else{
    $qnty_status="";
  }

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="description.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://kit.fontawesome.com/a4948164db.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image" href="common/yllogo.png">
    <title>Buy <?php echo $item['product_name']; echo ' '; echo $item['description'];?></title>
</head>
<body>

<div class="header">
  <?php
  
  include('common/header.php') ?>
</div>


      <?php echo $_SESSION['msg'] ; 
      unset($_SESSION['msg']);
      ?>
  

  <div class="row">
    <div class="column left">
      <div class="product">
        <div class="product_small">
          <img src="<?php echo $item['image']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image1']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image2']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image3']?>" onclick="myfunction(this)">
          <img src="<?php echo $item['image4']?>" onclick="myfunction(this)">
        </div>
        <div class="imgcontainer">
        
          <img  src =" <?php echo $item['image']?>" id="imageBox">
        </div>
      </div>
      
      <script>
        function myfunction(smallImg)
        {
              var fullImg=document.getElementById("imageBox");
              fullImg.src=smallImg.src;
            }
      </script>
    </div>


    <div class="column right" >
      <form action="mycart.php" method="POST">
      <h1><?php echo $item['product_name']?>
            <input type="hidden" name="name" value="<?php echo $item['product_name']?>">
            <input type="hidden" name="image" value="<?php echo $item['image']?>">
            <input type="hidden" name="p_id" value="<?php echo $item['id']?>">
            <input type="hidden" name="sellerId" value="<?php echo $item['s_id']?>">
    </h1>
      <h4 style="color: grey;"><?php echo $item['description']?></h4>
      <p style="font-size: 20px;"><span class="label label-success">4.1 <span class="fas fa-star"></span></span></p>
      <p style="font-size: 20px; color:red;"><?php echo $qnty_status ?>
      <hr style="border:2px solid #f1f1f1">


      <p style="font-size: 30px;"><b>Rs. <?php echo $item['price']?></b><input type="hidden" name="price" value="<?php echo $item['price']?>"> <s style="color: rgb(150, 146, 146);"><?php echo $item['off_price']?></s> <b style="color: #f38f0c;"><?php echo $item['discount_off']?></b></p>

      <p style="font-size: 18px;color:#49a749;">inclusive of all taxes</p><br>

      
      <!------Add to Cart Button------>
        <div class="addcart_button">
          <button class="cart-button" name="Add_To_Cart">
            <span class="add-to-cart">Add to cart</span>
            <span class="added">Added</span>
            <i class="fas fa-shopping-cart"></i>
            <i class="fas fa-box"></i>
          </button>

        <script>
          const cartButtons = document.querySelectorAll('.cart-button');

          cartButtons.forEach(button => {
            button.addEventListener('click', cartClick);
          });

          function cartClick() {
            let button = this;
            button.classList.add('clicked');
          }
        </script>
      </div>
      </form>
      
      <br><br>

      <div class="row " id="delivery-location">
        <div class="col-xs-3">
          <p style="font-size: 19px;"><b>Delivery <i class="fas fa-truck"></i></b></p>
        </div>
        <div class=" row col-xs-4" style="border:0px;border-bottom:1px solid #2874f0;position:relative; left:1%;" >
        <h5>Delivery in 3-4 days | <a href="" style="color:green;text-decoration:none;">Free</a></h5>
        </div>    
      </div>
      <div id="delivery-time" style="position:relative;left:27%;">
        </div>
       
       <br>

      <div>
        <p>100% Original Products</p>
        <p>Pay on delivery might be available</p>
        <p>Easy 30 days returns and exchanges</p>
      </div>
        
      <br>

      <h3>EMI and Offers <i class="fas fa-tag"></i></h3>
      <div class="offer">        
        <h5><span class="glyphicon glyphicon-calendar"></span> EMIs from <strong>Rs 3,070/month </strong><a href="">View Plans <i class="fa fa-chevron-right"></i></a></h5>  
        <h5><span class="glyphicon glyphicon-tag"></span><strong> Bank Offer</strong> 5% Instant Discount on Visa Cards for First 3 Online Payments. <a href="">T&C</a></h5>      
        <h5><span class="glyphicon glyphicon-tag"></span><strong> Bank Offer</strong> Extra 5% off* with Axis Bank Buzz Credit Card. <a href="">T&C</a></h5>
      </div><br>

      <hr style="border:2px solid #f1f1f1">

      <h3>Product Details <i class="fas fa-file-alt"></i></h3>
      <p><?php echo $item['details']?></p>
      <br>
      <h3>Size & Fit</h3>  
      <p><?php echo $item['size_fit']?></p>
      <br>
      <h3>Material & Care</h3>
      <p><?php echo $item['material_care']?></p>
      <br>
    </div>
  </div>


<hr style="border:2px solid #f1f1f1">


<style>
  .popup .overlay{
    position: fixed;
    top:0px;
    left:0px;
    width:100vw;
    height:100vh;
    background:rgba(0,0,0,0.7);
    z-index: 1;
    display: none;

  }
  .popup .content {
    position: absolute;
    top:25%;
    left:50%;
    
    transform:translate(-50%,-50%) scale(0);
    background:#fff;
    width: 470px;
    height: 400px;
    border-radius:20px;
    z-index: 2;
    text-align:center;
    padding: 20px;
    
    box-sizing:border-box;
  }
  .popup .close-btn{
    cursor:pointer;
    position: absolute;
    right: 20px;
    top: 20px;
    width: 30px;
    height: 30px;
    background:#222;
    color:white;
    font-size:25px;
    font-weight:600;
    line-height:30px;
    text-align:center;
    border-radius:50%;
  }

   .popup.active .overlay{
    display:block;
  } 
  .popup.active .content{
    transition:all 300ms ease-in-out;
    transform:translate(-50%,-100%) scale(1);
    
  } 
</style>

<div class="r_heading" style="border: 1px solid grey; padding: 10px; height: 100px; width:80%; position:relative; left:8%;"  >
  <h3 style="font-size:20px; padding-left:50px;">
   <b> Rating & Reviews</b>
  </h3>
        <div class="r_button" style="text-align:right; padding-right:50px;">
        <button style=" height: 50px; width: 150px; background:#4CAF50; color:white; border:none; border-radius:5px; cursor:pointer;font-size:20px; letter-spacing:5px;position:relative; bottom:25px;" onclick="togglePopup()">Review</button>
        </div>  
            <div class="popup" id="popup-1">
            <div class="overlay"></div>
            <div class="content">
                    <div class="close-btn" onclick="togglePopup()">&times;</div>
                
                        <h1>
                            Reviews & Ratings <i class="fa-thin fa-clothes-hanger"></i>
                        </h1>
                        <br>
                        <!-- php part -->
                        <br>
                      
                    <form action="rating_backend.php" method="post">
                        <label for="ratings" style="font-size: 25px;">Choose Your Ratings :</label>
                        <select class="form-control" name="chooseStar"  style="height: 50px;font-size: 12px;"  required>
                          <option value="Worst" class="h4">Worst</option>
                          <option value="Bad" class="h4">Bad</option>
                          <option value="Good" class="h4">Good</option>
                          <option value="VeryGood" class="h4">Very Good</option>
                          <option value="Fantastic" class="h4">Fantastic</option>
                        </select>
                        <br><br>
                        <textarea name="review" class="form-control" cols="50" rows="5" placeholder="Enter Your Review Here......" style="font-size: 12px;"></textarea>
                       <br><br>
                        <div class="text-right" >
                          <input type="submit" name="r_submit" class="btn btn-success btn-lg" value="Submit" style="height: 50px;width: 100px;">
                        </div>
                    </form>     

                
                    </div>
                </div>
            </div>

            <script>
            function togglePopup(){
                document.getElementById("popup-1").classList.toggle("active");
            }

            </script>
</div>


<?php
            $p_id = $_SESSION['product_id'];
            $q3="SELECT * from review_table WHERE  product_id = $p_id";
            $l3=mysqli_query($con,$q3);
            $n = mysqli_num_rows($l3);
          

            
          while($i = mysqli_fetch_array($l3)){
            if($i['user_rating'] == 'Worst'){
              $_SESSION['star']="<i class='fas fa-star'></i>";
            }if($i['user_rating'] == 'Bad'){
              $_SESSION['star']="<i class='fas fa-star'></i><i class='fas fa-star'></i>";
            }if($i['user_rating'] == 'Good'){
              $_SESSION['star']="<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>";
            }if($i['user_rating'] == 'VeryGood'){
              $_SESSION['star']=" <i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>";
            }if($i['user_rating'] == 'Fantastic'){
              $_SESSION['star']="<i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i>";
            }
?>
<div class="reviews" style="border:1px solid grey;padding: 8px; width:80%; position:relative; left:8%;">
    <div><img src="images/user.png" alt="" style="height:50;width: 40px;">  <span style="position:relative; bottom:5px;font-size:15px;"><?php echo $i['user_name'];?></span></div>
    <p style="position:relative; left:5%;bottom: 10px;"><?php echo $_SESSION['star']; ?></p>
    <p style= " font-size:20px; position:relative;bottom: 10px;"><?php echo $i['user_review']; ?></p>
</div>
<br><br>

<?php }
        }
?>
</body>
</html>