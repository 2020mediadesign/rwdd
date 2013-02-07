$(document).ready(function() {


$('select#background').change(function () { 
	var b = $(this).children(":selected").val();
	if (b == 'bg0') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg0");
	}
	else if (b == 'bg1') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg1");
	}	
	else if (b == 'bg2') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg2");
	}
	else if (b == 'bg3') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg3");
	}
	else if (b == 'bg4') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg4");
	}
	else if (b == 'bg5') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg5");
	}
	else if (b == 'bg6') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg6");
	}
	else if (b == 'bg7') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg7");
	}
	else if (b == 'bg8') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg8");
	}
	else if (b == 'bg9') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg9");
	}
	else if (b == 'bg10') {
		$('body').css('backgroundColor', '#f8f8f8').removeClass().addClass("bg10");
	}
});	



$('select#layout').change(function () { 
	var b = $(this).children(":selected").val();
	if (b == 'streched') {
		window.location.href = "../streched/index.html";
	}	
	else if (b == 'boxed') {
		window.location.href = "../boxed/index.html";
	}
});	


 $("select#colors option").click(function(){
  var color = $(this).attr('value');
  if ($("#css_color_style").length > 0){
	  $("#css_color_style").remove();
  } 
  $("head").append("<link>");
  css = $("head").children(":last");
  css.attr({
    rel:  "stylesheet",
    type: "text/css",
    id: "css_color_style",
    href: "css/colors/color-" + color + ".css"
  });
 })

 $("#panel a.open").click(function(){
  var margin_left = $("#panel").css("margin-left");
  if (margin_left == "-210px"){
  $("#panel").animate({marginLeft: "0px"});
 }
 else{
  $("#panel").animate({marginLeft: "-210px"});
 }

 })

}); 