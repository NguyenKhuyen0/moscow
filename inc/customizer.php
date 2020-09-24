<?php
/**
 * portfolio-moscow Theme Customizer
 *
 * @package portfolio-moscow
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_moscow_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'portfolio_moscow_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'portfolio_moscow_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'portfolio_moscow_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function portfolio_moscow_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function portfolio_moscow_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function portfolio_moscow_customize_preview_js() {
	wp_enqueue_script( 'portfolio-moscow-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'portfolio_moscow_customize_preview_js' );


add_action('wp_ajax_send_mail', 'process_send_mail');

function process_send_mail() {
	if ( empty($_POST) || !wp_verify_nonce($_POST['security_code_1610'],'send_mail') ) {
		echo 'You targeted the right function, but sorry, your nonce did not verify.';
		die();
	} else {
		$to = EMAIL; 
		$name = sanitize_text_field($_POST['name']);
		$email = sanitize_email($_POST['email']);
		$comment = sanitize_text_field($_POST['comment']);
		$subject = $name . " - " .$email;
		$body = $comment;
		$headers = array('Content-Type: text/html; charset=UTF-8');
		wp_mail( $to, $subject, $body, $headers );
	}
}

// function filter_plugin_updates( $value ) {
//     unset( $value->response['sitepress-multilingual-cms/sitepress.php'] );
//     return $value;
// }
// add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );