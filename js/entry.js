console.log('main.js sourced');
require('./components/title-banner.js');
require('./components/home-slider.js');
require('./acf-google-map.js');

// Bespoke Image Gallery Overlay
var gallery = require('./gallery');

jQuery('.gallery .gallery-item .gallery-icon > a').on('click', function(e){
	e.preventDefault();
	gallery.image({
		src: jQuery(this).attr('href')
	});
});