$(document).ready(function(){
	var selected_menu="basic_details";
	var property_for="";
	var selected_property="";
	var selected_property_type="residential";
	var selected_bhk="";
	var bhk="";
	var error="";
	
	$("#property_type label").click(function(){
		$("#property_type label").css('color','black');
		$(this).css('color','blue');
		 selected_property_type=$(this).attr("class");
		$("#property_type_box .row").each(function(){
			var selected_type_id= $(this).attr("id");
			if(selected_type_id==selected_property_type)
			{
				$(this).css("display","block");
			}else{
				$(this).css("display","none");
			}
		});
	});
	$("#property_type_box .row div").click(function(){
		selected_property=$(this).attr("value");
		var icon=$(this).children('img');
		var allowed=['apartment','villa'];
		$("#property_type_box .row div img").removeClass('selected_property');
		icon.addClass('selected_property');
		if($.inArray(selected_property, allowed)>-1)
		{
			$("#bhk_selector").css("display","block");
		}else{
			$("#bhk_selector").css("display","none");
		}
	});
	$("#bhk_selector input").change(function(){
		bhk=$(this).val();
	});
	
});