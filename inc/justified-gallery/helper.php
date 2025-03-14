<?php

if ( ! function_exists( 'deon_register_justified_gallery_scripts' ) ) {
	/**
	 * Function that register module 3rd party scripts
	 */
	function deon_register_justified_gallery_scripts() {
		wp_register_script( 'jquery-justified-gallery', DEON_INC_ROOT . '/justified-gallery/assets/js/plugins/jquery.justifiedGallery.min.js', array( 'jquery' ), true );
	}

	add_action( 'deon_action_before_main_js', 'deon_register_justified_gallery_scripts' );
}

if ( ! function_exists( 'deon_include_justified_gallery_scripts' ) ) {
	/**
	 * Function that enqueue modules 3rd party scripts
	 *
	 * @param array $atts
	 */
	function deon_include_justified_gallery_scripts( $atts ) {

		if ( isset( $atts['behavior'] ) && 'justified-gallery' === $atts['behavior'] ) {
			wp_enqueue_script( 'jquery-justified-gallery' );
		}
	}

	add_action( 'deon_core_action_list_shortcodes_load_assets', 'deon_include_justified_gallery_scripts' );
}

if ( ! function_exists( 'deon_register_justified_gallery_scripts_for_list_shortcodes' ) ) {
	/**
	 * Function that set module 3rd party scripts for list shortcodes
	 *
	 * @param array $scripts
	 *
	 * @return array
	 */
	function deon_register_justified_gallery_scripts_for_list_shortcodes( $scripts ) {

		$scripts['jquery-justified-gallery'] = array(
			'registered' => true,
		);

		return $scripts;
	}

	add_filter( 'deon_core_filter_register_list_shortcode_scripts', 'deon_register_justified_gallery_scripts_for_list_shortcodes' );
}
