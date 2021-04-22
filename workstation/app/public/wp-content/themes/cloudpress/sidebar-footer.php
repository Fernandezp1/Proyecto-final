<?php
   /**
    * Footer Widget Area
    *
    * @package Cloudpress
    */
   ?>
<?php
   for($i=1; $i<=4; $i++)
   {
   	echo '<div class="col-md-3 col-sm-6 col-xs-12">';
   	dynamic_sidebar('footer-sidebar-'.$i);
   	echo '</div>';
   }
   ?>