$(document).ready(function()
	{
	var selected_business="";
	$("#type1").change(function(){
		selected_business = $(this).val();
	});
	$("#dropdown_btn").click(function()
	{
		var menu=$("#dropdown_menu li");
		menu.each(function(){
			var id=$(this).attr("id");
			if(id==selected_business)
			{
				$("#"+id).css("display", "inline");
			}else{
				$("#"+id).css("display", "none");
			}
		});
	});
	var flat_house=$("#flat,#house");
	flat_house.each(function(){
		$(this).change(function(){
			if($(this).is(":checked"))
			{
				var show=$(this).siblings();
				$(show).css("display","block");
			}else{
				var show=$(this).siblings();
				$(show).css("display","none");
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