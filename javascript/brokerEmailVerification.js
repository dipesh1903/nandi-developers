$(document).ready(function(){
	var email="";
	var phone;
	var error_message=$("#error_email");
	$("#send_email_otp_btn").click(function(){
		email=$("#email").val();
		if(email !="")
		{
			if(email.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i))
			{
				$.ajax({
				type:"POST",
				url:"./brokerSignupVerification.php",
				data:{send_email_otp:"send_otp",email:email},
				success:function(data){
						if(data=="No account exists with this Email")
						{
							error_message.html("");
							$("#email").attr("disabled",true);
							$(".email_otp_hidden").css("display","inline-block");
							alert("OTP has been sent to your email "+email);
						}else{
							error_message.html(data+" <a href='./brokerLogin.php'>login?</a>");
						}
					}
				});
			}else{
					error_message.html("invalid email");
				}
		}else{
				error_message.html("please enter your email address");
			}
	});
	$("#edit_email").click(function(){
		$("#email").attr("disabled",false);
	})
	$("#email_otp_verify_btn").click(function(){
		var email_otp_code = $("#email_otp").val();
		$.ajax({
			type:"POST",
			url:"./brokerSignupVerification.php",
			data:{email_otp_code:email_otp_code},
			success:function(data){
				if(data=="email verified")
				{
					$(".email_section").html("Email Address Verified").css({"width":"99%","margin":"auto", "color":"green","font-weight":"bold"});
				}else{
					$("#email_otp_info").html("Wrong code. Please try again").css({"color":"red"});
				}
			}
		});
	});
	$("#resend_email_otp").click(function(){
		$.ajax({
			type:"POST",
			url:"./brokerSignupVerification.php",
			data:{resend_email_code:"send"},
			success:function(message){
				$("#email_otp_info").html(message).css("color","green");
				$("#email_otp").val("");
			}
		});
		return false; 
	});

	$("#send_phone_otp_btn").click(function(){
		phone=$("#phone").val();
		if(phone!="")
		{
			error_message.html("");
			if(phone.match(/[0-9]{10}/))
			{
				error_message.html("");
				$.ajax({
				type:"POST",
				url:"./brokerSignupVerification.php",
				data:{send_phone_otp:"send_otp",phone_number:phone},
				success:function(data){
						if(data=="No account exists with this Phone Numbersuccess")
						{
							error_message.html("");
							$("#phone").attr("disabled",true);
							$(".phone_otp_hidden").css("display","inline-block");
							alert("OTP has been sent to "+phone);
						}else{
							if(data=="Account already exists with this Phone Number")
							{
								error_message.html(data+" <a href='./brokerLogin.php'>login?</a>");
							}else{
								error_message.html(data);
							}
		
						}
					}
				});
			}else{
				error_message.html("Invalid phone number");
			}
		}else{
			error_message.html("please enter your phone number");
		}
	});
	$("#phone_otp_verify_btn").click(function(){
		var phone_otp=$("#phone_otp").val();
		if(phone_otp!="")
		{
			$.ajax({
				type:"POST",
				url:"./brokerSignupVerification.php",
				data:{phone_otp_code:phone_otp},
				success:function(data){
					if(data=="phone verified")
					{
						$(".phone_section").html("Phone number Verified").css({"width":"99%","margin":"auto", "color":"green","font-weight":"bold"});
					}else{
						$("#phone_otp_info").html("Wrong code. Please try again").css({"color":"red"});
					}
				}
			});
		}else{
			$("#phone_otp_info")=html("Please enter the otp!");
		}
	});
	$("#edit_phone").click(function(){
		$("#phone").attr("disabled",false);
	})
	$("#resend_phone_otp").click(function(){
		$.ajax({
			type:"POST",
			url:"./brokerSignupVerification.php",
			data:{resend_phone_code:"send"},
			success:function(message){
				$("#phone_otp_info").html(message).css("color","green");
				$("#phone_otp").val("");
			}
		});
		return false; 
	});
	$("#form_submit_btn").click(function(){
		var residential_address=$("#residential_address").val();
		var office_address=$("#office_address").val();
		if(residential_address=="")
		{
			alert("Please enter your Residential Address");
		}else{
			$.ajax({
				type:"POST",
				url:"./brokerSignupVerification.php",
				data:{signup:"", res_addr:residential_address, office_addr:office_address},
				success:function(data)
				{
					if(data=="signup successful")
					{
						window.location.href="./brokerProfile.php";
					}else{
						alert(data);
					}
				}
			});
		}
	});

});