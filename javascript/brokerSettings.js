$(document).ready(function() {
	$("#image_input").change(function(obj){
		imageObj=obj;
	$("image_submit").click();
	
	});
	$("#image_uploader").on("submit", function(e){
		e.preventDefault();
		var formdata=new FormData(e.target);
		// console.dir(e.target);
		$.ajax({
			type:"post",
			url:"profile_pic_upload.php",
			data:formdata,
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,
			success:function(data)
			{
				if(data=="Profile picture updated")
				{
					if(imageObj.target.files[0])
					{
						var fileReader = new FileReader();
						fileReader.readAsDataURL(imageObj.target.files[0]);
						fileReader.onload=function()
						{
							$("#profile_image").attr("src",fileReader.result);
						}
						alert(data);	
					}
				}else{
							alert(data);
						}
			}
		});
	});


	$("#aadhar_input").change(function(obj){
		imageObj=obj;
		});
	$("#aadhar_upload_btn").click(function(){
	
	});
	$("#aadhar_uploader").on("submit", function(e){
		e.preventDefault();
		var formdata=new FormData(e.target);
		// console.dir(e.target);
		$.ajax({
			type:"post",
			url:"profile_pic_upload.php",
			data:formdata,
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,
			success:function(data)
			{
				if(data=="aadhar card updated")
				{
					if(imageObj.target.files[0])
					{
						var fileReader = new FileReader();
						fileReader.readAsDataURL(imageObj.target.files[0]);
						fileReader.onload=function()
						{
							$("#aadhar_card").attr("src",fileReader.result);
						}
						alert(data);	
					}
				}else{
							alert(data);
						}
			}
		});
	});
	$("#change_password_btn").click(function(){
		var existing_pass=$("#existing_pass").val();
		var new_pass=$("#new_pass").val();
		var repeated_pass=$("#repeated_pass").val();
		var error_message=$("#error_message");
		if(existing_pass!="")
		{
			error_message.html("");
			$.ajax({
					type:"post",
					url:"profile_pic_upload.php",
					data:{existing_password:existing_pass},
					success:function(data)
					{
						if(data=="entered password is correct")
						{
							var return_message=password_validator_function(new_pass, repeated_pass);
							if(return_message==true)
							{
								$.ajax({
									type:"post",
									url:"profile_pic_upload.php",
									data:{update_password:new_pass},
									success:function(data)
									{
										if(data="password updated")
										{
											alert("password updated successfully. You have to login again with the new password...!");
											$.ajax({
												type:"post",
												url:"logout.php",
												data:{logout:"logout"},
												success:function()
												{
													window.location.href='index.php';
												}
											});
										}else{
											alert(data);
										}
									}
								});
							}else{
								error_message.html(return_message);
							}
						}else{
							error_message.html(data);
						}
					}
				});
		}else{
			error_message.html("existing password field cannot be empty...!");
		}
	});
		function password_validator_function(pass, repass){
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
					return "New password should contain at least one Number";
				}
			}else{
				return "White space is not allowed in New Password";
			}
		}else{
			return "New password should have at least 8 characters";
		}
	}

});