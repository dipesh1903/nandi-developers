$(document).ready(function(){
	$("#signup").on('click', function(){
		var error =$("#error");
		var fname=$("#fname").val();
		var lname=$("#lname").val();
		var pass=$("#pass").val();
		var repass=$("#re_pass").val();
		var term=$("#agree-term");
		if(fname!=""){
			if(fname.length <3)
			{
				error.html("Invalid First Name").addClass('error');
			}else{
				error.html("");
				if(lname !=""){
					error.html("");
					if(pass!="")
					{
						if(repass!="")
						{
							var return_message=password_validator(pass, repass);
							if(return_message==true)
							{
								if(term.is(":checked"))
								{
									$.ajax({
									type:"POST",
									url:"./brokerSignupVerification.php",
									data:{first_name:fname, last_name:lname, pass:pass},
										success:function(data){
											if(data=="redirecting to next step")
											{
												window.location.href="./brokerEmailVerification.php";
											}else{
												alert(data);
											}
										}
									});
								}else{
									error.html("Please accept terms and conditions to continue");
								}
								
							}else{
								error.html(return_message);
							}
						}else{
							error.html("Please re enter your password");
						}
					}else{
						error.html("Please set a password");
					}
				}else{
					error.html("Please enter your Last Name");
				}
			}
		}else{
		// $(".form-group:first").append('please enter your first name').addClass('error');
		 error.html("Please enter your First Name");
		}
	});
	
	function password_validator(pass, repass){
		var error =$("#error");
		if(pass.length >= 8)
		{
			if(pass.match(/^\S*$/))
			{
				if(pass.match(/\d/))
				{
					if(pass == repass){
						return true;
					}else{
						return "Passwords do not match";
					}
				}
				else{
					return "Password should contain at least one Number";
				}
			}else{
				return "White space is not allowed in Password";
			}
		}else{
			return "Password should have at least 8 characters";
		}
	}
});