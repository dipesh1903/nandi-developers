$(document).ready(function(){
	var imageObj;
	$("#camera_icon").click(function(){
		$("#image_input").click();
	});
	$("#image_input").change(function(obj){
		imageObj=obj;
		$("#image_submit").click();
		
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
	$("#logout_btn").click(function(){
		$.ajax({
			type:"post",
			url:"logout.php",
			data:{logout:""},
			success:function()
			{
				window.location.href="index.php";
			}
		});
	});
});