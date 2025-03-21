<article <?php post_class('qodef-blog-item qodef-e'); ?>>
    <div class="qodef-e-inner">
        <?php
        // Include post format part
        deon_template_part('blog', 'templates/parts/post-format/link');
        ?>
        <div class="qodef-e-content">

            <div class="qodef-e-text">
                <?php
                // Include post content
                the_content();

                // Hook to include additional content after blog single content
                do_action('deon_action_after_blog_single_content');
                ?>
            </div>
            <div class="qodef-e-info qodef-info--bottom">
                <?php
                // Include post tags info
                deon_template_part('blog', 'templates/parts/post-info/tags');

                // Hook to include additional content after blog tags
                do_action( 'deon_action_after_blog_single_tags' );
                ?>
            </div>
        </div>
    </div>
</article>
