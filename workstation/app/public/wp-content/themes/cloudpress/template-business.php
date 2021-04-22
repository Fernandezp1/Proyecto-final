<?php 
   // Template Name: Business Template
   	get_header();   
  	do_action( 'spiceb_cloudpress_sections', false );
   	get_template_part('template-parts/index', 'news');
    get_footer();
?>