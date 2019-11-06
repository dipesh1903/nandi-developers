<?php 
session_start();
if(isset($_SESSION['basic_details']) && isset($_SESSION['location']))
{
?>
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
    <link href="css/fontawesome.css" rel="stylesheet">
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
    <link rel="stylesheet" href="css/style.css">
    <link href="css/addProperty.css" rel="stylesheet">
   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Laila|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>
  
  <!-- Pre Loader -->
  <!-- <div id="aa-preloader-area">
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
            <li class=""><a href="contact.html">CONTACT</a></li>
            <li><a href="404.html">404 PAGE</a></li>            
          </ul>                          
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  <div class="container">
    <div class="row">
      <div class="wrapper">
        <nav id="select_menu" class="col-12 col-md-3">
          <div class="button" value="basic_details">
            <i class="fa fa-clipboard-list"></i>
            <label >basic details</label>
          </div>
          <div class="button" value="location">
            <i class="fa fa-map-marker"></i>
            <label >location</label>
          </div>
          <div class="button">
            <i class="fas fa-list-alt"></i>
            <label>property details</label>
          </div>
          <div class="button">
            <i class="fa fa-rupee-sign"></i>
            <label>pricing</label>
          </div>
          <div class="button">
            <i class="fa fa-map-marker"></i>
            <label>features</label>
          </div>
        </nav>
        <!-- start basic details section -->
        
        <!-- end of basic details section -->
        <!-- start of location -->
        <div class="col-12 col-md-9 main" id="location">
          
        </div>
        <!-- end of location -->
      </div>
    </div>
  </div>
  


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
  <script src="javascript/location.js"></script> 

  </body>
</html>
<?php }else{
  header("Location:location.php");
} ?>