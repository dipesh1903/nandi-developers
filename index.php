<?php 
session_start();
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

    <link href="css/index.css" rel="stylesheet"> 

   
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
  <!-- <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div> -->
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
            <?php 
              if(!isset($_SESSION['email']))
              {
             ?>                                         
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">BROKER <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="brokerSignup.php">BROKER SIGNUP</a></li>
                <li><a href="brokerLogin.php">BROKER LOGIN</a></li>                                            
              </ul>
            </li>
            <?php 
            }
             ?>
              
            <li><a href="contact.php">CONTACT</a></li>
           <!-- <li><a href="404.html">404 PAGE</a></li> -->
           <?php 
           if(isset($_SESSION['email']))
           {
            ?>
           <li class="dropdown" id="broker_name">
              <a  class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">
                <i class="fa fa-user"></i><?php echo " ".strtoupper($_SESSION['first_name']) ?><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">                
                <li><a href="brokerProfile.php">Go to my profile</a></li>
                <li><a href="" id="logout_btn">logout</a></li>                                            
              </ul>
            </li>
             <?php 
              }
               ?>
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->

  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="images/website/background-image.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Top class plots/Layouts</span>
            <h2 class="aa-top-slider-title">BDA APPROVED</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Off mysore road, (Bangalore)</p>
            <!-- <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">R460,000</p> -->
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="images/website/rent.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Rent</span>
            <h2 class="aa-top-slider-title">House/apartments/rooms</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Bangalore</p>
            <!-- <span class="aa-top-slider-off">30% OFF</span> -->
            <!-- <p class="aa-top-slider-price">$460,000</p> -->
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
        <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="images/website/construction2.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Under Construction Buildings</span>
            <h2 class="aa-top-slider-title">BOOK NOW</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>In and around Bangalore</p>
            <!-- <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p> -->
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->       
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="images/website/duplex.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex Houses</span>
            <h2 class="aa-top-slider-title">from 1200 Sq Ft</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Vijayanagara, Kengeri and other areas</p>
            <!-- <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p> -->
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->        
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="images/website/lease.jpg" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">LEASE</span>
            <h2 class="aa-top-slider-title">House/villas</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Bangalore</p>
            <!-- <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p> -->
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
         <!-- Top slider single slide -->
        <div class="aa-top-slider-single">
          <img src="img/slider/6.jpg" alt="img">
          <!-- Top slider content -->
         <!--  <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg">Duplex</span>
            <h2 class="aa-top-slider-title">1560 Square Feet</h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
            <span class="aa-top-slider-off">30% OFF</span>
            <p class="aa-top-slider-price">$460,000</p>
            <a href="#" class="aa-top-slider-btn">Read More <span class="fa fa-angle-double-right"></span></a>
          </div> -->
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select id="I_want">
                   <option value="#" selected>I want to</option>
                    <option value="buy">Buy</option>
                    <option value="rent">Rent</option>
                    <option value="lease">Lease</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select id="type1">
                    <option value="0" selected>Property Type</option>
                    <option value="residential">Residential</option>
                    <option value="commercial">Commercial</option>
                    <option value="others">Others</option>
                  </select>
              </div>
              </div>
              <!-- <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="" id="">
                    <option value="">Type</option>
                  </select>
                 </div>
              </div> -->
              <div class="col-md-2 " id="check_selector">
                <div class="dropdown aa-single-advance-search" id="dropdown_btn">
                  <a class="dropdown-toggle" id="dropdwon_toggle" data-toggle="dropdown" href="">type <span class="caret"></span></a>
                  <ul class="dropdown-menu" id="dropdown_menu" role="menu">                
                    <li id="residential">
                      <div>
                        <p>RESIDENTIAL</p>
                        <div>
                           <input type="checkbox" id="flat">Flat <br>
                           <div id="bhkf" class="bhk">
                              <input type="checkbox" id="1bhkf">1BHK
                              <input type="checkbox" id="2bhkf">2BHK <br>
                              <input type="checkbox" id="3bhkf">3BHK
                              <input type="checkbox" id=">3bhkf">>#BHK <br>
                           </div>
                        </div>
                        <div>
                          <input type="checkbox" id="house">House/Villa <br>
                          <div id="bhkh" class="bhk">
                            <input type="checkbox" id="1bhkh">1BHK
                            <input type="checkbox" id="2bhkh">2BHK <br>
                            <input type="checkbox" id="3bhkh">3BHK
                            <input type="checkbox" id=">3bhkh">>3BHK <br>
                          </div>
                        </div>
                        <input type="checkbox" id="plot">Plot/Land <br>
                      </div>
                    </li>
                    <li id="commercial">
                      <div>
                        <p>COMMERCIAL</p>
                        <input type="checkbox" id="office">Office Space <br>
                        <input type="checkbox" id="shop">Shop/Showroom <br>
                        <input type="checkbox" id="com_land">Commercial Land <br>
                      </div>
                    </li>
                    <li id="others">
                      <div>
                        <p>OTHERS</p>
                        <input type="checkbox" id="agri">Agricultural Land <br>
                        <input type="checkbox" id="farm">Farm House <br>
                        <input type="checkbox" id="layout">Layouts <br>
                      </div>
                    </li>                                            
                  </ul>
                </div>
                <!-- <div id="residential">
                  <p>RESIDENTIAL</p>
                  <input type="checkbox" id="flat">Flat
                  <input type="checkbox" id="house">House/Villa
                  <input type="checkbox" id="plot">Plot/Land
                </div>
                <div id="commercial">
                  <p>COMMERCIAL</p>
                  <input type="checkbox" id="office">Office Space
                  <input type="checkbox" id="shop">Shop/Showroom
                  <input type="checkbox" id="com_land">Commercial Land
                </div>
                 <div id="others">
                   <p>OTHERS</p>
                  <input type="checkbox" id="agri">Agricultural Land
                  <input type="checkbox" id="farm">Farm House
                  <input type="checkbox" id="layout">Layouts
                 </div>
                 <button class="btn btn-link" id="done">Done</button> -->
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search">
                </div>
              </div>
            </div>
          </div>
         <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-12">
              <div class="aa-single-filter-search">
                <span>PRICE RANGE</span>
                <span>FROM</span>
                <!-- <span id="skip-value-lower" class="example-val">00000</span> -->
                <input type="text" name="" id="budget_from">
                <span>TO</span>
                <input type="text" name="" id="budget_to">
                <!-- <span id="skip-value-upper" class="example-val">00000</span> -->
                <!-- <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background"> -->
                </div>                  
              </div>
            </div>
            <!-- <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">100.00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>      
              </div>
            </div> -->
          </div>  
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->
  <section id="aa-premium">
    <div class="container">
      <div class="row">
        <div class="col-12 premium">
          <strong>PREMIUM</strong>
          <h4>property</h4>
        </div>
      </div>
    </div>
  </section>
  <section id="aa-latest-property">
    <div class="container">
      <div class="row latest-property">
        <div class="col-12 col-md-5">
          <h1 id="latest_heading">latest property</h1>
          <h1>In one of bangalore's sort after places.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ipsum, officiis quaerat minima 
            nihil consectetur hic ad, nobis eum quisquam mollitia similique magnam. Quam, quos.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem earum unde minima laborum 
              expedita officiis explicabo ducimus sapiente, esse fugit ea adipisci repellendus quia exercitationem!</p>
              <button class="btn btn-primary" href="#">View Details</button>
        </div>

        <div class="col-12 col-md-7">
          <div class="latest_outer">
            <div class="latest_slider">
              <div>
                <img src="images/website/architecture.jpg" alt="" class="img-responsive latest_image">
              </div>
              <div>
                <img src="images/website/back1.jpg" alt="" class="img-responsive latest_image">
              </div>
              <div>
                <img src="images/website/brick_wall.jpg" alt="" class="img-responsive latest_image">
              </div>
              <div>
                <img src="images/website/layout-min.jpg" alt="" class="img-responsive latest_image">
              </div>
              <div>
                <img src="images/website/villas-min.jpg" alt="" class="img-responsive latest_image">
              </div>
              <div>
                <img src="images/website/lease.jpg" alt="" class="img-responsive latest_image">
              </div>
              <div>
                <img src="images/website/rent.jpg" alt="" class="img-responsive latest_image">
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 
    <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="images/website/architecture.jpg" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>About Us</h2>
                    <span></span>
                  </div>
                  <p>Nandi Realt is a dedicated personal service company, offering extensive support and assistance to both 
                    corporate and individual clients in Bangalore.
                    With our long term involvement and experience here, we believe we can provide the comprehensive and
                    friendly service to our customers.</p>
                  <p>Whilst we all love the new technology that allows us to constantly upgrade our website
                    and the online experience it can offer, we all truly believe we are in a ‘people’ 
                    business. 
                    Most of us have been through the process of finding a property we deserve, 
                    so we understand fully the stresses and concerns involved. 
                    Therefore we endeavour to provide as smooth a transition as possible. Our business is spread
                    all across Bangalore.<em>Kannahalli BDA Approves</em>
                    and <em>Muddayanapalya BMRDA Approves</em> are some locations among them.</p>                  
                  <!-- <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->
 <!-- why nandi -->
  <section id="aa-why-nandi">
   <div class="container">
     <div class="row">
       <div id="why_nandi">
        <div class="why-nandi-overlay"></div>
         <div class="col-12 col-md-6">
           <div class="aa-border">
            <div class="aa-border-inner">
              <h2>WHY</h2>
             <h1>NANDI LAND DEVELOPERS AND CONSTRUCTORS</h1>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Ad modi dicta aut delectus, totam illo dolorem vel neque, voluptatum id deleniti adipisci quae expedita incidunt.</p>
            </div>
           </div>
         </div>
         <div class="col-12 col-md-6">
          <div class="row ">
            <div class="fecilities">
              <ul id="fecilities">
                <li><i class="fa  fa-3x fa-check"></i>Ready to register properties.</li>
                <li><i class="fa  fa-3x fa-check"></i>Underground electric cabling.</li>
                <li><i class="fa  fa-3x fa-check"></i>All the facilities you deserve.</li>
                <li><i class="fa  fa-3x fa-check"></i>Ease of connectivity.</li>
                <li><i class="fa  fa-3x fa-check"></i>Top class amenities.</li>
                <li><i class="fa  fa-3x fa-check"></i>Advance water and sewage system.</li>
                <li><i class="fa  fa-3x fa-check"></i>Designed by top engineers.</li>
              </ul>
            </div>
          </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- why nandi end -->
  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Our Service</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Sale</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-key"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Rent</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Development</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-unlock"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Lease</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Service section -->

  <!-- Promo Banner Section -->
  <section id="aa-promo-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>Find Your Best Property</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis quibusdam numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius repellat id!</p>
            <a href="#" class="aa-view-btn">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo Banner Section -->

  <!-- Our Agent Section-->
  <section id="aa-agents">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-agents-area">
            <div class="aa-title">
              <h2>Our Agents</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- agents content -->
            <div class="aa-agents-content">
              <ul class="aa-agents-slider">
                <li>
                  <div class="aa-single-agents">
                    <!-- <div class="aa-agents-img">
                      <img src="img/agents/agent-1.png" alt="agent member image">
                    </div> -->
                    <div class="aa-agetns-info">
                      <h4><a href="#">Chethan Shankar</a></h4>
                      <!-- <span>Top Agent</span> -->
                      <!-- <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <!-- <div class="aa-agents-img">
                      <img src="img/agents/agent-5.png" alt="agent member image">
                    </div> -->
                    <div class="aa-agetns-info">
                      <h4><a href="#">Chethan Shankar</a></h4>
                      <!-- <span>Expert Agent</span> -->
                      <!-- <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <!-- <div class="aa-agents-img">
                      <img src="img/agents/agent-3.png" alt="agent member image">
                    </div> -->
                    <div class="aa-agetns-info">
                      <h4><a href="#">Chethan Shankar</a></h4>
                      <!-- <span>Director</span> -->
                     <!--  <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
                </li>
                <li>
                  <div class="aa-single-agents">
                    <!-- <div class="aa-agents-img">
                      <img src="img/agents/agent-4.png" alt="agent member image">
                    </div> -->
                    <div class="aa-agetns-info">
                      <h4><a href="#">Chethan Shankar</a></h4>
                      <!-- <span>Jr. Agent</span> -->
                     <!--  <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-single-agents">
                    <!-- <div class="aa-agents-img">
                      <img src="img/agents/agent-1.png" alt="agent member image">
                    </div> -->
                    <div class="aa-agetns-info">
                      <h4><a href="#">Chethan Shankar</a></h4>
                      <!-- <span>Top Agent</span> -->
                      <!-- <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div> -->
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-testimonial-area">
            <div class="aa-title">
              <h2>What Client Say</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis!</p>
            </div>
            <!-- testimonial content -->
            <div class="aa-testimonial-content">
              <!-- testimonial slider -->
              <ul class="aa-testimonial-slider">
                <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/testimonial-1.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>Chethan Shankar</p>
                      <span>Client</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/testimonial-3.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>Chethan</p>
                      <span>Client</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="img/testimonial-2.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>Chethan Shankar</p>
                      <span>Client</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Client Testimonial -->

  <!-- Client brand -->
<!--   <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-4.png" alt="brand image">
                </div>
              </li>
               <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="img/client-brand-4.png" alt="brand image">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Client brand -->

  <!-- Latest blog -->
  <!-- <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title">
              <h2>Latest News</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus. Accusantium, nostrum!</p>
            </div>
            <div class="aa-latest-blog-content">
              <div class="row"> -->
                <!-- start single blog -->
                <!-- <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/blog-img-1.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>
                   
                  </article>
                </div> -->
                <!-- start single blog -->
                <!-- <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/blog-img-2.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div> -->
                <!-- start single blog -->
                <!-- <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="img/blog-img-3.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Latest blog -->

  <!-- Footer -->
  <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d53729.3039044551!2d77.49954494163477!3d12.954931195497707!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e822ca29c99%3A0xc70da3655365f6e!2s80+Feet+Main+Rd%2C+Nagarbhavi%2C+Bengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1549463182403" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
  <script type="text/javascript"src="javascript/index.js"> </script>

  </body>
</html>
