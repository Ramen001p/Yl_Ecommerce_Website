<?php include "admin_header.php"; 
include "admin_headerTop.php";?>
<br><br><br><br><br><br><br><br>

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
    width: 450px;
    height: 350px;
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


<?php

	require_once "db.php";
	
    $query = " SELECT * FROM `categories`;";

    $sql = mysqli_query($con, $query);
 
    $num = mysqli_num_rows($sql);
	
    if($num > 0){
        while($item = mysqli_fetch_array($sql)){
			
          $id=$item['id'];
         
    ?>

<div class="product_grid">

  <div class="coumn">
    <div class="delete">
      <a href="Category_delete.php?id_select=<?php echo $id; ?>"><button style="color:red;float:right; border:none; cursor:pointer;">
  <i class="fa fa-minus-circle" aria-hidden="true" style="font-size:26px;"></i></button></a>
  </div>
  <div class="update">
      <a href="Category_update.php?id_select=<?php echo $id;?>"><button style="color:#4085F5;float:left; border:none; cursor:pointer;">
      <i class="fa fa-pencil-square" aria-hidden="true"style="font-size:26px;"></i></button></a>

      
  </div>
<img src="<?php echo $item['Category_Image']; ?>" style="width:100%">
      <?php echo $item['Category_Name']; ?>
  </div>

  <?php

        }
    }
?>
  <div class="coumn">
<button style="border:1px solid black;padding: 80px; font-size:30px" onclick="togglePopup()">+</button>
</div>
<form action="add_category.php" method="POST" enctype="multipart/form-data">
<div class="popup" id="popup-1">
  <div class="overlay"></div>
  <div class="content">
    <div class="close-btn" onclick="togglePopup()">&times;</div>
 
  <h1>
    Add Category
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
      <input type="submit" value="Add" >
    </div>
  </form>
</div>
</div>

<script>
  function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
  }

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
