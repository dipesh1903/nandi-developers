<?php

session_start();
if(isset($_SESSION['email']))
{
	require "connect.inc.php";

		if(isset($_FILES["profile_pic"]["name"]))
		{
		$validextensions = array("jpeg", "jpg", "png");
		$temporary = explode(".", $_FILES["profile_pic"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["profile_pic"]["type"] == "image/png") || ($_FILES["profile_pic"]["type"] == "image/jpg") || 
			($_FILES["profile_pic"]["type"] == "image/jpeg")) && ($_FILES["profile_pic"]["size"] < 10000000)//Approx. 100kb files can be uploaded.
		&& in_array($file_extension, $validextensions)) {
		if ($_FILES["profile_pic"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["profile_pic"]["error"] . "<br/><br/>";
		}
		else
		{
		$sourcePath = $_FILES['profile_pic']['tmp_name']; // Storing source path of the file in a variable
		$target_name= uniqid().".".$file_extension;
		$targetPath = "images/profile_pics/".$target_name; // Target path where file is to be stored
		move_uploaded_file($sourcePath,$targetPath) ;
		$email=$_SESSION['email']; // Moving Uploaded file
		$query="UPDATE `broker_personal` SET `b_profile_photo`='$target_name' WHERE `b_email`='$email'";
		if($link->query($query))
		{
			echo "Profile picture updated";	
		}
		// echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
		// echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
		// echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		// echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
		}
		}
		else
		{
		echo "invalid file size or type";
		}
		}



		if(isset($_FILES["aadhar_card"]["name"]))
		{
		$validextensions = array("jpeg", "jpg", "png");
		$temporary = explode(".", $_FILES["aadhar_card"]["name"]);
		$file_extension = end($temporary);
		if ((($_FILES["aadhar_card"]["type"] == "image/png") || ($_FILES["aadhar_card"]["type"] == "image/jpg") || 
			($_FILES["aadhar_card"]["type"] == "image/jpeg")) && ($_FILES["aadhar_card"]["size"] < 10000000)//Approx. 100kb files can be uploaded.
		&& in_array($file_extension, $validextensions)) {
		if ($_FILES["aadhar_card"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["aadhar_card"]["error"] . "<br/><br/>";
		}
		else
		{
		$sourcePath = $_FILES['aadhar_card']['tmp_name']; // Storing source path of the file in a variable
		$target_name= uniqid().".".$file_extension;
		$targetPath = "images/aadhar_cards/".$target_name; // Target path where file is to be stored
		move_uploaded_file($sourcePath,$targetPath) ;
		$email=$_SESSION['email']; // Moving Uploaded file
		$query="UPDATE `broker_personal` SET `b_aadhar`='$target_name' WHERE `b_email`='$email'";
		if($link->query($query))
		{
			echo "aadhar card updated";	
		}
		// echo "<br/><b>File Name:</b> " . $_FILES["file"]["name"] . "<br>";
		// echo "<b>Type:</b> " . $_FILES["file"]["type"] . "<br>";
		// echo "<b>Size:</b> " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		// echo "<b>Temp file:</b> " . $_FILES["file"]["tmp_name"] . "<br>";
		}
		}
		else
		{
		echo "invalid file size or type";
		}
		}


		//section to check whether the entered password matches with the existing password
		if(isset($_POST['existing_password']))
		{
			$entered_password=mysqli_escape_string($link,$_POST['existing_password']);
			$email=$_SESSION['email'];
			$query1="SELECT `b_pass` FROM `broker_personal` WHERE `b_email`='$email'";
			$result1=$link->query($query1);
			$row1=mysqli_fetch_assoc($result1);
			$existing_password=$row1['b_pass'];
			if($entered_password==$existing_password)
			{
				echo "entered password is correct";
			}else{
				echo "entered password do not match the existing password";
			}
		}


		// section to update the password
		if(isset($_POST['update_password']))
		{
			$new_pass=$_POST['update_password'];
			$email=$_SESSION['email'];
			$query2="UPDATE `broker_personal` SET `b_pass`='$new_pass' WHERE `b_email`='$email'";
			if($result2=$link->query($query2))
			{
				echo "password updated";
			}
		}

} 

?>