<?php 
session_start();
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
    <link href="css/addProperty1.css" rel="stylesheet">
   
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
  <div class="container">
    <div class="row">
      <!-- <div class="wrapper"> -->
         <nav id="select_menu" class="col-12 col-md-3">
          <ul>
            <li><a href="#propertyDetails">Poperty Details</a></li>
            <li><a href="#location">Location</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#propertyDescription">Property Description</a></li>
            <li><a href="#uploadPhotos">Upload Photos</a></li>
          </ul>
        </nav>
        <div class="content col-md-9">
          <div id="propertyDetails">
            <h1>Property details</h1>
            <label for="">Property for:</label><br>
            <select name="" id="">
              <option value="">Sell</option>
              <option value="">Rent</option>
              <option value="">Lease</option>
            </select><br><br>
          <!-- start of property type -->
          <label for="">Property Type:</label>
          <div id="property_type">
            <label for="" class="residential" style="color:blue">Residential</label>
            <label for="" class="commercial">commercial</label>
            <label for="" class="others">Others</label>
            <!-- start of property type box -->
            <div id="property_type_box">
              <div class="row" id="residential">
                <div class="col-xs-4" value="apartment">
                    <img id="apartment_icon" src="images/website/apartment_icon.png" alt="">
                    <p>flat/apartment</p>
                </div>
                <div class="col-xs-4" value="villa">
                    <img id="villa_icon" src="images/website/villa_icon2.png" alt="">
                    <p>house/villa</p>
                </div>
                <div class="col-xs-4" value="plot">
                    <img id="land_icon" src="images/website/land_icon.png" alt="">
                    <p>plot/land</p>
                </div>
              </div >
              <div class="row" id="commercial">
                <div class="col-xs-4" value="office">
                    <img id="office_icon" src="images/website/office_icon.png" alt="">
                    <p>Office Space</p>
                </div>
                <div class="col-xs-4" value="shop">
                    <img id="shop_icon" src="images/website/shop_icon.png" alt="">
                    <p>Shop/Showroom</p>
                </div>
                <div class="col-xs-4" value="commercialLand">
                    <img id="commercial_land_icon" src="images/website/land_icon.png" alt="">
                    <p>Commercial Land</p>
                </div>
              </div >
              <div class="row" id="others">
                <div class="col-xs-4" value="agricultural">
                    <img id="agricultural_icon" src="images/website/agricultural_icon.png" alt="">
                    <p>Agricultural Land</p>
                </div>
                <div class="col-xs-4" value="farmHouse">
                    <img id="farm_icon" src="images/website/farm_icon.png" alt="">
                    <p>Farm House</p>
                </div>
                <div class="col-xs-4" value="layout">
                    <img id="layout_icon" src="images/website/layout_icon.png" alt="">
                    <p>Layouts</p>
                </div>
              </div >
            </div>
            <!-- end of property type box -->
            <!-- start of selecting BHK -->
          <div id="bhk_selector">
            <label for="">Select Number of Rooms</label>
            <ul>
              <li><input type="checkbox" value="1bhk">1BHK</li>
              <li><input type="checkbox" value="1bhk">2BHK</li>
              <li><input type="checkbox" value="1bhk">3BHK</li>
              <li><input type="checkbox" value="1bhk">>3BHK</li>
            </ul>
          </div>
          <!-- end of selecting BHK -->
          </div>
          <!-- end of property type section -->
          </div>
          <!-- end of property details -->
          <!-- star of property location section -->
          <div id="location">
            <h1>Property Location</h1>
            
          </div>
          <!-- end of property location section -->
          <div id="features"><h1>Property Features</h1></div>
          <div id="propertyDescription"><h1>Property Description</h1></div>
          <div id="uploadPhotos"><h1>Upload Property Photos</h1></div>
        </div>
      <!-- </div> -->
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

  <script src="javascript/addProperty1.js"></script> 

  </body>
</html>