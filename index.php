<?php
include "admin_header.php";
include "admin_headerTop.php";
if(!isset($_SESSION['admin_email'])){
  header('location:admin/admin_login/index.php');
}
?>

    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }
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
    top:50%;
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
    transform:translate(-50%,-50%) scale(1);
    
  } 

    </style>
        <div class="clear"></div>
        <div class="main-content-info container">
            <div class="card">
                <?php 
                require_once "db.php";
	
                $query = " SELECT * FROM `users`";
            
                $sql = mysqli_query($con, $query);
             
                $num = mysqli_num_rows($sql);
                ?>
                <h2 class="cus-num cus-h"><?php echo $num; ?></h2>
                <p>Customers</p>
            </div>
            <div class="card">
            <?php 
                require_once "db.php";
                $s_id=$_SESSION['admin_id'];
                $query = " SELECT * FROM `products`WHERE s_id=$s_id;";
            
                $sql = mysqli_query($con, $query);
             
                $num = mysqli_num_rows($sql);
                ?>
                <h2 class="cus-num cus-pro"><?php echo $num; ?></h2>
                <p>Products</p>
            </div>
            <div class="card">
            <?php 
                require_once "db.php";
                $s_id=$_SESSION['admin_id'];
	
                $query = " SELECT * FROM `user_order`WHERE s_id=$s_id";
            
                $sql = mysqli_query($con, $query);
             
                $num = mysqli_num_rows($sql);
                ?>
                <h2 class="cus-num cus-ord"><?php echo $num; ?></h2>
                <p>Order</p>
            </div>
            <div class="card">
            <?php 
                require_once "db.php";
                $s_id=$_SESSION['admin_id'];
                $total=0;
                $query = " SELECT total_price FROM `deliverd_order`WHERE s_id=$s_id";
                $sql = mysqli_query($con, $query);
                $num = mysqli_num_rows($sql);
               while( $row = mysqli_fetch_array($sql)){
                
            $total +=$row['total_price'];}
                ?>
                <h2 class="cus-num cus-inc"><?php echo $total; ?></h2>
                <p>Income</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content-pro-par container">
            <div class="pro-table">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2> Products</h2>
                    </div>
        <br>
                </div>
                <table style="width:100%">
                <tr>
                        <th>Product </th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>
                <?php

                          
                             require_once "db.php";
	
                             $query = " SELECT * FROM `products` ORDER BY id DESC LIMIT 4;";
                         
                             $sql = mysqli_query($con, $query);
                          
                             $num = mysqli_num_rows($sql);
                             
                             if($num > 0){
                                 while($item = mysqli_fetch_array($sql)){
                                    $img=$item['image']; 
                            
                ?>
                   
                    <tr>
                    <td><?php  echo "<img src='$img' style='height: 100px; width: 90px;'>";?></td>
                    <td><?php echo $item['product_name'];?></td>
                        <td><span >&#8377;</span><?php echo $item['price'];  ?></td>
                    </tr>

                    <?php		
                    }
                }
                ?>
                   
                </table>
            </div>
            <div class="pro-cus">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>All Customers</h2>
                    </div>
                    <br>
              
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Pic</th>
                        <th>Name</th>
                        <th>Address</th>
                    </tr>
                <?php
                $query = " SELECT * FROM `users`";
                         
                             $sql = mysqli_query($con, $query);
                          
                             $num = mysqli_num_rows($sql);
                             
                             if($num > 0){
                                 while($item = mysqli_fetch_array($sql)){
                                    
                            
                ?>
               
               <tr>
                        <td><img class="table-img" src="images/user.png"/></td>
                        <td><?php echo $item['username'];  ?></td>
                        <td class="cnt-info-td"><a href="mailto: <?php  echo $item['email'];   ?>"><i class="fa fa-envelope"></i></a> <a href="tel:+<?php  echo $item['phone'];   ?>"><i class="fas fa-phone-alt"></i></a></td>
                    </tr>

                    </tr>
                   <?php
                                 }
                                }
                    ?>
                    
                </table>
            </div>
            <div class="clear"></div>
        </div>
    </Section>
    <div class="clear"></div>




    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/external.js"></script>
</body>

</html>

