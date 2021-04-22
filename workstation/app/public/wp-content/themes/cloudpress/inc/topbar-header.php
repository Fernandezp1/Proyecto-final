<?php
if( is_active_sidebar('home-header-sidebar_left') || is_active_sidebar('home-header-sidebar_right') ) { ?>
  	<header class="header-sidebar">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-6">
  					<?php
  					if( is_active_sidebar('home-header-sidebar_left') ) {
  							dynamic_sidebar( 'home-header-sidebar_left' );
  					} ?>
  				</div>
  				<div class="col-lg-6 col-md-6">
  					<?php
  					if( is_active_sidebar('home-header-sidebar_right') ) {
  							dynamic_sidebar( 'home-header-sidebar_right' );
  					} ?>
  				</div>
  			</div>
  		</div>
  	</header>
  <?php }
