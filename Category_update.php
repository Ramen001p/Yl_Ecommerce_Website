<?php 
if(isset($_GET['id_select'])){
  $id=$_GET['id_select'];
  


  if(isset($_POST['update']))  {
    $category_name=$_POST['cname'];
    $category_select=$_POST['scategory'];
    $category_img=$_FILES['cimg'];
    
    $file_name=$_FILES['cimg'] ['name'];
    $file_tmp=$_FILES['cimg'] ['tmp_name'];
    move_uploaded_file($file_tmp,"Category_pic/". $file_name);

    include "db.php";
   

     $sql2="UPDATE categories SET id = '$id',Category_Name ='$category_name',Category_Image='Category_pic/$file_name',SelectCategory='$category_select' WHERE id = $id";
     $result2 = $con->query($sql2);
    
     if ($result2 == TRUE) {
    
         header('location:admin_category.php');
    
       }else{
        echo '<script>alert("Some Error Locate")</script>';
       }
    }
  }
?>

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

      .product-grid{
			padding:20px 20px;
			display:grid;
			grid-template-columns: 1fr 1fr 1fr 1fr ;
			gap:50px;
		}

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

  border-radius: 400px;
  background-color: #f2f2f2;
  padding: 250px;
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
   .content {
    position: absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%) ;
    background:#fff;
    width: 500px;
    height: 450px;
    border: 2px solid grey;
    box-shadow:2px 3px 5px 10px grey;
    border-radius:20px;
    z-index: 2;
    text-align:center;
    padding: 20px;
    box-sizing:border-box;
  }
</style>
<div class="content">
  <?php

 
  ?>
<form  method="POST" enctype="multipart/form-data">

 
  <h1>
    Update Category
  </h1>
  <div class="row">
      <div class="col-25">
        <label for="cname">Category Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="cname" name="cname" placeholder="Enter Category name">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="scategory">Category Select</label>
      </div>
      <div class="col-75">
        <input type="text" id="scategory" name="scategory" placeholder="example:-men_category">
      </div>
    </div>

    <div class="img">
    <div class="form-element">
                <input type="file" id="file-1" accept="image/*" name="cimg">
                <label for="file-1" id="file-1-preview">
                  <img src="https://bit.ly/3ubuq5o" alt="">
                  <div> <span>+</span></div>
                </label>
            </div>
           </div>
<br>
           <div class="row">
      <input type="submit" value="Update" name="update" >
    </div>
  </form>
</div>

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
</script>

