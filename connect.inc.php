<?php 
	$username="root";
	$password="";
	$host="localhost";
	$database="nandi_realts";
	$link=new mysqli($host, $username, $password, $database);
	if($link->connect_errno)
	{
		die("could not connect to the database");
	}
	else{
		
	}
?>