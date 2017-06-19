<?php

function youthcare_donation_form( $atts ) {
	return '<iframe style="box-sizing: border-box;width: 100%;height: 2500px" src="https://app.etapestry.com/onlineforms/YouthCare/donate.html"></iframe>';
}
add_shortcode( 'donation-form','youthcare_donation_form' );