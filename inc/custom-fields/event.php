<?php
// Events Custom Fields
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5903466be3881',
	'title' => 'Event Fields',
	'fields' => array (
		array (
			'key' => 'field_5903506450f87',
			'label' => 'Start Time',
			'name' => 'event_time_start',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'g:i a',
			'return_format' => 'g:i a',
		),
		array (
			'key' => 'field_5903508950f88',
			'label' => 'End Time',
			'name' => 'event_time_end',
			'type' => 'time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'g:i a',
			'return_format' => 'g:i a',
		),
		array (
			'key' => 'field_590350ce020ed',
			'label' => 'Tickets URL',
			'name' => 'event_tickets_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'http://eventbrite.com/',
		),
		array (
			'key' => 'field_5903467db2f4f',
			'label' => 'Location Name',
			'name' => 'event_location_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_590346b3b2f51',
			'label' => 'Location Map',
			'name' => 'event_location_map',
			'type' => 'google_map',
			'instructions' => 'Search an address or click the location on the map.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '44.9642428',
			'center_lng' => '-93.2080507',
			'zoom' => 12,
			'height' => '',
		),
		array (
			'key' => 'field_5903511b87ff0',
			'label' => 'Post Event Update',
			'name' => 'event_blog_post',
			'type' => 'url',
			'instructions' => 'When the event is passed, link to a blog post that talks about your successful event! (Tip: Add a photo gallery to your post!)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'events',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
		1 => 'custom_fields',
		2 => 'discussion',
		3 => 'comments',
		4 => 'author',
		5 => 'format',
		6 => 'page_attributes',
		7 => 'categories',
		8 => 'tags',
		9 => 'send-trackbacks',
	),
	'active' => 1,
	'description' => '',
));

endif;