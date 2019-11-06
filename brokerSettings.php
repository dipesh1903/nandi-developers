
<?php 
require "connect.inc.php";
session_start();
if(isset($_SESSION['email']))
{
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <link href="css/brokerSettings.css" rel="stylesheet"> 

	</head>
	  <body>
		<!-- navigation bar -->
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
				            <li class=""><a href="index.php">HOME</a></li>
				            <li class=""><a href="brokerProfile.php">GO TO MY PROFILE</a></li>
				          </ul>
				        </div><!--/.nav-collapse -->       
				      </div>          
				    </nav> 
				  </section>
				  <?php
				  $email=$_SESSION['email'];
                  $query="SELECT * FROM `broker_personal` WHERE `b_email`='$email'";
                  $result=$link->query($query);
                  $row=mysqli_fetch_assoc($result);
                  $_SESSION['aadhar']=$row['b_aadhar']; 
				  $f_name=$row['b_fname'];
				  $l_name=$row['b_lname'];
				  $email=$_SESSION['email'];
				  $phone=$row['b_phone'];
				  $id=$row['b_id'];
				   ?>
		<!-- navigation bar end -->
		<section id="aa-form-area">
			<h3 id="heading1">Personal Details</h3>
			<div class="container form_box">
		    	<div class="row">
		    			<div class="row">
		    				<div class="col-md-6">
		    					<div class="form-group">
			                      <label for="fullname">Full Name</label>
			                      <input type="text" class="form-control" id="fullname" placeholder="" value="<?php echo $f_name." ".$l_name; ?>" disabled="$f_name">
			                    </div>
		    				</div>
		    				<div class="col-md-6">
		    					<div class="form-group">
			                      <label for="fullname">Email Address</label>
			                      <input type="text" class="form-control" id="fullname" placeholder="" value="<?php echo $email; ?>" disabled="">
			                    </div>
		    				</div>
		    			</div>
		    			<div class="row">
		    				<div class="col-md-6">
		    					<div class="form-group">
			                      <label for="fullname">Phone Number</label>
			                      <input type="text" class="form-control" id="fullname" placeholder="" value="<?php echo $phone; ?>" disabled="">
			                    </div>
		    				</div>
		    				<div class="col-md-6">
		    					<div class="form-group">
			                      <label for="fullname">Broker ID</label>
			                      <input type="text" class="form-control" id="fullname" placeholder="" value="<?php echo $id; ?>" disabled="">
			                    </div>
		    				</div>
		    			</div>
		    			<div class="row change_password">
		    				<div class="col-md-6">
		    					<div class="form-group">
		    					  <p id="error_message"></p>
			                      <label for="existing_pass">Change Password</label>
			                      <input type="text" class="form-control" id="existing_pass" placeholder="Exisiting Password" ><br>
			                      <input type="text" class="form-control" id="new_pass" placeholder="New Password" ><br>
			                      <input type="text" class="form-control" id="repeated_pass" placeholder="Re-enter Password" >
			                    </div>
			                    <input type="button" id="change_password_btn" class="btn btn-primary" value="Change Password">
		    				</div>
		    				<div class="col-md-6">
		    					<div class="form-group">
			                      <label for="fullname">Upload Aadhar Card</label><span style="color:red">*</span>
			                      <form id="aadhar_uploader" action="profile_pic_upload.php" method="post">
			                      <div class="row">
			                      	<div class="col-md-6">
		                      		 <?php
				                      if(!is_null($_SESSION['aadhar']))
				                      { 
				                      	$aadhar=$_SESSION['aadhar'];
				                      	?>
			                    		<input type="file" class="" name="aadhar_card" id="aadhar_input" placeholder="" disabled="" >
			                    	<?php 
			                    	}else{
			                    		?>
			                    	<input type="file" class="" name="aadhar_card" id="aadhar_input" placeholder="" >
			                    	<?php 
			                    	}
			                    	 ?>
			                      	</div>
			                      	<div class="col-md-6">
			                      		<input type="submit"class="btn btn-primary" id="aadhar_upload_btn" value="Upload Aadhar">
			                      	</div>
			                      </div>
			                      </form>
			                      <?php
			                      if(!is_null($_SESSION['aadhar']))
			                      { 
			                      	$aadhar=$_SESSION['aadhar'];
			                      	?>
									<img src='<?php echo "images/aadhar_cards/".$aadhar; ?>' id="aadhar_card" alt="" disabled="">
								   <?php 
								   }
								   ?>
			                    </div>
		    				</div>
		    			</div>
		    			
		    	</div>
		   </div>
		</section>
	   
	</div>
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
		  <script type="text/javascript" src="javascript/brokerSettings.js"></script>
  </body>
</html>
<?php  
}  else{
    header("Location:index.php");
  }
 ?>