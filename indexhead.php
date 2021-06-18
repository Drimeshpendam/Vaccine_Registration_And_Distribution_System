<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Vaccine Registration and Distribution System</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
               <div class="main">
                  <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_">
                           <div class="menu_main">
                              <ul>
                                 <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) { echo '<li><a href="login.php">Login</a></li>';
                                 }
                                 else {
                                    echo '<li><a href="logout.php">Logout</a></li>';
                                 }
                                 ?>
                                                                  
                              </ul>
                           </div>
                        </div>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.php">Home</a>
                              <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) { echo '<li><a href="login.php">Login Now</a></li>';
                                    echo '<li><a href="register.php">Registere Now</a></li>';
                              
                                 }
                                 else {
                                    echo '<li><a href="Orders.php">My Orders</a></li>';
                                    
                                    echo '<li><a href="cart.php">My Cart</a></li>';
                                    echo '<li><a href="reset-password.php">Forgot Password</a></li>';
                                 }
                                 ?>
                           </div>
                        </div>
                        <span class="navbar-toggler-icon"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                        <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                     </ul>
                  </div>
               </div>
            </div>
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Ek Tika</h1>
                              <h1 class="banner_taital">Jivandan ka ! ! !</h1>
                              <p class="banner_text">Novel Corona Virus is Affecting More People , Vaccinating People Is Saving Ones Life's By Boosting Immunity Power .  </p>
                              <div class="more_bt"><a href="#">Get Registered</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="container">
                              <h1 class="banner_taital">Get Medical Care early</h1>
                              <p class="banner_text">Dont Panic ! Even If You Get Affected By Corona Virus People Are Treatabel With The Right Treatment TAken On Right Time .</p>
                              <div class="more_bt"><a href="#">Get Registered</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="banner_img"><img src="images/banner-img1.png"></div>
                        </div>
                     </div>
                  </div>             
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>            
      </div>
   </div>
   <!-- banner section end -->

      


      <!--  -->