<?php
   /**
    * side bar template
    *
    * @package cloudpress
    */
   ?>
<?php if ( is_active_sidebar( 'woocommerce' )  ) : ?>
<div class="col-lg-4 col-md-5 col-sm-12">
   <div class="sidebar">
      <?php dynamic_sidebar( 'woocommerce' ); ?>
   </div>
</div>
<?php endif; ?>