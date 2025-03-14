<div class="qodef-e-media">
	<?php
	switch ( get_post_format() ) {
		case 'gallery':
			deon_template_part( 'blog', 'templates/parts/post-format/gallery' );
			break;
		case 'video':
			deon_template_part( 'blog', 'templates/parts/post-format/video' );
			break;
		case 'audio':
			deon_template_part( 'blog', 'templates/parts/post-format/audio' );
			break;
		default:
			deon_template_part( 'blog', 'templates/parts/post-info/image' );
			break;
	}
	?>
</div>
