<?php

if ( ! function_exists( 'deon_is_page_title_enabled' ) ) {
	/**
	 * Function that check is module enabled
	 */
	function deon_is_page_title_enabled() {
		return apply_filters( 'deon_filter_enable_page_title', true );
	}
}

if ( ! function_exists( 'deon_load_page_title' ) ) {
	/**
	 * Function which loads page template module
	 */
	function deon_load_page_title() {

		if ( deon_is_page_title_enabled() ) {
			// Include title template
			echo apply_filters( 'deon_filter_title_template', deon_get_template_part( 'title', 'templates/title' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}

	add_action( 'deon_action_page_title_template', 'deon_load_page_title' );
}

if ( ! function_exists( 'deon_get_page_title_classes' ) ) {
	/**
	 * Function that return classes for page title area
	 *
	 * @return string
	 */
	function deon_get_page_title_classes() {
		$classes = apply_filters( 'deon_filter_page_title_classes', array() );

		return implode( ' ', $classes );
	}
}

if ( ! function_exists( 'deon_get_page_title_text' ) ) {
	/**
	 * Function that returns current page title text
	 */
	function deon_get_page_title_text() {
		$title = get_the_title( deon_get_page_id() );

		if ( ( is_home() && is_front_page() ) || is_singular( 'post' ) ) {
			$title = get_option( 'blogname' );
		} elseif ( is_tag() ) {
			$title = single_term_title( '', false ) . esc_html__( ' Tag', 'deon' );
		} elseif ( is_date() ) {
			$title = get_the_time( 'F Y' );
		} elseif ( is_author() ) {
			$title = esc_html__( 'Author: ', 'deon' ) . get_the_author();
		} elseif ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_archive() ) {
			$title = esc_html__( 'Archive', 'deon' );
		} elseif ( is_search() ) {
			$title = esc_html__( 'Search results for: ', 'deon' ) . get_search_query();
		} elseif ( is_404() ) {
			$title = esc_html__( '404 - Page not found', 'deon' );
		}

		return apply_filters( 'deon_filter_page_title_text', $title );
	}
}
