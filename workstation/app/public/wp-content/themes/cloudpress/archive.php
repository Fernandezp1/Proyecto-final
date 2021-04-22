<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cloudpress
 */
get_header();?>
<section class="site-content">
    <div class="container">
        <div class="row section-module Blogs-rs">
                <?php
                if ( is_active_sidebar( 'sidebar-1' ) ):
                    echo '<div class="col-md-8 col-sm-8 col-xs-12">';
                else:
                    echo '<div class="col-md-12 col-sm-12 col-xs-12">';
                endif;?>
                    <div class="blog">
                        <?php
                        do_action('cloudpress_custom_pagination_query');
                        $args = array('post_type' => 'post', 'paged' => $paged);
                        $loop = new WP_Query($args);
                        if(have_posts()): while(have_posts()): the_post();
                                get_template_part('template-parts/content-blog-template', get_post_type());
                            endwhile;
                        else:
                            get_template_part('template-parts/content-blog-template', 'none');
                        endif;
                        // pagination function
                        do_action('cloudpress_post_navigation');
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <?php get_sidebar();?>
        </div>			
    </div>
</section>
<?php get_footer();?>