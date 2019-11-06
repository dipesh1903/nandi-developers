<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Contact</title>

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
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">   

    <!-- Main style sheet -->
    <link href="css/brokerSignup.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
   
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
  <body>
  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <div class="overlay">
      
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    08029771636
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> nandidevelopers1179@gmail.com
                  </div>
                </div>              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header section -->
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
          <!-- <a class="navbar-brand aa-logo" href="index.php"> Home <span>Property</span></a> -->
          <!-- Image based logo -->
          <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->                     
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li><a href="index.php">HOME</a></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.php">PROPERTIES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="properties.php">PROPERTIES</a></li>
                <li><a href="properties-detail.php">PROPERTIES DETAIL</a></li>                                            
              </ul>
            </li>
            <li><a href="gallery.html">GALLERY</a></li>                                        
            <li class="dropdown">
              <a class="dropdown-toggle active" data-toggle="dropdown" href="brokerSignup.php">BROKER <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li class="active"><a href="#">BROKER SIGNUP</a></li>
                <li><a href="brokerLogin.php">BROKER LOGIN</a></li>                                            
              </ul>
            </li>
            <li class=""><a href="contact.html">CONTACT</a></li>
            <li><a href="404.html">404 PAGE</a></li>            
          </ul>                          
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
   <section class=" ">
            <div class="container signup">
                <div class="signup-content row">
                    <div class="signup-form col-12 col-md-8">
                        <h2 class="form-title">Broker Sign up</h2>
                        <p id="error" class="error"></p>
                        <form method="POST" class="form-group register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="fa fa-user"></i></label>
                                <input  type="text" name="name" id="fname" placeholder="First Name"/>

                            </div>
                             <div class="form-group">
                                <label for="name"><i class="fa fa-user"></i></label>
                                <input type="text" name="name" id="lname" placeholder="Last Name"/>
                            </div>
                           <!--  <div class="form-group">
                                <label for="email"><i class="fa fa-envelope-o"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div> -->
                            <!-- <div class="form-group">
                                <label for="phone"><i class="fa fa-phone"></i></label>
                                <input type="phone" name="phone" id="phone" placeholder="Your Phone Number"/>
                            </div> -->
                            <div class="form-group">
                                <label for="pass"><i class="fa fa-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="fa fa-repeat"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term">I agree all statements in  
                                    <a href="#" class="term-conditions">Terms and Conditions</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="button" name="signup" id="signup" class="btn btn-primary" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image col-12 col-md-4">
                        <figure><img class="img-responsive" src="images/website/signup-image.jpg" alt="sing up image"></figure>
                        <a href="brokerLogin.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


  <!-- Footer -->
  <footer id="aa-footer" class="fixed-bottom">
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
  </footer><!-- / Footer -->

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
  <script src="javascript/brokerSignup.js"></script> 

  </body>
</html>