<?php
	// Authorisation details.
if(isset($_POST['number']) && isset($_POST['otp']))
{
	$username = "nandildc@gmail.com";
	$hash = "5da222153f33a9173b3dfc20f586d768502ddf0c6ccf3032c6cf802154048daa";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "false";

	// Data for text message. This is the text message data.
	$sender = "NANDIL"; // This is who the message appears to be from.
	$numbers = $_POST['number'];
	$name=$_POST['name'];
	$otp=$_POST['otp']; // A single number or a comma-seperated list of numbers
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
	echo $result->status;
	curl_close($ch);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <link type="stylesheet" href=""/>
    <title>SMS TEST</title>
  </head>
  <body>
    <form action="send-sms.php" method="post">
    	<input type="text" name="number" placeholder="phone number">
    	<input type="text" name="otp" placeholder="write your otp">
    	<input type="text" name="name" placeholder="write your name">
    	<input type="submit" value="Send ">
    </form>
  </body>
</html>