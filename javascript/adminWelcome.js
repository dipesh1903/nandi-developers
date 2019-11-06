$(document).ready(function(){
	var message="";
	var currentTime=new Date();
	var hours=currentTime.getHours();
	if(hours>=6 && hours<12)
	{
		message="Good morning sir";
	}
	if(hours>=12 && hours<17)
	{
		message="Good afternoon sir";
	}
	if(hours>=17 && hours<21)
	{
		message="Good evening sir";
	}
	if(hours>=21 && hours<6)
	{
		message="You are up late sir";
	}
	message.substr(0,1).toUpperCase()+message.substr(1);
	$("#greeting_message").html(message);
	$("#add_property").click(function(){
		window.location.href="addProperty.php";
	});
	$("#delete_property").click(function(){
		window.location.href="deleteProperty.php";
	});
	$("#manage_property").click(function(){
		window.location.href="manageProperty.php";
	});
	$("#view_brokers").click(function(){
		window.location.href="viewBrokers.php";
	});
});