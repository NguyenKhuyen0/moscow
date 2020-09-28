<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		// 'redirect'		=> false,
		'position'      => false,
		'icon_url'      => false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Main Picture Setting',
		'menu_title'	=> 'Main Picture',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Me Settings',
		'menu_title'	=> 'About Me',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'My Story Settings',
		'menu_title'	=> 'My Story',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Reaching Me Out Settings',
		'menu_title'	=> 'Reaching Me Out',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}