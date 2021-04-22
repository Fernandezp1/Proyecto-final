<?php
   /**
    * Template name:Full-width page
    * 
    * @package cloudpress
    */
get_header();?>
<section class="site-content page-content-section">
   <div class="section-module">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
            <?php
               if (class_exists('WooCommerce')) {
               
                   if (is_account_page() || is_cart() || is_checkout()) {
               
                       while (have_posts()) : the_post();
                           get_template_part('template-parts/content', 'page');
                           if (comments_open() || get_comments_number()) :
                               comments_template();
                           endif;
                       endwhile;
                   } else {
                       while (have_posts()) : the_post();
                           get_template_part('template-parts/content', 'page');
                           if (comments_open() || get_comments_number()) :
                               comments_template();
                           endif;
                       endwhile;
                   }
               } else {
                   while (have_posts()) : the_post();
                       get_template_part('template-parts/content', 'page');
                       if (comments_open() || get_comments_number()) :
                           comments_template();
                       endif;
                   endwhile;
               }
               ?>
         </div>
      </div>
   </div>
</section>
<?php get_footer();?>