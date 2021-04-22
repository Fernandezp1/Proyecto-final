<?php
   /**
    * The template for displaying Search Results pages.
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
               if (have_posts()): while (have_posts()): the_post();
                       get_template_part('template-parts/search', 'content');
                        
                   endwhile;
                   // pagination function
                    do_action('cloudpress_post_navigation');
               else:
                   get_template_part('template-parts/content', 'none');
               endif;
               ?>
         </div>
      </div>
      <?php get_sidebar();?>
   </div>
   </div>
</section>
<?php get_footer(); ?>