<?php 
session_start();
header("Refresh:60");
if(!isset($_SESSION['email'])){
  header('location:Login/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image" href="common/pic.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Work+Sans:400,600');


body {
	margin: 0;
	font-family: 'Work Sans', sans-serif;
	font-weight: 800;
  text-decoration: none;
  
}

.container {
	width: 80%;
	margin: 0 auto;
}

header {
  background: #55d6aa;
}

header::after {
  content: '';
  display: table;
  clear: both;
}

.logo {
  float: left;
  cursor: pointer;
  margin-top: 10px;
  margin-bottom: 8px;
}

nav {
  float: right;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-left: 70px;
  padding-top: 23px;
  position: relative;
}

nav a {
  color: #444;
  /*text-decoration: none;*/
  text-transform: uppercase;
  font-size: 16px;
}

nav a:hover {
  color: #000;
  text-decoration: none;
}
/* 
nav a::before {
  content: '';
  display: block;
  height: 5px;
  background-color: #444;
  position: absolute;
  top: 0;
  width: 0%;
  transition: all ease-in-out 250ms;
} */

nav a:hover::before {
  width: 100%;
}

.dropbtn {
  background-color: #55d6aa;
  color: black;
  font-size: 13px;
  border: none;
}


.dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
}

.dropdown-content a {
  text-align: center;
  background-color:#cacfce;
  
  padding: 8px;
  min-width: 160px;
  text-decoration: none;
  font-size: 13px;
  display: block;
}


.dropdown:hover .dropdown-content {display: block;}

    </style>
</head>
<body>

<header>
    <div class="container">
      <h1 class="logo"><a href="Home.php"><img src="common/logo1.png" alt="logo Icon" style="width:100%;height:40px;"></a></h1>
      
      <nav>
        <div class="wrap">
    
        <ul>
          <li><a href="Home.php">Home <i class="fas fa-home"></i> </a></li>
          <li><a href="Category.php">Category <i class="fas fa-clipboard-list"></i></a></li>
          <?php
           require_once "db.php";
           $user_id=$_SESSION['user_id'];
           $query = " SELECT * FROM `cart` WHERE user_id='$user_id';";

               $sql = mysqli_query($con, $query);
           
               $num = mysqli_num_rows($sql);
               if($num==0)
               {
                ?>
                    <li><a href="mycart.php">Cart<i class="fas fa-shopping-cart"></i> </a></li>
                <?php
               }else{
               ?>
          <li><a href="mycart.php">Cart<i class="fas fa-shopping-cart"></i> (<?php echo $num;?>) </a></li><?php }?>
          <li>
         
          <?php 
          
       if(!isset($_SESSION['email'])){
        header('location:Login/index.php');
    }else
        {
          //Query 
            $email=$_SESSION['email'];
            require_once('db.php');
            $query= "SELECT * FROM `users` WHERE email='$email'";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['id'];
            $user_id=$_SESSION['user_id'];
            $_SESSION['username'] = $row['username'];

          echo "<div class='dropdown'>
          <button class='dropbtn'><p style='text-transform: uppercase;'><i class='fa fa-user' style='font-size:20px;'></i>   " . $row['username'] . "</p></button>
          <div class='dropdown-content'>
            <a href='./user_account.php'>Account</a>
            <a href='Login/logout.php'>Logout</a>
          </div>
        </div>";
        }
        ?>
          
          </li>
         
          <li> <?php 
        if(!isset($_SESSION['email'])){
          echo"
          <a href='Login/index.php'>LOGIN</a>
          ";
          
        }else
        {
          

        }
        ?> 
        </li>
        </ul>
      </nav>
    </div>
  </header>
    
</body>
</html>