<?php
/**
 * Helper functions.
 *
 * @package cloudpress
 */

if (!function_exists('cloudpress_custom_navigation')) :

    function cloudpress_custom_navigation() {
        $pagination_option = get_theme_mod('blog_pagination');
        if ('default' == $pagination_option) {
            the_posts_navigation();
        } else {
            the_posts_pagination(array(
                'mid_size' => 5,
                'prev_text' => __('<i class="fa fa-angle-double-left"></i>', 'cloudpress'),
                'next_text' => __('<i class="fa fa-angle-double-right"></i>', 'cloudpress'),
            ));
        }
    }

endif;
add_action('cloudpress_post_navigation', 'cloudpress_custom_navigation');

function cloudpress_blog_meta_contents()
{
?>
<div class="entry-meta">
    <?php
    if (get_theme_mod('cloudpress_enable_blog_date', true) === true):?>
        <span class="entry-date">
            <a href="<?php echo esc_url(home_url('/')); ?>/<?php echo esc_html(date('Y/m', strtotime(get_the_date()))); ?>"><time><?php echo esc_html(get_the_date()); ?></time></a>
        </span>
    <?php
    endif;

    if (get_theme_mod('cloudpress_enable_blog_category', true) === true):
        $cat_list = get_the_category_list();
        if (!empty($cat_list)) { ?>
            <span class="cat-links"><?php the_category(" "); ?></span>
        <?php }
    endif;


    if (get_theme_mod('cloudpress_enable_blog_tag', true) === true):
        $tag_list = get_the_tag_list();
        if (!empty($tag_list)) { ?>
            <span class="tag-links"><?php the_tags('', '', ''); ?></span>
        <?php }
    endif; ?>
</div>
<?php
}
add_action('cloudpress_blog_meta_contents','cloudpress_blog_meta_contents');

add_action('cloudpress_custom_pagination_query','cloudpress_custom_pagination_query');
function cloudpress_custom_pagination_query()
{
     if(get_query_var('paged'))
                {
                   $paged = get_query_var('paged');
                }
                elseif(get_query_var('page'))
                {
                   $paged = get_query_var('page');
                }
                else
                {
                    $paged = 1;
                }

}

function cloudpress_footer_section_hook()
{
?>
<footer class="site-footer">
                 <?php
    if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3') || is_active_sidebar('footer-sidebar-4')): ?>
                <div class="row footer-sidebar">
                    <!--Footer Widgets-->
                    <div class="container">
                      <div class="row">
                        <?php get_template_part('sidebar','footer');?>

                    <!--/Footer Widgets-->
                     </div>
                   </div>
                   </div>
                   <?php endif;?>
                    <!--Site Info-->
                    <?php if(get_theme_mod('footer_enable',true)===true):?>
                            <div class="site-info">
                                <div class="site-branding">
                                 <?php $cloudpress_footer_copyright = get_theme_mod('footer_copyright','<p>'.__( 'Proudly powered by <a href="https://wordpress.org"> WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">CloudPress</a> by SpiceThemes', 'cloudpress' ).'</p>'); ?>
                                <?php echo wp_kses_post($cloudpress_footer_copyright);?>
                            </div>
                        </div>
                    <?php endif;?>
                    <!--/Site Info-->
        </footer>
<?php
}
add_action('cloudpress_footer_section_hook','cloudpress_footer_section_hook');
