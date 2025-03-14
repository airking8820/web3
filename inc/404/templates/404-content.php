<div id="qodef-404-page">
	<h1 class="qodef-404-title qodef-404-number">404</h1>

	<h4 class="qodef-404-title"><?php echo esc_html( $title ); ?></h4>

	<p class="qodef-404-text"><?php echo esc_html( $text ); ?></p>

	<div class="qodef-404-button">
		<?php
		$button_params = array(
			'link'          => esc_url( home_url( '/' ) ),
			'text'          => esc_html( $button_text ),
			'button_layout' => 'outlined',
		);

		deon_render_button_element( $button_params );
		?>
	</div>
</div>
