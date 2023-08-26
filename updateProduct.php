<?php
    //Update product backend 
    session_start();
   $seller_id=$_SESSION['admin_id'];
    if(isset($_GET['id_select'])){
        $id=$_GET['id_select'];

        if(isset($_POST['submit_product']))  {
            include "db.php";
    $ProductName=$_POST['Pname'];
    $category=$_POST['Category'];
    $Description=$_POST['Description'];
    $Details=$_POST['Details'];
    $SF=$_POST['sf'];
    $MC=$_POST['mc'];
    $Price=$_POST['Price'];
    $Offprice=$_POST['Offprice'];
    $Discount=$_POST['Discount'];
    $qnty=$_POST['qnty'];
    $img1=$_FILES['img1'];
    $img2=$_FILES['img2'];
    $img3=$_FILES['img3'];
    $img4=$_FILES['img4'];
    $img5=$_FILES['img5'];


      $file_name=$_FILES['img1'] ['name'];
      $file_tmp=$_FILES['img1'] ['tmp_name'];

      $file_name2=$_FILES['img2'] ['name'];
      $file_tmp2=$_FILES['img2'] ['tmp_name'];


      $file_name3=$_FILES['img3'] ['name'];
      $file_tmp3=$_FILES['img3'] ['tmp_name'];


      $file_name4=$_FILES['img4'] ['name'];
      $file_tmp4=$_FILES['img4'] ['tmp_name'];


      $file_name5=$_FILES['img5'] ['name'];
      $file_tmp5=$_FILES['img5'] ['tmp_name'];


      move_uploaded_file($file_tmp,"product/". $file_name);
      move_uploaded_file($file_tmp2,"product/". $file_name2);
      move_uploaded_file($file_tmp3,"product/". $file_name3);
      move_uploaded_file($file_tmp4,"product/". $file_name4);
      move_uploaded_file($file_tmp5,"product/". $file_name5);

      $sql2="UPDATE `products` SET `id`='$id',`s_id`='$seller_id',`product_name`='$ProductName',`category`='$category',`description`='$Description',`details`='$Details',`size_fit`='$SF',`material_care`='$MC',`price`='$Price',`off_price`='$Offprice',`discount_off`='$Discount',`quantity`='$qnty',`image`='product/$file_name',`image1`='product/$file_name2',`image2`='product/$file_name3',`image3`='product/$file_name4',`image4`='product/$file_name5' WHERE id=$id";
     $result2 = $con->query($sql2);
     
      if ($result2 == TRUE) {
     
          header('location:admin_allProducts.php');
     
        }else{
         echo '<script>alert("Some Error Locate")</script>';
        }
     }
   }

?>




<section class="addProduct">
<style>
* {
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
}

