<!-- admin_headerTop.php -->

<Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                     <?php if(!isset($_GET['section'])){ echo"";}else{echo $_GET['section'] ;}  ?>
                </h2>
            </div>
            <!-- <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div> -->
            <div class="header-left header-profile" style="float:right;">
                <img src="images/user.png" class="img-responsive" />
                <h3><?php echo $_SESSION['username']; ?></h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>