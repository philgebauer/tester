<?php
if( function_exists('acf_add_local_field_group') ):

// Facebook
acf_add_local_field_group(array (
	'key' => 'group_5905e5e88bda6',
	'title' => 'Facebook Sharing Settings',
	'fields' => array (
		array (
			'key' => 'field_5905e5ee698d5',
			'label' => 'Facebook App ID',
			'name' => 'facebook_app_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
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
			'key' => 'field_5905e65760cb3',
			'label' => 'Default Description',
			'name' => 'facebook_default_description',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
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
			'key' => 'field_5905e602698d6',
			'label' => 'Default Image',
			'name' => 'facebook_default_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'twitter_card',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => 5,
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-sharing-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

// Twitter
acf_add_local_field_group(array (
	'key' => 'group_5905d45fd9f8e',
	'title' => 'Twitter Sharing Options',
	'fields' => array (
		array (
			'key' => 'field_5905d4691eb30',
			'label' => 'Username',
			'name' => 'twitter_username',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'YouthCAREMN',
			'placeholder' => '',
			'prepend' => '@',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_5905db8aea1af',
			'label' => 'Default Description',
			'name' => 'twitter_default_description',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
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
			'key' => 'field_5905d5cc7e2d4',
			'label' => 'Default Image',
			'name' => 'twitter_default_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'twitter_card',
			'library' => 'all',
			'min_width' => 600,
			'min_height' => 330,
			'min_size' => '',
			'max_width' => 4096,
			'max_height' => 4096,
			'max_size' => 5,
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-sharing-options',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59082b32acccc',
	'title' => 'Twitter and Facebook Card Options',
	'fields' => array (
		array (
			'key' => 'field_59082b9e6b56c',
			'label' => 'Short Description',
			'name' => 'sharing_description',
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
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'events',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'programs',
			),
		),
	),
	'menu_order' => 99,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => 'Choose a specific image and text for the Twitter/Facebook card, or leave blank for the default.',
));

endif;