input[type=text], select, textarea {
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
    position: absolute;
    top:10%;
    left:10%;
    width: 80%;

  border-radius: 100px;
  background-color: #f2f2f2;
  padding-top: 50px;
  padding-left: 100px;
  padding-right: 100px;
  padding-bottom:50px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
/* image */

.form-element {
    width: 120px;
    height:100px;
    vertical-align: top;
    display: inline-block;
    text-align: center;
  }
.form-element input {
    display:none;
  }
.form-element img {
    width:100px;
    height:90px;
    object-fit:cover;
  }
.form-element div {
    position:relative;
    height:40px;
    margin-top:-40px;
    background:rgba(0,0,0,0.5);
    text-align:center;
    line-height:40px;
    font-size:13px;
    color:#f5f5f5;
    font-weight:600;
  }
.form-element div span {
    font-size:40px;
  }

</style>

<?php
            $$id=$_GET['id_select'];
            
                include "db.php";
                $show = " SELECT * FROM `products` WHERE id = $id  ;";
                $sqll = mysqli_query($con, $show);
                $row = mysqli_fetch_array($sqll);

            ?>


<div class="container">
<h2 align="center">Update Your Product</h2><br><br>
  <form  method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="pname">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Pname" name="Pname" placeholder="Enter Your Product Name" value="<?php echo $row['product_name']; ?>" required>
      </div>
    </div>
  


    <div class="row">
      <div class="col-25">
        <label for="category">Category</label>
      </div>
      <div class="col-75">
        <select id="category" name="Category">
        <option>Select Category</option>
        <?php
        require_once "db.php";
        
          $query = "SELECT Category_Name FROM `categories`;";

          $sql = mysqli_query($con, $query);
      
          $num = mysqli_num_rows($sql);
        
          if($num > 0){
              while($item = mysqli_fetch_array($sql)){
            
            
              
          ?>
                <option value="<?php echo $item['Category_Name'] ?>_category"><?php echo $item['Category_Name'] ?></option>
                
                <?php
              }
          }
          ?>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Description">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="Description" name="Description" placeholder="Enter Short Description of Your Product" value="<?php echo $row['description']; ?>" required >
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="Details">Details</label>
      </div>
      <div class="col-75">
        <input type="text" id="Details" name="Details" placeholder="Enter Details of Your Product" value="<?php echo $row['details']; ?>" required>
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="SF">Size and Fit</label>
      </div>
      <div class="col-75">
        <input type="text" id="sf" name="sf" placeholder="Enter Size & Fit of Your Product" value="<?php echo $row['size_fit']; ?>" required>
      </div>
    </div>


  <div class="row">
      <div class="col-25">
        <label for="SF">Material and Care</label>
      </div>
      <div class="col-75">
        <input type="text" id="mc" name="mc" placeholder="Enter Material & Care of Your Product" value="<?php echo $row['material_care']; ?>" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="SF">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="Price" name="Price" placeholder="Enter Price of Your Product" value="<?php echo $row['price']; ?>" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="SF">Off Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="Offprice" name="Offprice" placeholder="Enter Off-Price on Your Product" value="<?php echo $row['off_price']; ?>" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="SF">Discount</label>
      </div>
      <div class="col-75">
        <input type="text" id="Discount" name="Discount" placeholder="Enter Discount on Your Product" value="<?php echo $row['discount_off'] ?>" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="qnty">Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="qnty" name="qnty" placeholder="Enter Available Quantity Of Your Product" value="<?php echo $row['quantity']; ?>" required>
      </div>
    </div>


<center>
    <div class="img">
              
              <div class="form-element">
                <input type="file" id="file-1" accept="image/*" name="img1" value="<?php echo $row['image']; ?>" required>
                <label for="file-1" id="file-1-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>

            <div class="form-element">
                <input type="file" id="file-2" accept="image/*" name="img2" value="<?php echo $row['image1']; ?>" required>
                <label for="file-2" id="file-2-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>

            <div class="form-element">
                <input type="file" id="file-3" accept="image/*" name="img3" value="<?php echo $row['image2']; ?>" required>
                <label for="file-3" id="file-3-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>

            <div class="form-element">
                <input type="file" id="file-4" accept="image/*" name="img4" value="<?php echo $row['image3']; ?>" required>
                <label for="file-4" id="file-4-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>


            <div class="form-element">
                <input type="file" id="file-5" accept="image/*" name="img5" value="<?php echo $row['image4']; ?>" required>
                <label for="file-5" id="file-5-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>
<br><br><br>


    <div class="row">
      <input type="submit" name="submit_product" value="Update Product" >
    </div>
  </form>
</div>
</center>
</section>    

<?php
// if (isset($_FILES['img1'])) {
//         //3
//         $target_dir = 'product/';
//         //4
//         $image_path = $target_dir . basename($_FILES['img1']['name']);
//         //5
//         if (!empty($_FILES['img1']['tmp_name']) && getimagesize($_FILES['image']['tmp_name'])) {
//           if (file_exists($image_path)) {
//             $msg = 'Image already exists, please choose another or rename that image.';
//           } else if ($_FILES['img1']['size'] > 500000) {
//             $msg = 'Image file size too large, please choose an image less than 500kb.';
//           } else {
//             //6
//             move_uploaded_file($_FILES['img1']['tmp_name'], $image_path);
//             //7
//            // $pdo = pdo_connect_mysql();
//             //8
//             //$stmt = $pdo->prepare('INSERT INTO images (title, description, filepath, uploaded_date) VALUES (?, ?, ?, CURRENT_TIMESTAMP)');
//               //  $stmt->execute([ $_POST['title'], $_POST['description'], $image_path ]);
//             //$msg = 'Image uploaded successfully!';
//           }
//         } else {
//           $msg = 'Please upload an image!';
//         }
//       }
?>


<script>
//picture upload
function previewBeforeUpload(id){
  document.querySelector("#"+id).addEventListener("change",function(e){
    if(e.target.files.length == 0){
      return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#"+id+"-preview div").innerText = file.name;
    document.querySelector("#"+id+"-preview img").src = url;
  });
}

previewBeforeUpload("file-1");
previewBeforeUpload("file-2");
previewBeforeUpload("file-3");
previewBeforeUpload("file-4");
previewBeforeUpload("file-5");
</script>
</body>
</html>