<?php
// theme sub header breadcrumb functions
function cloudpress_curPageURL() {
	$pageURL = 'http';
	if ( key_exists("HTTPS", $_SERVER) && ( $_SERVER["HTTPS"] == "on" ) ){
		$pageURL .= "s";
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 	}
 return $pageURL;
}

if( !function_exists('cloudpress_breadcrumbs') ):
	function cloudpress_breadcrumbs() 
	{ 
		global $post;
		$homeLink = home_url('/');
		?>
		<section class="page-title-section">		
			<div class="overlay"></div>	
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
                      <?php 
                    	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                      	if (is_home() || is_front_page()) { 
	                      	if( ! function_exists( 'spiceb_activate' ) ) 
	                      	{
	                      	 	?>
	                      	 	<div class="page-title text-center text-white">
									<h1 class="text-white"><?php esc_html_e('Home', 'cloudpress') ?></h1>
								</div>
	                      	 	<?php
	                      	}
	                      	else
	                      	{
	                      	 	if(get_option('show_on_front')=='posts')
	                      	 	{
	                      	 	?>
		                      	 	<div class="page-title text-center text-white">
										<h1 class="text-white"><?php esc_html_e('Home', 'cloudpress') ?></h1>
									</div> 
	                      	 	<?php
	                      	 	}
	                      	 	else
	                      	 	{
	                      	 		?>
	                      	 		<div class="page-title text-center text-white">
										<h1 class="text-white"><?php esc_html_e('Blog', 'cloudpress') ?></h1>
									</div> 
	                      	 		<?php
	                      	 	}	
	                      	}
						} 
						else 
						{ ?>                   
							<div class="page-title text-center text-white">
								<?php
								if (is_search())
								{
									echo '<h1 class="text-white">'. get_search_query() .'</h1>';
								}
								else if(is_404())
								{
									echo '<h1 class="text-white">'. esc_html__('Error 404','cloudpress') .'</h1>';	
								}
								else if(is_category())
								{
									echo '<h1 class="text-white">'. ( esc_html__('Category: ','cloudpress').single_cat_title( '', false ) ) .'</h1>';	
								}
								else if ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() )
								{ 
									if ( class_exists( 'WooCommerce' ) ) 
									{
	                        			if(is_shop())
	                        			{ ?>
	                        				<h1 class="text-white"><?php woocommerce_page_title(); ?></h1>
	                    				<?php 
	                    				}   
	                   				 }
		                		}
		                		elseif( is_tag() )
		                		{
		                			echo '<h1 class="text-white">'. ( esc_html__('Tag : ','cloudpress') .single_tag_title( '', false ) ) .'</h1>';
		                		}
		                		else if(is_archive())
								{	
								the_archive_title( '<h1 class="text-white">', '</h1>' ); 
								}
			                    else
			                    { ?>
			                    	<h1 class="text-white"><?php the_title(''); ?></h1>
			                    <?php 
			                	}
			                    ?>
			                </div>	
						<?php } 
						$breadcrumb_enable = get_theme_mod('breadcrumb_setting_enable',true);
						if($breadcrumb_enable == true) 
						{ 
							if ( function_exists('yoast_breadcrumb') ) {
								$wpseo_titles=get_option('wpseo_titles');
								if($wpseo_titles['breadcrumbs-enable']==true){

								echo '<ul class="page-breadcrumb text-center">';
									echo '<li>';
									echo '</li>';
								$breadcrumbs = yoast_breadcrumb("","",false);
								echo wp_kses_post($breadcrumbs);
								echo '</ul>';
								}	
							}
						}
						?>
                    </div>
				</div>
			</div>	
		</section>
	<?php }
endif; ?>