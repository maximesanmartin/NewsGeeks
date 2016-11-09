function displayNavInfos(){
	var windowSize = $( window ).width();
	if(windowSize <= 1000 && windowSize >= 750)
		$(".navbar-right").hide();
	else
		$(".navbar-right").show();
}

$(function(){
	$( ".article" ).hide();
	$(document).ready(displayNavInfos);
	$(document).ready(function(){
		$(".article").show("fold", {}, 500);
	})
	$(window).resize(displayNavInfos);
});