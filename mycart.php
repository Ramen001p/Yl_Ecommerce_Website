<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" type="image" href="common/yllogo.png">




    <link rel="shortcut icon" type="image" href="common/pic.png">
    <title>YourLifestyle MyCart</title>
    <style>
          body{
            animation: changeBg 10s linear infinite;
            background-color:#fff
        }
        @keyframes changeBg{
            0%{
                background-color:#F8EAE6 ;
            }
            10%{
                background-color:#FEF8E9 ;
            }
            20%{
                background-color:#FDFEE9 ;
            }
            30%{
                background-color:#ECFFC5 ;
            }
            40%{
                background-color:#CEFAE6 ;
            }
            50%{
                background-color:#D9FBF3 ;
            }
            60%{
                background-color:#D9FAFB ;
            }
            70%{
                background-color:#D9EEFB ;
            }
            80%{
                background-color:#EBD9FB ;
            }
            90%{
                background-color:#FBD9FA ;
            }
        }
    </style>
</head>
<body>
    
    
                    <?php
                    
                    $user_id=$_SESSION['user_id'];
                

                if(isset($_POST['Add_To_Cart'])){
                    require_once "db.php";
                    $p_name = $_POST['name'];
                    $p_img=$_POST['image'];
                    $p_price=$_POST['price'];
                    $s_id=$_POST['sellerId'];
                    $p_id=$_POST['p_id'];
                

                    $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE name ='$p_name' AND user_id='$user_id'" ) or die('query failed');
                    if(mysqli_num_rows($select_cart) > 0){
                        echo "<script>
                        alert('Product Already Added To Cart!');
                        </script>";
                    }else{
                        mysqli_query($con,"INSERT INTO `cart`(`user_id`, `s_id`,`product_id`, `name`, `price`, `image`, `quantity`) VALUES ('$user_id','$s_id','$p_id','$p_name','$p_price','$p_img','1')") or die('query failed');
                        echo "<script>
                        alert('Product Added To Cart!');
                        </script>";
                    }
                }
                require_once "db.php";
                $sub_total=0;
                $grand_total=0;
                $query = " SELECT * FROM `cart` WHERE user_id='$user_id';";

                    $sql = mysqli_query($con, $query);
                
                    $num = mysqli_num_rows($sql);
                    
                    if($num > 0){
                            ?>
        <div class="container">
        
                    <?php echo $_SESSION['check'] ; 
                     unset($_SESSION['check']);
                    ?>
         
                <div class="row">
                
                    <div class="col-lg-12 text-center border rounded bg-light my-5">
                        <h1>My Cart</h1>
                    </div>
                   
                    <div class="col-lg-12 text-right">
                        <button class="btn btn-primary text-secondary"><a href="Category.php" style="color:white;"><i class="fa fa-plus">Shop More</i></a></button>
                    </div>
                    <br>
                    <br>
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                                
                                <th scope="col">Product Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Update</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                        <?php
                        while($item = mysqli_fetch_array($sql)){
                            
                           $id=  $item['id'];
                        ?>
                        <tr>
                        <td><img src ='<?php echo $item['image'];?>' style='height: 100px; width: 90px;' class='img-fluid rounded'></td>
                        <td><?php echo $item['name'];?></td>
                        <td><?php echo $item['price'];?></td>
                        <td>
                        <form method='post' action="InsertCart.php">
                        <input type='hidden'  name='cart_id' value='<?php echo $item['id'];?>'>
                        <input type="hidden" name='p_id' value='<?php echo $item['product_id'];?>'>
                        <input type="number" min="1" name="cart_qnty" value='<?php echo $item['quantity'];?>' class="form-control"></td>
                        
                        <td>
                            <?php echo $sub_total = ($item['quantity'] * $item['price']); ?>/-
                        </td>
                        <td>
                        <input type='submit' name='update_cart' value='Update' class='btn btn-warning'>
                        </td>
                       </form> 
                        <td>
                        <a href="deleteProduct.php?id_select=<?php echo $id;?>" class="btn btn-danger" onclick="return confirm(Remove item from the cart ?)">Remove</a> 
                        </td>
                        </tr>
                        
            <?php
            $grand_total += $sub_total;
        
                   };
            ?>


            
               
  </tbody>
</table>
            </div>

            <div class="col-lg-12 text-right">
                <div class="border bg-light rounded p-4">
                    <h4>Total Item : <?php echo $num ?> </h4>
                    <h5> Total <i class="fa-solid fa-rupee-sign"></i> : <?php echo $grand_total    ?></span></h5>
                    <br>
                    <form action="order.php" method=POST>
                    <button class="btn btn-primary btn-block" name="place_order">
                            CheckOut
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php

}else{
    ?>
    <div class="header">
  <?php include('common/header.php') ?>
</div>
    <div align="center"> <img src="emptyCart.png" alt="" style="height: 400px; width: 50%;"> <br>
    <h3> <b> Cart is empty :(</b></h3> <br>
    <p>Look like you have no items in your shopping cart. <br> Click <a href="Category.php">here</a> to continue shopping.</p>
</div>

<?php
}
?>
    
</body>
</html>