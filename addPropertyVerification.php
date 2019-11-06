<?php 
require "connect.inc.php";
session_start();
if(isset($_POST['prop_for']) && isset($_POST['prop_type']) && isset($_POST['prop']) && isset($_POST['bhk']))
{
	$property_for=$_POST['prop_for'];
	$selected_property_type=$_POST['prop_type'];
	$selected_property=$_POST['prop'];
	$selected_bhk=$_POST['bhk'];
	if(!empty($property_for) && !empty($selected_property_type) && !empty($selected_property) && !empty($selected_bhk))
	{
		$_SESSION['basic_details']="basic_details_set";
		echo "ok";
	}else{
		echo "please fill in all the required details";
	}
}
 ?>