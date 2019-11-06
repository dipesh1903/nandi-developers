var latitude;
var longitude;

 var address={ locality:"",area:"",city:"", pincode:""};
 document.getElementById("locate_btn").addEventListener("click", showMap);
 function showMap(){
 	address.pincode=document.getElementById("pin").value;
 	address.area=document.getElementById("area").value;
 	address.locality=document.getElementById("locality").value;
 	address.city=document.getElementById("city").value;
 	var geocoder = new google.maps.Geocoder();
 	codeAddress(geocoder,address);
 };
 function codeAddress(geocoder, address) {
 	var array=[];
 	for(key in address){
 		if(address.hasOwnProperty(key))
 		{
 			array.push(address[key]);
 		}
 	}
    var address =array.join(',');
    console.log(address);
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == 'OK') {
        latitude=results[0].geometry.location.lat();
        longitude=results[0].geometry.location.lng();
        $.ajax({
        	type:"post",
        	url:"addPropertyBackPage.php",
        	data:{lat:latitude,lng:longitude},
        	success:function(data)
        	{
        		if(data=="location saved")
        		{
        			alert(data);
        		}else{
        			alert("Could not add the location, please check the entered address");
        		}
        	}
        });
        var position=results[0].geometry.location;
        // alert(latitude+" "+longitude);
        var location={lat: latitude, lng: longitude};
        initMap(location,  position);
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }

      function initMap(location, MarkerPosition) {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: location,
          zoom: 14
        });
        var marker = new google.maps.Marker({
              map: map,
              position: MarkerPosition
            });
      }

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

	$("#furnish .furnish_option").click(function(){
		$("#furnish .furnish_option").css({"background-color":"white","color":"black"});
		$(this).css({"background-color":"blue","color":"white"});
	});
	$("#furnish_reset").click(function(){
		$("#furnish .furnish_option").css({"background-color":"white","color":"black"});
	});
	$("#builtUpArea_input").focusin(function(event) {
		$("#builtUpArea").css({'border-bottom':"solid blue 1px"});
	});
	$("#builtUpArea_input").focusout(function(event) {
		$("#builtUpArea").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});
	$("#CarpetArea_input").focusin(function(event) {
		$("#CarpetArea").css({'border-bottom':"solid blue 1px"});
	});
	$("#CarpetArea_input").focusout(function(event) {
		$("#CarpetArea").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});
	$("#FloorNum_input").focusin(function(event) {
		$("#FloorNum").css({'border-bottom':"solid blue 1px"});
	});
	$("#FloorNum_input").focusout(function(event) {
		$("#FloorNum").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});

	$("#TotalFloors_input").focusin(function(event) {
		$("#TotalFloors").css({'border-bottom':"solid blue 1px"});
	});
	$("#TotalFloors_input").focusout(function(event) {
		$("#TotalFloors").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});

	$("#available_from_input").focusin(function(event) {
		$("#available_from").css({'border-bottom':"solid blue 1px"});
	});
	$("#available_from_input").focusout(function(event) {
		$("#available_from").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});

	$("#PropertyAge_input").focusin(function(event) {
		$("#PropertyAge").css({'border-bottom':"solid blue 1px"});
	});
	$("#PropertyAge_input").focusout(function(event) {
		$("#PropertyAge").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});

	$("#maintenance_input").focusin(function(event) {
		$("#maintenance").css({'border-bottom':"solid blue 1px"});
	});
	$("#maintenance_input").focusout(function(event) {
		$("#maintenance").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});

	$("#rent_input").focusin(function(event) {
		$("#rent").css({'border-bottom':"solid blue 1px"});
	});
	$("#rent_input").focusout(function(event) {
		$("#rent").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});

	$("#security_deposit_input").focusin(function(event) {
		$("#security_deposit").css({'border-bottom':"solid blue 1px"});
	});
	$("#security_deposit_input").focusout(function(event) {
		$("#security_deposit").css({'border-bottom':"solid rgba(0,0,0,0.1) 1px"});
	});

	$("#tenant .tenant_option").click(function(){
		$("#tenant .tenant_option").css({"background-color":"white","color":"black"});
		$(this).css({"background-color":"blue","color":"white"});
	});
	$("#tenant_reset").click(function(){
		$("#tenant .tenant_option").css({"background-color":"white","color":"black"});
	});

	$("#choose_image_btn").click(function(event) {
		$("#property_photos").click();
	});

	$("#select_menu li a").click(function(e){
		e.preventDefault();
		var hrefLink=$(this).attr("href");
		$("html, body").animate({scrollTop:$(hrefLink).offset().top-80},'1000');
		return false;
	});

	
});