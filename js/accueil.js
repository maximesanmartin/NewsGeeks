$(function(){
	resizeAccueil();
	$(window).resize(resizeAccueil);
});

function resizeAccueil(){
	var windowSize = $( window ).width();
	if(windowSize <= 1350 && windowSize >= 950)
		$(".article").attr("class", "col-md-12 article");
	else
		$(".article").attr("class", "col-md-6 article");
}