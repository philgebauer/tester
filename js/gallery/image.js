/*
Image Method
============
Image viewer.

========================================================================
Parameter	Type 	Required 	Description
------------------------------------------------------------------------
attributes 	object 	true 		Same as jQuery(img).attr(attributes);
========================================================================

Method Usage
------------
var attributes = 
	src: 'http://placehold.it/800x800'
};
preview.image(attributes);

*/

module.exports = function(attributes) {
	var image = jQuery('<img />');
		image.attr(attributes);
		image.css({
			'display': 'block',
			'max-width': '90%',
			'max-height': '80vh',
			height: 'auto'
		});
	this.overlay(image);
	return this;
}

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