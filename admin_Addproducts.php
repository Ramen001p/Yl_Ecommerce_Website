<?php include "admin_header.php"; 
include "admin_headerTop.php";?>
<br><br><br><br><br><br><br><br>
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

  border-radius: 100px;
  background-color: #f2f2f2;
  padding: 10px 150px;
  padding-bottom:20px;
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



<div class="container">


  <form action="admin_AddAction.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="pname">Product Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Pname" name="Pname" placeholder="Enter Your Product Name" required>
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
	
    $query = "SELECT * FROM `categories`;";

    $sql = mysqli_query($con, $query);
 
    $num = mysqli_num_rows($sql);
	
    if($num > 0){
        while($item = mysqli_fetch_array($sql)){
		    
			
         
    ?>
          <option value="<?php echo $item['SelectCategory'];?>"><?php echo ucfirst($item['Category_Name']); ?></option>
          
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
        <input type="text" id="Description" name="Description" placeholder="Enter Short Description of Your Product" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="Details">Details</label>
      </div>
      <div class="col-75">
        <input type="text" id="Details" name="Details" placeholder="Enter Details of Your Product"  required>
      </div>
    </div>

     <div class="row">
      <div class="col-25">
        <label for="SF">Size and Fit</label>
      </div>
      <div class="col-75">
        <input type="text" id="sf" name="sf" placeholder="Enter Size & Fit of Your Product" required>
      </div>
    </div>


  <div class="row">
      <div class="col-25">
        <label for="SF">Material and Care</label>
      </div>
      <div class="col-75">
        <input type="text" id="mc" name="mc" placeholder="Enter Material & Care of Your Product" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="SF">Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="Price" name="Price" placeholder="Enter Price of Your Product" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="SF">Off Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="Offprice" name="Offprice" placeholder="Enter Off-Price on Your Product" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="SF">Discount</label>
      </div>
      <div class="col-75">
        <input type="text" id="Discount" name="Discount" placeholder="Enter Discount on Your Product" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="qnty">Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="qnty" name="qnty" placeholder="Enter Available Quantity Of Your Product" required>
      </div>
    </div>


<center>
    <div class="img">
              
              <div class="form-element">
                <input type="file" id="file-1" accept="image/*" name="img1" required>
                <label for="file-1" id="file-1-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>

            <div class="form-element">
                <input type="file" id="file-2" accept="image/*" name="img2">
                <label for="file-2" id="file-2-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>

            <div class="form-element">
                <input type="file" id="file-3" accept="image/*" name="img3">
                <label for="file-3" id="file-3-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>

            <div class="form-element">
                <input type="file" id="file-4" accept="image/*" name="img4">
                <label for="file-4" id="file-4-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>


            <div class="form-element">
                <input type="file" id="file-5" accept="image/*" name="img5">
                <label for="file-5" id="file-5-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>
<br><br><br>


    <div class="row">
      <input type="submit" name="submit_product" value="Add Product" >
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