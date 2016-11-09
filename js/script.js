function displayNavInfos(){
	var windowSize = $( window ).width();
	if(windowSize <= 1000 && windowSize >= 750)
		$(".navbar-right").hide();
	else
		$(".navbar-right").show();
}

$(function(){
	$(document).ready(displayNavInfos);
	$(window).resize(displayNavInfos);
});