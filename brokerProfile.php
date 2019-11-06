<?php
require "connect.inc.php"; 
session_start();
if(isset($_SESSION['email']))
{
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Nandi Developers | Home</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <link href="css/brokerProfile.css" rel="stylesheet"> 

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">  
  <!-- Pre Loader -->
 <!--  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div> -->
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start menu section -->
  <section id="aa-menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <!-- Text based logo -->
           <!-- <a class="navbar-brand aa-logo logo hidden-md"> <img src="images/website/logo2.png" alt=""></a> -->
           <!-- Image based logo -->
           <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li class="active"><a href="index.php">HOME</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.php">PROPERTIES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="properties.php">PROPERTIES</a></li>
                <li><a href="">PROPERTIES DETAIL</a></li>                                            
              </ul>
            </li>
            <li><a href="gallery.php">GALLERY</a></li>                                         
            <li><a href="contact.php">CONTACT</a></li>
           <!-- <li><a href="404.html">404 PAGE</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  <?php 
    $email=$_SESSION['email'];
    $row;
    $query="SELECT * FROM `broker_personal` WHERE `b_email`='$email'";
    if($result=$link->query($query))
    {
      $row=mysqli_fetch_assoc($result);
      $_SESSION['id']=$row['b_id'];
      $_SESSION['first_name']=$row['b_fname'];
      $_SESSION['last_name']=$row['b_lname'];
      $profile=$row['b_profile_photo'];
      $_SESSION['profile_pic']=$profile;
      $_SESSION['phone']=$row['b_phone'];
      $_SESSION['aadhar']=$row['b_aadhar'];
      $_SESSION['password']=$row['b_pass'];
    }else{
      die("something went wrong");
    }
   ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 cover-image">
      <div class="dropdown">
        <a href="brokerProfile.php" class="dropdown-toggle" data-toggle="dropdown"><i><span class="fa fa-user"></span>
          </i><?php echo $_SESSION['first_name'] ?><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="brokerSettings.php">Account Settings</a></li>
          <li><a  id="logout_btn">Logout</a></li>
        </ul>
      </div>
      <div class="broker_name">
          <h2><?php echo strtoupper($_SESSION['first_name'])." ". strtoupper($_SESSION['last_name']); ?></h2>
          <h4><?php echo $row['b_id'] ?></h4>
      </div>
      <div>
        <div class="profile_image">
          <?php 
          if(is_null($_SESSION['profile_pic']))
          {
            ?>
          <img src="images/website/blank_profile_image.png" alt="" id="profile_image">
          <?php 
          }else{
            $email=$_SESSION['email'];
              $query="SELECT `b_profile_photo` FROM `broker_personal` WHERE `b_email`='$email'";
              $run=$link->query($query);
              $row=mysqli_fetch_assoc($run);
              $profile_photo=$row['b_profile_photo'];
            ?>
            <img src='<?php echo "images/profile_pics/".$profile_photo; ?>' alt="" id="profile_image">
            <?php 
            }
             ?>
        </div>
          <i id="camera_icon"><span class="fa fa-camera camera-icon" ></span></i>
      </div>
    </div>
  </div>
</div>
<form id="image_uploader" action="profile_pic_upload.php" method="post">
  <input type="file" accept="image/*" id="image_input" name="profile_pic">
  <input type="submit" id="image_submit">
</form>
<div class="container-fluid">
  <div class="row">
    <div class="col-12 activity">
      <h2>My Activity</h2>
      <div class="">
        
      </div>
    </div>
  </div>
</div>

  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
               <!-- <p>Designed by <a rel="nofollow" href="http://www.markups.io/">MarkUps.io</a></p> -->
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-middle">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">License</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

 
  
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 
  <!-- jquery operational -->
  <script type="text/javascript" src="javascript/brokerProfile.js"></script>
  </body>
</html>
<?php 
}else{
  header("Location:index.php");
  exit();
}
 ?>