<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
<style>
            *{
            font-family: 'Raleway', sans-serif;
            box-sizing:border-box;
        }
    .popup .overlay{
    position: fixed;
    top:0px;
    left:0px;
    width:100vw;
    height:100vh;
    background:rgba(0,0,0,0.7);
  

  }
  .popup .content {
    position: absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%) ;
    background:#fff;
    width: 470px;
    height: 400px;
    border-radius:20px;
    text-align:center;
    padding: 20px;
    box-sizing:border-box;
  }
  .popup .content table{
    padding-left:25%;
  }
  .popup .content table td{
    padding-left:20px;
  }

button{
    height: 50px;
    width:100%;
    background:Cyan;
    border: none;
    border-radius:10px;
    font-weight:bold;
    font-size:26px;
    
    cursor:pointer;
}


</style>


<div class="popup" id="popup-1">
            <div class="overlay"></div>
            <div class="content">
                
                        <h1>
                            Customer Address <i class="fa-thin fa-clothes-hanger"></i>
                        </h1>
                        <br>
                        <!-- php part -->
                        <?php
                        require_once('db.php');
                        $id=$_GET['id_select'];
                        $query = " SELECT * FROM `users` WHERE id = $id";
                         
                         $sql = mysqli_query($con, $query);
                      
                         $num = mysqli_num_rows($sql);
                         $item = mysqli_fetch_array($sql);
                                
                  ?>
                  <table>

                    <tr style="padding: 20px;">
                        <td><i class="fa fa-user-circle" aria-hidden="true" style="font-size:26px;"></i></td> 
                        <td><?php echo $item['billing_name'];  ?></td>
                    </tr><tr></tr> <tr></tr>
                        <tr>
                            <td><i class="fa fa-envelope" aria-hidden="true" style="font-size:26px;"></i></td>
                            <td><?php echo $item['email'];  ?></td>
                        </tr><tr><tr></tr></tr>
                        <tr>
                            <td><i class="fa fa-address-card" aria-hidden="true" style="font-size:26px;"></i> </td>
                            <td><?php echo $item['Address'];  ?></td>
                        </tr><tr><tr></tr></tr>
                        <tr>
                            <td><i class="fa fa-mobile" aria-hidden="true" style="font-size:30px; padding-left:8px"></i></td>
                            <td><?php echo $item['phone'];  ?></td>
                        </tr><tr><tr></tr></tr>
                        <tr>
                            <td><i class="fa fa-map-marker" aria-hidden="true" style="font-size:26px; padding-left:8px"></i> </td>
                            <td><?php echo $item['State'] .",". $item['Pin']; ?></td>
                        </tr><tr><tr></tr></tr>

                     </table>
                     <br><br>
                     <button><a href="admin_order.php" style="text-decoration:none; color: black;"><i class="fa fa-backward" aria-hidden="true" style="font-size:25px;"></i>  Go Back </a> 
                     </button>
                    </div>
                </div>
            </div>