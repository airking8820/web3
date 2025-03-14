<?php if ( get_the_posts_pagination() !== '' ) { ?>
	<div class="qodef-m-pagination qodef--wp">
		<?php
		// Load posts pagination (in order to override template use navigation_markup_template filter hook)
		the_posts_pagination(
			array(
				'prev_text'          => deon_get_svg_icon( 'pagination-arrow-left' ),
				'next_text'          => deon_get_svg_icon( 'pagination-arrow-right' ),
				'before_page_number' => '0',
			)
		);
		?>
	</div>
<?php } ?>
