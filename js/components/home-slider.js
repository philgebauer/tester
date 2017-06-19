(function($){
	if($('.home-slider').length && $('.home-slider .slide').length > 1) {
		$('.slide').first().addClass('active');
		var slides = $('.slide');
		var count = $('.slide').length - 1;
		var counter = 0;
		function nextSlide() {
			$(slides[counter]).fadeOut();
			if(counter !== count) {
				counter++;
			} else {
				counter=0;
			}
			$(slides[counter]).fadeIn();
		}
		var timer = setInterval(function(){
			nextSlide();
		}, ( typeof youthcareSliderInterval !== 'undefined' ) ? youthcareSliderInterval : 6000);
	}
})(jQuery);