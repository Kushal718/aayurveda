<?php
session_start();
require_once '../vendor/autoload.php'; // Load the Medoo library

use Medoo\Medoo;

$db = new Medoo();
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
?>


<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from bracketweb.com/gardon-html/main-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Sep 2023 08:09:50 GMT -->
    <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>|| CodeVed ||</title>
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
        <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
        <meta name="description" content="gardon HTML 5 Template " />

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">

        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
              rel="stylesheet">

        <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
        <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
        <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
        <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
        <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
        <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
        <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
        <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
        <link rel="stylesheet" href="assets/vendors/gardon-icons/style.css">
        <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
        <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
        <link rel="stylesheet" href="assets/vendors/alagambe-font/stylesheet.css" />
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
        <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
        <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
        <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
        <link rel="stylesheet" href="assets/vendors/twenty-twenty/twentytwenty.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- template styles -->
        <link rel="stylesheet" href="assets/css/gardon.css" />
        <link rel="stylesheet" href="assets/css/gardon-responsive.css" />
        <style>
    .green-btn {
        background-color: #4CAF50; /* Green */
        color: #fff; /* White text */
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
    </head>

    <header class="main-header">
        <div class="main-header__top">
            <div class="main-header__top-inner">
                
                <marquee class="text-white" width="100%" direction="left">
                    <span >Disclaimer : </span>Ayurveda is a traditional system of medicine with its own principles and practices. If you are providing information or services related to Ayurveda, it's important to include a disclaimer to clarify its nature and limitations.
                </marquee>
            </div>
        </div>
        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="index.php"><img  src="assets/images/resources/logo-12.png" alt=""></a>
                            <div class="main-menu__shape-1">
                                <img  src="assets/images/shapes/main-menu-shape-1.png" alt="">
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown ">
                                    <a href="index.php">Home </a>
                                </li>
                                <li>
                                    <a href="about.php">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="search-disease.php">Disease</a>
                                </li>
                                <li class="dropdown">
                                    <a href="medicine.php"  >Medicine</a>
                                </li>
                                <li class="dropdown">
                                    <a href="find-prakruti.php"  >Find Prakruti</a>
                                </li>
                                <li class="dropdown">
                                <?php if (isset($_SESSION['user'])) { ?>
                                    <a href="diagnosis.php"    >Diagnosis</a>

                                    <?php }else{?>
                                    <a href="diagnosis.php"   data-toggle="modal" data-target="#exampleModal">Diagnosis</a>
                               <?php }?>
                                 </li>
                                <li class="dropdown">
                                    <a href="blog.php">Blog</a>
                                </li>
                                <!-- <li class="dropdown">
                                    <a href="contact.php">Contact</a>
                                </li> -->
                                <li>  
                                    <div class="pricing-one__btn-box">
                                <?php if (isset($_SESSION['user'])) { ?>
                                    <a href="logout.php" class="thm-btn pricing-one__btn"   >Logout</a>

                                    <?php }else{?>
                                      

                                    <a href="login.php"  class="thm-btn pricing-one__btn"  data-toggle="modal" data-target="#exampleModal">Login</a>
                               
                                   <?php }?>
                                   </div>
                                </li>
                                    
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__btn-box">
                            <a href="get-free-quote.html" class="thm-btn main-menu__btn"></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

   <style>
  .modal-header,  .close {
    background: linear-gradient(-135deg,green,green);
   
    text-align: center;
    font-size: 30px;
 
  }
  .modal-footer {
    
    background: linear-gradient(-135deg,green,green);
     box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  }
  .container .close-btn:hover{
  color: #3498db;
}
 
  </style>

</head>
<!--<button type="button" class="btn btn-default btn-lg"  data-toggle="modal" data-target="#exampleModal">Login</button>
 Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="modal-content">
           
      
        <div class="modal-body" style="padding:40px 50px;">
            <form role="form" action="login-validate.php" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Mobile No</label>
              <input type="text" class="form-control" name="mobile_number" id="usrname" placeholder="Enter Mobile No.">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
             <center> <button type="submit" class="thm-btn get-free-quote__form-btn"> Login</button></center>
                     <br>   <p>Not a member? <a href="signup.php"><b>Sign Up</b></a></p>

          </form>
        </div>
        
      </div>
      </div>
        
    </div>
  </div>
</div>
 