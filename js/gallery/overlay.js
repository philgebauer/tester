/*
Overlay Method
============
Accepts a jQuery object and will append it as content to be overlayed.

========================================================================
Parameter	Type 	Required 	Description
------------------------------------------------------------------------
obj 		object 	true 		A jQuery object, like $('<div />') or 
								$('.my-hidden-content').
========================================================================

Method Usage
------------
preview.overlay(obj);

*/
module.exports = function(obj){
	// Remove Existing Overlay
	jQuery('.overlay').remove();
	// Create new overlay
	var overlay = jQuery('<div class="overlay"></div>');

	// Define Style for Overlay
	overlay.css({
		'position': 'fixed',
		'height': '100vh',
		'width': '100%',
		'top': '0',
		'left': '0',
		'background-color': 'rgba(0,0,0,0.6)',
		'display': 'flex',
		'align-items': 'center',
		'justify-content': 'center'
	});

	// Create listener that excludes the content over the overlay
	// but will create empty and detach the overlay when "empty space"
	// is clicked
	jQuery('body').on('click', '.overlay', function(e) {
		if(jQuery(e.target).is('.overlay') || jQuery(e.target).is('.overlay-close')) {
			jQuery(this).empty();
			jQuery(this).detach();
			jQuery(this).unbind();
		} else {
			return;
		}
	});

	jQuery('body').on('touchstart', '.overlay', function(e) {
		if(jQuery(e.target).is('.overlay')) {
			jQuery(this).empty();
			jQuery(this).detach();
			jQuery(this).unbind();
		} else {
			return;
		}
	});

	jQuery(document).keyup(function(e) {
		console.log('keypress!', e.keyCode);
		  if (e.keyCode === 27) {
		  	jQuery('.overlay').trigger('click');
		  	jQuery(this).unbind();
		  }
	});
	// Append content to the overlay object
	obj.appendTo(overlay);

	// Append the overlay object to body
	overlay.appendTo('body');

	return this;
};

/*
Copyright (c) 2017 Cody Ogden <cody@codyogden.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/