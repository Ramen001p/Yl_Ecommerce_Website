<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #footer-sub{
            background-color: #3a3a3a;
            border-top: 1px solid #dbdbdb;
            
        }

        #footer-main{
            background-color: #012b72;
        }

        #footer-sub h5{
            color:#ffffff;
            margin-top: 25px;
            padding-left:35%;
        }

        #footer-sub ul{
            list-style: none;
            margin-top: 20px;
            padding-left:45%;
        }


        #footer-sub ul li{
            margin-left: -38px;
        }

        #footer-sub a:link {
            text-decoration: none;
            color:#ffffff;
            font-size: 12px;
        }

        #footer-sub a:visited {
            text-decoration: none;
            color:#ffffff;
        }


        #footer-sub a:hover {
            text-decoration: none;
            color: #9ab7d6;
        }


        /*#footer-sub a:active {
            text-decoration: none;
            color:red;
        }*/

        .vertical-line{
            border-right: 1px solid #dbdbdb;
            margin: 8px;
            padding: 0px;
        }

        .glyphicon {
            font-size: 35px;
            color:#ffffff;
        }

        #sub-two{
            margin: 0px;
            padding: 0px;
        }

        #sub-two .vertical-line h4{
            color:#ffffff;
        }


        #footer-main ul{
            list-style: none;
        }

        #footer-main ul li{
            float:left;
            text-decoration: none;
            padding-left: 15px;
            margin-top: 17px;
        }

        .glyphicon-search{
            font-size: 20px;
        }

        #social-menu{
            float: right;
            margin-right: 60px;
        }   

        #side-padding{
            padding: 0px;
            margin: 0px;
        }

        /* copyright area */

        .copyright{
            font-size: 10px;
            color: white;
            letter-spacing: 1.5px;
            word-spacing: 2px;
        }

        .copyright a{
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .copyright::after{
            content: '';
            animation: changetextafter 3s infinite linear;
            
        }

        .heart{
            color: red;
            font-size: 12px;
        }

        @keyframes changetextafter{
            50%{content: "Ramen";}
            100%{content: "Bablu";}
        }

    </style>
</head>
<body>

<footer>
<div style="min-height: 250px;" class="footer" id="footer-sub">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5> CATEGORY </h5>
            <ul>
                <li><a href="sub_category.php?table_select=men_products&title_sub=Men">Men</a></li>
                <li><a href="sub_category.php?table_select=women_products&title_sub=Women">Women</a></li>
                <li><a href="sub_category.php?table_select=shoes_products&title_sub=Footwear">Footwear</a></li>
                <li><a href="sub_category.php?table_select=accesories_products&title_sub=Accessories">Accessories</a></li>               
            </ul>
            </div>
            <div class="col-md-6">
                <h5> Our Team </h5>
                <ul>
                    <li><a href="Home.php">Ramen Ghosh</a></li>
                    <li><a href="">Bablu Murmu</a></li>
                    <li><a href="">Minhajul Abedin</a></li>
                    <li><a href="">Subhrajit Chakraborty</a></li>
                    <li><a href="">Raja Pandit</a></li>                 
                </ul>
            </div>
            
        </div>

        
 <hr style="margin-bottom:0px; margin-top:30px; padding:0px;">
        <div class="row" id="sub-two">

            <div class="col-md-4">
                <div class="vertical-line text-center">
                    <span class="glyphicon glyphicon-map-marker"></span>
                    <h4>TRACK YOUR ORDER</h4>
                </div>
            </div>

            <div class="col-md-4">
                <div class="vertical-line text-center">
                    <span class="glyphicon glyphicon-refresh"></span>
                    <h4>FREE & EASY RETURNS</h4>
                </div>
            </div>

            <div class="col-md-4">
                <div style="margin:8px;" class="text-center">
                    <span class="glyphicon glyphicon-remove-circle"></span>
                    <h4 style="color:#ffffff;">ONLINE CANCELLATIONS</h4>
                </div>
            </div>
            

        </div>
        <hr style="margin-bottom:30px; margin-top:0px; padding:0px;">

       

    </div>
</div>
<div style="min-height: 50px;" id="footer-main">

<ul>
<li><p class="copyright">&copy Copyright 2021 | Devloped By <span class="heart"><i class="fas fa-heart"></i> </span></p></li>
</ul>

<div id="social-menu">
    <ul>
    <li><a href=""><img style="max-width:18px; margin-top: -7px;" src=""></a></li>
    <li><a href=""><img style="max-width:18px; margin-top: -7px;" src=""></a></li>
    <li><a href=""><img style="max-width:18px; margin-top: -7px;" src=""></a></li>
</ul>
</div>

</div>
</footer>
    
</body>
</html>