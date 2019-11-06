<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION['first_name']))
{
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/brokerEmailVerification.css"/>
    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">
    <title>Nandi Realts</title>
    <script type="text/javascript" src="javascript/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="javascript/brokerEmailVerification.js"></script>
	</head>
  <div class="container-fluid logo-div "></div>
  <body>
	<!-- navigation bar -->

	<!-- navigation bar end -->
   <div class="container">
    <div class="row d-flex">
           
                <form  class="form form-group">
                     <h1 class="">One more step to go</h1>
                     <p id="error_email"></p>
                    <h3 id="clock"></h3>
                    <div class="row email_section">
                      <?php  
                        if(!isset($_SESSION['email_verified']))
                            {
                                ?>
                        <div class="col-sm-12 col-md-6 email_label_section">
                            <label for="email">Enter your email address:</label>
                            <label class="email_otp_label email_otp_hidden" for="email_otp">Enter 6 digit code sent to your email:
                            </label>
                            
                        </div>
                        <div class="col-sm-12 col-md-6 email_btn_section">
                              <input id="email" type="email"  name="email" placeholder="Your email address">
                              <input id="send_email_otp_btn" class="btn btn-primary " type="button"  value="send otp">
                              <input id="edit_email" type="button" class="btn btn-link email_otp_hidden" value="Edit email">
                              <input id="email_otp" class="email_otp_hidden" type="text" placeholder="######"  maxlength="6">
                              <input id="email_otp_verify_btn" class="btn btn-success email_otp_hidden" type="button"  value="verify">
                            <p id="email_otp_info"></p>
                            <button class="btn btn-link email_otp_hidden"id="resend_email_otp">Resend Code</button>
                        </div> 
                        <?php 
                              }else{
                                  echo "<p style='color:green;font-weight:bold;width:200px;margin:auto;'>Email Address Verified</p>";
                              }
                           ?>                       
                    </div>

                     <div class="row phone_section">
                      <?php 
                      if(!isset($_SESSION['phone_verified']))
                      {
                        ?>
                        <div class="col-sm-12 col-md-6 phone_label_section">
                            <label for="phone">Enter your phone number:</label>
                            <label class="phone_otp_label phone_otp_hidden" for="phone_otp">Enter 6 digit code sent to your Phone Number:
                            </label>
                            
                        </div>
                        <div class="col-sm-12 col-md-6 phone_btn_section">
                            <input id="phone" type="phone"  name="phone" placeholder="Your phone number">
                            <input id="send_phone_otp_btn" class="btn btn-primary " type="button"  value="send otp">
                            <input id="edit_phone" class="btn btn-link phone_otp_hidden" type="button"  value="Edit Phone">
                            <input id="phone_otp" class="phone_otp_hidden" type="text" placeholder="######"  maxlength="6">
                            <input id="phone_otp_verify_btn" class="btn btn-success phone_otp_hidden" type="button"  value="verify">
                            <p id="phone_otp_info"></p>
                            <button class="btn btn-link phone_otp_hidden" id="resend_phone_otp">Resend Code</button>
                        </div>  
                        <?php
                            }else{
                                  echo "<p style='color:green;font-weight:bold;width:200px;margin:auto;'>Phone Number Verified</p>";
                              } 
                           ?>                      
                    </div>

                    <div class="row address_section">
                        <div class=" residential_addr col-sm-12 col-md-6">
                           <label  for="residential_address">Residetial Address:</label>
                           <textarea class=" address form-control" name="residential_address" id="residential_address" cols="30" rows="3"></textarea> 
                        </div>
                        <div class="office_addr col-sm-12 col-md-6">
                           <label  for="office_address">Office Address:</label>
                           <textarea class="address form-control" name="office_address" id="office_address" cols="30" rows="3" placeholder="(optional)"></textarea> 
                        </div>
                    </div>
                   <input class="btn btn-primary col-sm-2 offset-xl-8" type="button" id="form_submit_btn" name="submit" value="Submit">
                </form>
    </div>
   </div>
  </body>
</html>
<?php  
}  else{
    header("Location:index.php");
  }
 ?>