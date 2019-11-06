<?php 
require "connect.inc.php";
require "brokerSignupClass.php";
	if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['pass']))
	{	
		session_destroy();
		session_start();
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$password=$_POST['pass'];
		$_SESSION['first_name']=$first_name;
		$_SESSION['last_name']=$last_name;
		$_SESSION['pass']=$password;
		printf("redirecting to next step");
	}
	if(isset($_POST['send_email_otp']) && isset($_POST['email']))
	{
		$email=$_POST['email'];
		$generated_email_otp=rand(100000, 999999);
		$_SESSION['email_otp']=$generated_email_otp;
		$_SESSION['email']=$_POST['email'];
		// $broker->get_broker_credentials($first_name, $last_name, $email, $phone ,$password);
		$check_message=check_for_account_email($link, $email);
		
		if($check_message=="No account exists with this Email")
		{
			// echo $authenticate_message=authenticate_broker();
			printf($check_message);
		}else{
			printf($check_message);
		}
	}
	
	if(isset($_POST['email_otp_code']))
	{
		$email=$_SESSION['email'];
		$query_email_otp="SELECT `email_otp` FROM `broker_verification` WHERE `email`='$email'";
		$result=$link->query($query_email_otp);
		$row= mysqli_fetch_assoc($result);
		$created_code=$row['email_otp'];
		$entered_code=$_POST['email_otp_code'];
		if($created_code == $entered_code)
		{
			$query="UPDATE `broker_verification` SET  
				`email_verified`=1 WHERE `email`='$email'";
				$link->query($query);
				$_SESSION['email_verified']=true;
			echo "email verified";
		}else{
			echo "wrong code";
		}
	}

	if(isset($_POST['resend_email_code']))
	{
		$email_address=$_SESSION['email'];
		$email_new_otp=rand(100000, 999999);
		$return_message=sendEmail($email_address, $email_new_otp);
		$query="UPDATE `broker_verification` SET  
				`email_otp`='$email_new_otp' WHERE `email`='$email_address'";
				$link->query($query);
		if($return_message=="email sent"){
			echo "New Code is sent to your email";	
		}else{
			echo "Sending email failed. Please try again.";
		}
	}

	if(isset($_POST['send_phone_otp']) && isset($_POST['phone_number']))
	{
		if(isset($_SESSION['email_verified']))
		{
			$phone=$_POST['phone_number'];
			$generated_phone_otp=rand(100000, 999999);
			$_SESSION['phone_otp']=$generated_phone_otp;
			$_SESSION['phone']=$phone;
			// $broker->get_broker_credentials($first_name, $last_name, $email, $phone ,$password);
			$check_message=check_for_account_phone($link, $phone);
			
			if($check_message=="No account exists with this Phone Numbersuccess")
			{
				// echo $authenticate_message=authenticate_broker();
				printf("No account exists with this Phone Number");
			}else{
				if($check_message=="Account exists with this Phone Number")
				{
					printf("Account exists with this Phone Number");
				}
				// else{
				// 	printf("There is a problem in sending the otp to your number, Please try again later");
				// }
			}
		}else{
			printf("Please verify your email first");
		}
	}
	if(isset($_POST['phone_otp_code']))
	{
		$email=$_SESSION['email'];
		$phone=$_SESSION['phone'];
		$entered_phone_otp=$_POST['phone_otp_code'];
		$query_email_otp="SELECT `phone_otp` FROM `broker_verification` WHERE `phone`='$phone' AND `email`='$email'";
		$result=$link->query($query_email_otp);
		$row= mysqli_fetch_assoc($result);
		$created_phone_otp=$row['phone_otp'];
		if($created_phone_otp == $entered_phone_otp)
		{
			$query="UPDATE `broker_verification` SET  
				`phone_verified`=1 WHERE `email`='$email' AND `phone`='$phone'";
				$link->query($query);
				$_SESSION['phone_verified']=true;
			echo "phone verified";
		}else{
			echo "wrong code";
		}
	}
	if(isset($_POST['resend_phone_code']))
	{
		$email_address=$_SESSION['email'];
		$phone_number=$_SESSION['phone'];
		$phone_new_otp=rand(100000, 999999);
		$return_message=sendMessage($phone_number, $phone_new_otp);
		$query="UPDATE `broker_verification` SET  
				`phone_otp`='$phone_new_otp' WHERE `email`='$email_address' AND `phone`='$phone_number'";
				$link->query($query);
		if($return_message=="success"){
			echo "New OTP is sent to your number";	
		}else{
			echo "Sending message failed. Please try again.";
		}
		
	}
	if(isset($_POST['signup']) && isset($_POST['res_addr']))
	{
		if(!isset($_SESSION['email_verified']))
		{
			echo "please verify your email address";
		}else{
			$email_address=$_SESSION['email'];
			$first_name=$_SESSION['first_name'];
			$last_name=$_SESSION['last_name'];
			$password=$_SESSION['pass'];
			$phone_number=$_SESSION['phone'];
			$residential_addr=$_POST["res_addr"];
			$office_address=$_POST['office_addr'];
			$name_code=substr($first_name, 0, 2);
			$random_code= rand(100000, 999999);
			$broker_id=strtoupper($name_code.$random_code);
			$dt = new DateTime();
			$now= $dt->format('Y-m-d H:i:s');
			$query="INSERT INTO `broker_personal` (`Sl_no`, `b_id`, `b_fname`, `b_lname`, `b_email`, `b_phone`, 
				`b_pass`, `b_res_addr`, `b_of_addr`, `b_profile_photo`, `b_aadhar`, `b_signup_time`) 
				VALUES (NULL, '$broker_id', '$first_name', '$last_name', '$email_address', '$phone_number',
				 '$password', '$residential_addr', '$office_address', NULL, NULL, '$now')";
			$query2="DELETE  FROM `broker_verification` WHERE `email`='$email_address'";
			if($link->query($query))
			{
				$link->query($query2);
				echo "signup successful";
			}else{
				echo "Something went wrong. Please try again later";
			}
		}

	}
 ?>