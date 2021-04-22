<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cloudpress
 */
get_header();?>
<section class="site-content">
    <div class="container">
        <div class="row section-module Blogs-detail">	
                <?php
                if ( is_active_sidebar( 'sidebar-1' ) ):
                    echo '<div class="col-md-8 col-sm-8 col-xs-12">';
                else:
                    echo '<div class="col-md-12 col-sm-12 col-xs-12">';
                endif;?>
                    <div class="blog blog-detail">
                        <?php
                        while (have_posts()): the_post();
                            get_template_part('template-parts/content', 'single');
                        endwhile;

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) : comments_template();
                        endif;
                        ?>
                    </div>	
                </div>	
                <?php get_sidebar();?>
        </div>
    </div>
</section>
<?php get_footer(); ?>