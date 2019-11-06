$(document).ready(function(){
	$("#login").click(function(){
		var error =$("#error");
		var email=$("#email").val();
		var pass=$("#pass").val();
		if(email!="")
		{
			error.html("");
			if(pass!="")
			{
				error.html("");
				if(email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i))
				{
					$.ajax({
						type:"post",
						url:"./brokerLoginVerification.php",
						data:{email_address:email, password:pass},
						success:function(data)
						{
							if(data=="login successful")
							{
								window.location.href="./brokerProfile.php";
							}else{
								error.html(data);
							}
						}
					});
				}else{
					error.html("Invalid email id");
				}
			}else{
				error.html("Please enter your password");
			}
		}else{
			error.html("Please enter your registered email");
		}
	});
});