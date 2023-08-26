<?php session_start();?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style1.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="title" style=" position: absolute;
  left:23%;
  top:2%;
  font-size: 35px;
  color:white;
  font-weight: bold;">
    Admin Login
  </div>

  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img  src="admin1.jpg" alt="Front Image">
        <div class="text">
          <span class="text-1">Always deliver  <br> more than expected</span>
          <span class="text-2"><br>Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="admin1.jpg" alt="Back Image">
        <div class="text">
          <span class="text-1">Always deliver  <br> more than expected</span>
          <span class="text-2"><br>Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <!--Login Form-->
          <div class="login-form">
            <div class="title">Login</div>
          <form method="post" action="validation.php">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                title="Please enter a valid E-mail Id" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>
              <!--<div class="text"><a href="#">Forgot password?</a></div>-->
              <div class="button input-box">
              <input type="submit" value="Submit" name="submit_log">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
      <!--Signup Form-->
        <div class="signup-form">
          <div class="title">Signup</div>
          <form method="post" action="registration.php">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your name" name="name_r" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name="email_r" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                title="Please enter a valid E-mail Id" required>
              </div>
              <div class="input-box">
                <i class="fas fa-phone"></i>
                <input type="text"  name="phone_r" pattern="[7-9]{1}[0-9]{9}" placeholder="Enter your phone number" title="Enter a valid mobile number" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" id="txtPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password_r" 
                 required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm your password" id="txtConfirmPassword" name="cpassword_r" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Submit" name="submit_reg">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
            <script type="text/javascript">
                window.onload = function () {
                    var txtPassword = document.getElementById("txtPassword");
                    var txtConfirmPassword = document.getElementById("txtConfirmPassword");
                    txtPassword.onchange = ConfirmPassword;
                    txtConfirmPassword.onkeyup = ConfirmPassword;
                    function ConfirmPassword() {
                        txtConfirmPassword.setCustomValidity("");
                        if (txtPassword.value != txtConfirmPassword.value) {
                            txtConfirmPassword.setCustomValidity("Passwords do not match.");
                        }
                    }
                }
            </script>
      </form>
    </div>
    </div>
    </div>
  </div>
 
  <?php

if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
  
  ?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <script>
      Swal.fire({
      position: 'center',
      width: 300,
      icon: '<?php echo $_SESSION['status_code']; ?>',
      title: '<?php echo $_SESSION['status']; ?>',
      showConfirmButton: false,
      timer: 1800
    })
    </script>

<?php
  unset($_SESSION['status']);
}

?>


</body>
</html>
