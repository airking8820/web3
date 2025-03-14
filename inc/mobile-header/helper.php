<?php

if ( ! function_exists( 'deon_load_page_mobile_header' ) ) {
	/**
	 * Function which loads page template module
	 */
	function deon_load_page_mobile_header() {
		// Include mobile header template
		echo apply_filters( 'deon_filter_mobile_header_template', deon_get_template_part( 'mobile-header', 'templates/mobile-header' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}

	add_action( 'deon_action_page_header_template', 'deon_load_page_mobile_header' );
}

if ( ! function_exists( 'deon_register_mobile_navigation_menus' ) ) {
	/**
	 * Function which registers navigation menus
	 */
	function deon_register_mobile_navigation_menus() {
		$navigation_menus = apply_filters( 'deon_filter_register_mobile_navigation_menus', array( 'mobile-navigation' => esc_html__( 'Mobile Navigation', 'deon' ) ) );

		if ( ! empty( $navigation_menus ) ) {
			register_nav_menus( $navigation_menus );
		}
	}

	add_action( 'deon_action_after_include_modules', 'deon_register_mobile_navigation_menus' );
}
