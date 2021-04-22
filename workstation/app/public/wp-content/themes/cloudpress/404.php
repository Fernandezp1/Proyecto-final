<?php
   /**
    * The template for displaying 404 request
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
    *
    * @package cloudpress
    */
get_header();?>
<section class="section-module">
   <div class="container">
      <div class="row v-center">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="error-404 text-center">
               <h1>4<i class="fa fa-frown-o"></i>4
               </h1>
               <h2><?php esc_html_e('Oops! Page not found', 'cloudpress'); ?></h2>
               <p><?php esc_html_e("We're sorry, but the page you are looking for doesn't exist.", "cloudpress"); ?></p>
               <div class="ptop-20 text-center">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-small btn-animate border btn-bg-default"><?php esc_html_e('Back to Homepage', 'cloudpress'); ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="clearfix"></div>
<?php get_footer(); ?>