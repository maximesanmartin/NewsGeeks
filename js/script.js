$(function(){
	$(window).resize(function(){
		var windowSize = $( window ).width();
		if(windowSize <= 1000 && windowSize >= 750)
			$(".navbar-right").hide();
		else
			$(".navbar-right").show();
	});
});