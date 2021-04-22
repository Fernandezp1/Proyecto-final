<?php if ( get_header_image() != ''):?>
   <div class="container-fluid">
      <div class="row">
         <div class="wp-custom-header">
            <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>"/>
         </div>
      </div>
   </div>
<?php endif;?>
<nav class="navbar navbar-expand-lg navbar-light">
   <div class="container">
      <?php get_template_part('inc/header/site-info');?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation','cloudpress');?>">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <!-- Right Nav -->
         <div class="ml-auto">
            <?php get_template_part('inc/header/menu');?>
         </div>
      </div>
   </div>
</nav>	