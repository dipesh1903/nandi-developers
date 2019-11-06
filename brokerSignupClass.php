<?php 
require "connect.inc.php";
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
//following code checks if any account is associated with the email address entered by the broker 
	function check_for_account_email($link, $email_address)
	{
		$query1="SELECT `b_email` FROM `broker_personal` WHERE `b_email`='$email_address'";
		if($run1=$link->query($query1))
		{
			if(mysqli_num_rows($run1) > 0)
			{
				printf("Account exists with this Email: ".$email_address);
			}else{
						printf("No account exists with this Email");
						$mail_message=authenticate_broker_email($link);
						// printf($mail_message);
			}
		}
	}

	 function sendEmail($email_address, $email_otp)
	{
		$to=$email_address;
		$otp=$email_otp;
		$subject="Email verification";
		$from="Nandi Land Developers and Constructors Pvt Ltd";
		$message=$otp." is your email verification code";
		$headers="from: Nandi Land Developers and Constructors Pvt Ltds";
		$handler=mail($to, $subject,$from,$message,$headers);
		if($handler)
		{
			return "email sent";
		}else{
			return "email not sent";
		}
	}
	
	function authenticate_broker_email($link)
	{
		$email=$_SESSION['email'];
		$query1="SELECT `email` FROM `broker_verification` WHERE `email`='".$email."'";
		if($run1=$link->query($query1))
		{
			if(mysqli_num_rows($run1) > 0)
			{
				return $mail_message=broker_verification_update_email($link);
			}else{
				return $mail_message=broker_verification_insert_email($link);
			}
		}	
	}
	 function broker_verification_insert_email( $link)
	{
		$email_address=$_SESSION['email'];
		$first_name=$_SESSION['first_name'];
		$last_name=$_SESSION['last_name'];
		$password=$_SESSION['pass'];
		$email_otp=$_SESSION['email_otp'];
		$query="INSERT INTO `broker_verification` (`Sl_no`, `first_name`, `last_name`, `email`,
		 `phone`, `password`, `email_otp`, `email_verified`, `phone_otp`, `phone_verified`) 
		VALUES (NULL, '$first_name', '$last_name', '$email_address', 
			NULL, '$password', '$email_otp', 1, NULL, 1)";

	   $link->query($query);
	   return $send_message=sendEmail($email_address, $email_otp);

	}
	 function broker_verification_update_email($link )
	{
		$email_address=$_SESSION['email'];
		$first_name=$_SESSION['first_name'];
		$last_name=$_SESSION['last_name'];
		$password=$_SESSION['pass'];
		$email_otp=$_SESSION['email_otp'];

		$query="UPDATE `broker_verification` SET  
				`first_name`='$first_name',
				`last_name`='$last_name',
				`email`='$email_address',
				`phone`='',
				`password`='$password',
				`email_otp`='$email_otp',
				`email_verified`=0,
				`phone_otp`='',
				`phone_verified`=0
				WHERE `broker_verification`. `email` = '$email_address'";
				$link->query($query);
				return $send_message=sendEmail($email_address, $email_otp);
	}

//following code checks if any account is associated with the phone number entered by the broker 
	function check_for_account_phone($link, $phone_number)
	{
		$query1="SELECT `b_phone` FROM `broker_personal` WHERE `b_phone`=$phone_number";
		if($run1=$link->query($query1))
		{
			if(mysqli_num_rows($run1) > 0)
			{
				printf("Account exists with this Phone Number ".$phone_number);
			}else{
				printf("No account exists with this Phone Number");
				$phone_message=authenticate_broker_phone($link);
				printf($phone_message);
			}
		}
	}
	function authenticate_broker_phone($link)
	{
		$phone=$_SESSION['phone'];
		$email=$_SESSION['email'];
		$query1="SELECT `email` FROM `broker_verification` WHERE `email`='$email'";
		if($run1=$link->query($query1))
		{
			if(mysqli_num_rows($run1) > 0)
			{
				return $phone_message=broker_verification_update_phone($link);
			}else{
				return $phone_message=broker_verification_insert_phone($link);
			}
		}	
	}

	function broker_verification_insert_phone( $link)
	{
		$first_name=$_SESSION['first_name'];
		$last_name=$_SESSION['last_name'];
		$password=$_SESSION['pass'];
		$phone_number=$_SESSION['phone'];
		$phone_otp=$_SESSION['phone_otp'];
		$query="INSERT INTO `broker_verification` (`Sl_no`, `first_name`, `last_name`,
		 `phone`, `password`, `email_verified`, `phone_otp`, `phone_verified`) 
		VALUES (NULL, '$first_name', '$last_name', 
			'$phone_number', '$password', 0, '$phone_otp', 0)";

	   $link->query($query);
	   return $send_message=sendMessage($phone_number, $phone_otp);

	}
	function broker_verification_update_phone($link )
	{
		$email_address=$_SESSION['email'];
		$phone_number=$_SESSION['phone'];
		$first_name=$_SESSION['first_name'];
		$last_name=$_SESSION['last_name'];
		$password=$_SESSION['pass'];
		$phone_otp=$_SESSION['phone_otp'];

		$query="UPDATE `broker_verification` SET  
				`first_name`='$first_name',
				`last_name`='$last_name',
				`phone`='$phone_number',
				`password`='$password',
				`phone_otp`='$phone_otp',
				`phone_verified`=0
				WHERE  `broker_verification`. `email` = '$email_address'";
				$link->query($query);
				return $send_message=sendMessage($phone_number, $phone_otp);
	}
	function sendMessage($phone, $otp)
	{
		$username = "nandildc@gmail.com";
		$hash = "5da222153f33a9173b3dfc20f586d768502ddf0c6ccf3032c6cf802154048daa";

		// Config variables. Consult http://api.textlocal.in/docs for more info.
		$test = "false";

		// Data for text message. This is the text message data.
		$sender = "NANDIL"; // This is who the message appears to be from.
		$numbers = $phone;
		$name=$_SESSION['first_name'];
		$otp=$otp; // A single number or a comma-seperated list of numbers
		$message ="Dear $name
 $otp is your phone number verification code.
Please enter this code in the specified field.
Cheers.";
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.textlocal.in/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$result=json_decode($result); // This is the result from the API
		return $result->status;
		curl_close($ch);
	}
?>