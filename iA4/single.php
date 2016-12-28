<?php
/**
 * The template for displaying single posts.
 *
 * @author iA <ia@ia.net>
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php 
            while (have_posts()) { 
                the_post();
                get_template_part('template-parts/content', 'single');
            }
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>