$(function(){
	var scrollToTop = $(".scrollTop");
	scrollToTop.fadeOut(0);
	
	$( window ).scroll(function() {
		var bannerSize = $(".head").height();
		var heigtFromScroll = $(window).scrollTop();
		if(heigtFromScroll > bannerSize){
			$( ".navbar" ).css("position", "fixed" );
			$( ".navbar" ).css("width", "100%" );
			$( ".navbar" ).css("top", "0" );
			scrollToTop.fadeIn("fast");
		}
		else{
			$( ".navbar" ).css("position", "relative" );
			$( ".navbar" ).css("width", "auto" );
			$( ".navbar" ).css("top", "auto" );
			scrollToTop.fadeOut("fast");
		}
	});

	$('.aligncenter').each(function(){
		var p = $(this).parent();
		p.css('text-align', 'center');
	})
});