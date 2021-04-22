<?php
/**
 * Template file for sidebar
*/
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="col-md-4 col-sm-4 col-xs-12">
        <div class="sidebar padding-left-30">
            <?php dynamic_sidebar('sidebar-1'); ?>	
        </div>
    </div>
<?php endif; ?>