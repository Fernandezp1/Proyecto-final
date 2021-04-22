<?php
   	$menu_class='';
    wp_nav_menu(array(
                'theme_location' => 'cloudpress-primary',
                'menu_class'    => 'nav navbar-nav mr-auto '.$menu_class.'',
                'fallback_cb' => 'cloudpress_fallback_page_menu',
                'walker' => new Cloudpress_nav_walker())
                );
?>