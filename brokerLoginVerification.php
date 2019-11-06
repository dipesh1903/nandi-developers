<?php 
session_start();
require "connect.inc.php";
if(isset($_POST['email_address']) && isset($_POST['password']))
{
	$email=mysqli_real_escape_string($link,$_POST['email_address']);
	$password=mysqli_real_escape_string($link,$_POST['password']);

	$query="SELECT * FROM `broker_personal` WHERE `b_email`='$email'";
	if($run=$link->query($query))
	{
		if(mysqli_num_rows($run)>0)
		{
			$row=mysqli_fetch_assoc($run);
			if($password==$row['b_pass'])
			{
				$_SESSION['email']=$row['b_email'];
				echo "login successful";
			}else{
				echo "Wrong password";
			}
		}else{
			echo "Wrong email id";
		}
	}else{
		echo "something went wrong";
	}
	
}
 ?>