<?php 

if(isset($_POST['lat']) && isset($_POST['lng']))
{
	$lat=$_POST['lat'];
	$lng=$_POST['lng'];
	if(!empty($lat) && !empty($lng))
	{
		echo "location saved";
	}else{
		echo "ERROR:google maps could not recognize the address";
	}
} 

?>