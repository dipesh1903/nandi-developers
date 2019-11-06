<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Nandi Developers | Properties</title>

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
  <div id="aa-preloader-area">
    <div class="pulse"></div>
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
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-right">
                  <a href="register.html" class="aa-register">Register</a>
                  <a href="signin.html" class="aa-login">Login</a>
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
          <!-- <a class="navbar-brand aa-logo" href="index.html"> Home <span>Property</span></a> -->
          <!-- Image based logo -->
          <!-- <a class="navbar-brand aa-logo-img" href="index.html"><img src="img/logo.png" alt="logo"></a> -->                     
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
            <li><a href="index.php">HOME</a></li>
             <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="properties.php">PROPERTIES <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="properties.php">PROPERTIES</a></li>
                <li><a href="properties-detail.php">PROPERTIES DETAIL</a></li>                                            
              </ul>
            </li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BROKER <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="brokerSignup.php">BROKER SIGNUP</a></li>
                <li><a href="brokerSignup.php">BROKER LOGIN</a></li>                                            
              </ul>
            </li>
            <li><a href="contact.php">CONTACT</a></li>
            <!-- <li><a href="404.html">404 PAGE</a></li> -->
          </ul>                           
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Properties Page</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">PROPERTIES</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">
            <!-- start properties content head -->
            <div class="aa-properties-content-head">              
              <div class="aa-properties-content-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">6</option>
                    <option value="2">12</option>
                    <option value="3">24</option>
                  </select>
                </form>
              </div>
              <div class="aa-properties-content-head-right">
                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
              </div>            
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body">
              <ul class="aa-properties-nav">
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/item/6.jpg">
                    </a>
                    <div class="aa-tag for-rent">
                      For Rent
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Property ID</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          Rs 00000
                        </span>
                        <a class="aa-secondary-btn" href="#">View Details</a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/item/1.jpg">
                    </a>
                    <div class="aa-tag sold-out">
                      Sold Out
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Property ID</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          Rs 00000
                        </span>
                        <a class="aa-secondary-btn" href="#">View Details</a>
                      </div>
                    </div>
                  </article>
                </li>
                 <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/item/2.jpg">
                    </a>
                    <div class="aa-tag sold-out">
                      Sold Out
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Property ID</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          Rs 00000
                        </span>
                        <a class="aa-secondary-btn" href="#">View Details</a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/item/5.jpg">
                    </a>
                    <div class="aa-tag for-sale">
                      For Sale
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Property ID</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          Rs 00000
                        </span>
                        <a class="aa-secondary-btn" href="#">View Details</a>
                      </div>
                    </div>
                  </article>
                </li>
                 <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/item/3.jpg">
                    </a>
                    <div class="aa-tag for-rent">
                        For Rent
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Property ID</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          Rs 00000
                        </span>
                        <a class="aa-secondary-btn" href="#">View Details</a>
                      </div>
                    </div>
                  </article>
                </li>
                 <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="#">
                      <img alt="img" src="img/item/4.jpg">
                    </a>
                    <div class="aa-tag for-sale">
                      For Sale
                    </div>
                    <div class="aa-properties-item-content">
                      <div class="aa-properties-info">
                        <span>5 Rooms</span>
                        <span>2 Beds</span>
                        <span>3 Baths</span>
                        <span>1100 SQ FT</span>
                      </div>
                      <div class="aa-properties-about">
                        <h3><a href="#">Property ID</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero ducimus quibusdam odit vitae.</p>                      
                      </div>
                      <div class="aa-properties-detial">
                        <span class="aa-price">
                          Rs 00000
                        </span>
                        <a class="aa-secondary-btn" href="#">View Details</a>
                      </div>
                    </div>
                  </article>
                </li>
              </ul>
            </div>
            <!-- Start properties content bottom -->
            <div class="aa-properties-content-bottom">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
          <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
              <form action="">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                   <option selected="" value="0">Category</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                    <option selected="" value="0">Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                    <option selected="" value="0">Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <!-- <div class="aa-single-filter-search">
                  <span>AREA (SQ)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper" class="example-val">100.00</span>
                  <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>                  
                </div> -->
               <!--  <div class="aa-single-filter-search">
                  <span>PRICE ($)</span>
                  <span>FROM</span>
                  <span id="skip-value-lower2" class="example-val">30.00</span>
                  <span>TO</span>
                  <span id="skip-value-upper2" class="example-val">100.00</span>
                  <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>      
                </div> -->
                <div class="aa-single-advance-search">
                  <input type="submit" value="Search" class="aa-search-btn">
                </div>
              </form>
            </div> 
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Populer Properties</h3>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Property ID</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                  <span>Rs 00000</span>
                </div>              
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Property Id</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                  <span>Rs 00000</span>
                </div>              
              </div>
              <div class="media">
                <div class="media-left">
                  <a href="#">
                    <img class="media-object" src="img/item/1.jpg" alt="img">
                  </a>
                </div>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#">Property Id</a></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>                
                  <span>Rs 00000</span>
                </div>              
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->

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

  </body>
</html>