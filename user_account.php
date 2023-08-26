<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>YourLifestyle MyAccount</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/6686d476a9.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image" href="common/yllogo.png">

    <!-- stylsheet -->

<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>

</head>
<body>
<div class="header">
  <?php include('common/header.php') ?>
</div>

            <!-- php part -->
<?php
            $user_id=$_SESSION['user_id'];
                include "db.php";
                $query = " SELECT * FROM `users` WHERE id = $user_id ;";
                $sql = mysqli_query($con, $query);
                $item = mysqli_fetch_array($sql)

            ?>


<div class="rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $item['username']  ?></span><span class="text-black-50"><?php echo $item['email']  ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex align-items-center mb-3">
                    <h4 class="text-right">Personal Information</h4>
                </div>

                <!-- form action account_backend.php -->
            <form action="account_backend.php" method="POST">

                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text"  name="name" class="form-control" placeholder="Enter your name" value="<?php echo $item['username']  ?>"></div>
                   </div>
                <div class="row mt-3">
                    <div class="col-md-12 mt-3"><label class="labels">Email ID</label><input type="text"  name="email" class="form-control" placeholder="enter email id" value="<?php echo $item['email']  ?>"></div>
                    <div class="col-md-12 mt-3"><label class="labels">Mobile Number</label><input type="text"  name="phone" class="form-control" placeholder="enter phone number" value="<?php echo $item['phone']  ?>"></div>
                    <div class="col-md-12 mt-3"><label class="labels">Address</label><input type="text"  name="address" class="form-control" placeholder="enter your address" value="<?php echo $item['Address']  ?>"></div>
                    <div class="col-md-12 mt-3"><label class="labels">City</label><input type="text"  name="city" class="form-control" placeholder="enter your city" value="<?php echo $item['City']  ?>"></div>
                    <div class="col-md-12 mt-3"><label class="labels">Postcode</label><input type="text"  name="pin" class="form-control" placeholder="enter your post code" value="<?php echo $item['Pin']  ?>"></div>
                    <div class="col-md-12 mt-3"><label class="labels">State</label><input type="text"  name="state" class="form-control" placeholder="enter your state" value="<?php echo $item['State']  ?>"></div>
                    </div>
            
                <div class="mt-5 text-center"><input type="submit" class="btn btn-primary profile-button" name="update_information" value="Save Information"></div>

          

            </div>
        </div>
        

                 <!-- php part -->
                 <?php
                            $user_id=$_SESSION['user_id'];
                                include "db.php";
                                $query = " SELECT * FROM `user_order` WHERE user_id = $user_id ;";
                                $sql = mysqli_query($con, $query);
                                $num = mysqli_num_rows($sql);
	
                                if($num > 0){
                                    
                                    ?>
                                        <div class="col-md-4">
                                            <div class="p-3 py-5">
                                                <div class="d-flex justify-content-between align-items-center experience"><span>Your Order</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Shop More</span></div><br>

                                            <div class="col-lg-12">
                                                    <table class="table">
                                                        <thead class="text-center">
                                                            <tr>
                                                                <th scope="col">Product Image</th>
                                                                <th scope="col">Product Name</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Quantity</th>
                                                            </tr>
                                                        </thead>
                                                <tbody class="text-center"> 
                                    <?php
                                    while($item = mysqli_fetch_array($sql)){
                            ?>
                   
                        <tr>
                            <td><img src ='<?php echo $item['image'];?>' style='height: 50px; width: 40px;' class='img-fluid rounded'></td>
                            <td><?php echo $item['name'];?></td>
                            <td><?php echo $item['price'];?></td>
                            <td><?php echo $item['quantity'];?></td>
                            <td> <button onclick="return confirm('Do you want to cancel your order?');" class="btn btn-danger"><a href="orderCancel.php?id_select=<?php echo $item['id'];?>"   class="btn btn-danger">Cancel</a></button>
                        </td>
                         </tr>
                <?php
                                }
                            }else{
                                ?>
                                    <div align="center" class="col-md-4"> <img src="images/emptyOrder.png" alt="" style="width: 50%;"> <br>
                                        <h3> <b> NO ORDER FOUND :(</b></h3> <br>
                                        <p>Looks like you haven't made <br> your order yet  </p>
                                        <a href="Category.php" style="text-decoration:none;"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Shop More</span></a>
                                    </div>
                                <?php
                            }
                ?>
                  </form>
            <!-- form action end -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>