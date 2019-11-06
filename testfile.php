<?php 

$to="cs2cs121@gmail.com";
$otp="099988";
$subject="Email verification";
$from="Nandi Land Developers and Constructors Pvt Ltd";
$message=$otp." is your email verification code";
$headers="from: Nandi Land Developers and Constructors Pvt Ltds";
$handler=mail($to, $subject,$from,$message,$headers);
if($handler)
{
echo "email sent";
}else{
echo "email not sent";
}
?>