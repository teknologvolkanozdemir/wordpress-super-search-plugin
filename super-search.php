<?php
/**
 * Plugin Name: Super Search
 * Description: Add a web search box with Google and Bing to your WordPress site.
 * Version: 1.0.0
 * Text Domain: super-search
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function super_search_enqueue_script() {
	wp_enqueue_script(
		'super-search',
		plugins_url( 'super-search.js', __FILE__ ),
		array(),
		'1.0.0',
		true
	);
}

function super_search_shortcode() {
	super_search_enqueue_script();

	return '<form class="super-search" action="https://www.google.com/search" method="get" target="_blank" rel="noopener noreferrer">'
		. '<label>' . esc_html__( 'Search the web', 'super-search' )
		. ' <input type="search" name="q" required></label> '
		. '<label>' . esc_html__( 'Search engine', 'super-search' )
		. ' <select><option value="google">Google</option><option value="bing">Bing</option></select></label> '
		. '<button type="submit">' . esc_html__( 'Search', 'super-search' ) . '</button>'
		. '</form>';
}

add_shortcode( 'super_search', 'super_search_shortcode' );
