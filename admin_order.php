
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
include "admin_header.php"; ?>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="shortcut icon" type="image" href="common/pic.png">
    <title>Orders</title>
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

        .container{
            padding-top: 50px;
        }
    
        .heading h1{
            height:50px;
            width: 70%;
            background:#fff;
            padding: 5px;
            border:2px solid black;
            position:absolute;
           left: 25%;
            text-align:center;
            letter-spacing:5px;
        }
        .table{
            padding: 15px;
            position: absolute;
            top:15%;
            left:30%;
            text-align:center;
        }
        .table table th{
            
            padding: 20px;
        }
       .endPart{
        text-align:right;
        padding: 10px;
        letter-spacing:2px;
        line-height:30px;
       }
       hr{
        height: 3px;
        background:black;
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
  label{
    font-size:26px;
  }
    </style>
</head>
<body>
    
                    <?php
                    
                    $s_id=$_SESSION['admin_id'];

                require_once "db.php";
                $sub_total=0;
                $grand_total=0;
                $query = " SELECT * FROM `user_order` WHERE s_id=$s_id;";

                    $sql = mysqli_query($con, $query);
                
                    $num = mysqli_num_rows($sql);
                    
                    if($num > 0){
                        ?>

<div class="container">
        
            <div class="heading">
                <h1>Orders</h1>
            </div>
            <br>
            <br>
            <div class="table">
                <table>
            
                    <tr>
                        
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Check Address</th>
                        <th scope="col">Delivery Status</th>
                        
                    </tr>
              
                
                        <?php


                        while($item = mysqli_fetch_array($sql)){

                        ?>
                        <tr>
                        <td><img src ='<?php echo $item['image'];?>' style='height: 100px; width: 90px;' class='img-fluid rounded'></td>
                        <td><?php echo $item['name'];?></td>
                        <td><?php echo $item['quantity'];?></td>
                        <td>
                            <?php echo $sub_total = ($item['quantity'] * $item['price']); ?>/-
                        </td>

                        <div class="deliveryStatus">
                        <td><button style="height: 50px; width: 100px; background:#4CAF50; color:white; border:none; border-radius:5px;"><a href="admin_customerDetails.php?id_select=<?php echo $item['User_id']?>" style="color:white;" >
                        Check</a></button></td>
        
                       <div class="deliveryStatus">
                        <td><button onclick="return confirm(Are you sure item is deliverd? ?)" style="height: 50px; width: 100px; background:#4CAF50; color:white; border:none; border-radius:5px;"><a href="admin_orderStatus.php?id_select=<?php echo $item['id']?>& s_id= <?php echo $item['s_id']?>& user_id= <?php echo $item['User_id']?>& p_id= <?php echo $item['product_id']?>& p_img= <?php echo $item['image']?> & p_name= <?php echo $item['name']?> & p_price= <?php echo $item['price']?>" style="color:white;" >
                        Done</a></button></td>
                    </div>
                       
                        </tr>
            </div>              
            <?php
            $grand_total += $sub_total;
         
                   };
               ?>
</table>
<br>
            <hr>
                <div class="endPart">
                    <h3>Total Item : <?php echo $num ?> </h4>
                    <h3> Total <i class="fa-solid fa-rupee-sign"></i> : <?php echo $grand_total    ?></span></h5>
                    <br>
                </div>
            
        
    </div>
<?php
} else{
    ?>
    <div align="center" style="position:absolute;top:30%;left:50%"> <img src="emptyOrder.png" alt="" style="height: 100px; width: 90px; position:relative;top:50%;"> <br>
    <h3> <b>NO ORDER FOUND :(</b></h3> <br>
    <p>Look like you don't have any order today:(</p>
</div>

<?php
}
?>



    
</body>
</html>