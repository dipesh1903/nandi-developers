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
  <section>
  <div class="container">
    <div class="row">
      <!-- <div class="wrapper"> -->
         <nav id="select_menu" class="col-md-3">
          <ul>
            <li><a href="#propertyDetails">Poperty Details</a></li>
            <li><a href="#location">Location</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#propertyDescription">Property Description</a></li>
            <li><a href="#uploadPhotos">Upload Photos</a></li>
          </ul>
        </nav>
      <div class="col-md-9 content_wrapper">
        <div class="content">
          <div id="propertyDetails" class="menu_view">
            <h3>Property Details</h3>
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
          <div id="location" class="menu_view">
            <h3>Property Location</h3>
            <h4>Property Address</h4>
            <div class="form-group" id="address_area">
              <div class="row">
                <div class="col-md-6">
                  <label for="pin">Pincode</label><span style="color:red">*</span>
                  <input type="text" id="pin" class="form-control"> 
                  <label for="locality">Street/Locality</label><span style="color:red">*</span>
                  <input type="text" id="locality" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="area">Area</label><span style="color:red">*</span>
                  <input type="text" id="area" class="form-control">
                  <label for="city">City</label><span style="color:red">*</span>
                  <input type="text" id="city" class="form-control"><br>
                  <input type="button" id="locate_btn" class="btn btn-primary" value="Locate on map">
                </div>
              </div>
            </div>
            <div class="row">
              <div id="map">
            
              </div>
            </div>  
          </div>  
          <!-- end of property location section -->
          <div id="features" class="menu_view">
            <h3>Property Features</h3>
            <div class="row">
              <div class="col-md-6">
                <div id="builtUpArea" class="material-input">
                  <input type="text" id="builtUpArea_input" placeholder="Built Up Area" required>
                  <span class="helper">sq. ft.</span>
                </div>
              </div>
              <div class="col-md-6">
                <div id="CarpetArea" class="material-input">
                  <input type="text" id="CarpetArea_input" placeholder="Carpet Area(optional)">
                    <span class="helper">sq. ft.</span>
                </div>
              </div>
            </div><br>
                
              <div class="row">
                <div class="col-md-6">
                  <div id="FloorNum" class="material-input">
                    <input type="text" id="FloorNum_input" placeholder="Floor No. (for apartment/villa)" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="TotalFloors" class="material-input">
                    <input type="text" id="TotalFloors_input" placeholder="Total floors(for apartment/villa)">
                  </div>
                </div>
              </div><br>

              <div class="row">
                <div class="col-md-6">
                  <div id="available_from" class="material-input">
                    <input id="available_from_input" placeholder="Available From" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="PropertyAge" class="material-input">
                    <input type="text" id="PropertyAge_input" placeholder="Age Of Property(optional)" >
                    <span class="helper">Years</span>
                  </div>
                </div>
              </div><br>
              
               <div class="row">
                <h4 style="margin-left:10px;color:purple">Commercials</h4>
                <div class="col-md-6">
                  <div id="rent" class="material-input">
                    <input type="text" id="rent_input" placeholder="Monthly Rent (optional)" >
                    <span class="helper">Rs</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div id="maintenance" class="material-input">
                    <input type="text" id="maintenance_input" placeholder="Maintenance Charge(optional)" >
                  </div>
                </div>
              </div><br>
              <div class="row">
                <div class="col-md-6">
                  <div id="security_deposit" class="material-input">
                    <input type="text" id="security_deposit_input" placeholder="Security Deposit(optional)" >
                  </div>
                </div>
              </div><br>

              <label for="furnish_type">Furnish Type(for apartments/villas)</label><br>
              <div id="furnish" class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary furnish_option">
                  <input type="radio" name="options" id="option1" autocomplete="off" > Fully Furnished
                </label>
                <label class="btn btn-secondary furnish_option">
                  <input type="radio" name="options" id="option2" autocomplete="off"> Semi Furnished
                </label>
                <label class="btn btn-secondary furnish_option">
                  <input type="radio" name="options" id="option3" autocomplete="off"> Unfurnished
                </label>
                <label class="btn btn-primary" id="furnish_reset">
                  <input type="radio" name="options" id="option3" autocomplete="off"> Reset
                </label>
              </div><br><br>

              <label for="tenant">preferred Tenant Type(for apartments/villas)</label><br>
              <div id="tenant" class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary tenant_option">
                  <input type="radio" name="options" id="option1" autocomplete="off" > Family
                </label>
                <label class="btn btn-secondary tenant_option">
                  <input type="radio" name="options" id="option2" autocomplete="off"> Bachelors
                </label>
                <label class="btn btn-secondary tenant_option">
                  <input type="radio" name="options" id="option3" autocomplete="off"> Company
                </label>
                <label class="btn btn-primary" id="tenant_reset">
                  <input type="radio" name="options" id="option3" autocomplete="off"> Reset
                </label>
              </div><br><br>
          </div>
          <!-- end of property features -->

          <div id="propertyDescription" class="menu_view">
            <h3>Property Description</h3>
            <div class="row">
              <div class="col-md-6">
                <h5 style="font-size:1em">Write a Description about the Property. (minimum 100 words)</h5>
                <textarea name="" id="description" cols="40" rows="14"></textarea>
              </div>
              <div class="col-md-6">
                <h4 style="color:purple">Sample Desription</h4>
                <div id="sample">
                  <p>Property LAYOUT9009 is spreads across 6 Acres with Plot dimensions of 30*40, 30*50 and other Premium Plots </p>
                  <p>Property LAYOUT9009 is a Boutique Plotted layout development of Nandi LDC Pvt Ltd which is strategically located 
                    off Mysore road and Magadi Road. The project is adjacent to BDA's Kempegowda Layout. The Project is approved by BMRDA with 
                    Landscaped gardens and Avenue trees.</p>
                  <p>The layout has facilities like:(underground electric cabling, advanced water and sewage system, 
                    good road connectivity, etc.)</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end of property description -->

          <div id="uploadPhotos" class="menu_view">
            <h3>Upload Property Photos</h3>
            <div id="photo_upload_div">
              <div class="upload_btn">
                <span ><img src="images/website/photo.png" alt="image"></span>
                <button class="btn btn-success" id="choose_image_btn"><span>+</span>Add Photos</button>
                <p>(max limit 5MB per image)</p>
                <p style="margin-right:60px">Upload at least 6 pics</p>
              </div>
              <form id="property_image_upload_form" action="addPropertyBackPage.php" method="post">
                <input type="file" name="property_photos" id="property_photos" multiple>
                <input type="submit">
              </form>
            </div>
          </div>


        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
  </section>
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
  
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpa92A10Q0fl0cgH42_ggV5IxxYznxJEE&callback=initMap">
    </script>
    <script src="javascript/addProperty.js"></script>l
  </body>
</html>