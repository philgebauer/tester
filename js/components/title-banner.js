// This the parallax effect for the title banner component.
if(jQuery('.title-banner').length > 0) {
	jQuery(window).on('scroll', function(){
		var parfx = ((jQuery(window).scrollTop()) * 0.1 * -1) + '%';
		jQuery('.title-banner-parallax').stop().clearQueue().animate({top: parfx}, 10);
	});
	jQuery(window).trigger('scroll');
}