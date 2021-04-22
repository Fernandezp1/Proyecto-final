<?php
/**
 * Getting started template
 */
?>

<div id="getting_started" class="cloudpress-tab-pane active">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="cloudpress-info-title text-center"><?php echo esc_html__('CloudPress theme Configuration','cloudpress'); ?><?php if( !empty($cloudpress['Version']) ): ?> <sup id="cloudpress-theme-version"><?php echo esc_html( $cloudpress['Version'] ); ?> </sup><?php endif; ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="cloudpress-page">
					<div class="cloudpress-page-top"><?php esc_html_e( 'Links to Customizer Settings', 'cloudpress' ); ?></div>
					<div class="cloudpress-page-content">
						<ul class="cloudpress-page-list-flex">
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=title_tagline' ) ); ?>" target="_blank"><?php esc_html_e('Site Logo','cloudpress'); ?></a>
							</li>
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=cloudpress_theme_panel' ) ); ?>" target="_blank"><?php esc_html_e('Blog And Footer','cloudpress'); ?></a>
							</li>
							 <li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=widgets' ) ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','cloudpress'); ?></a>
							</li>
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[section]=header_image' ) ); ?>" target="_blank"><?php esc_html_e('Header Image','cloudpress'); ?></a>
							</li>
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url( admin_url( 'customize.php?autofocus[panel]=section_settings' ) ); ?>" target="_blank"><?php esc_html_e('Homepage Sections','cloudpress'); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
			
			    <div class="cloudpress-page">
				<?php 
					$actions = $this->recommended_actions;
					$actions_todo = get_option( 'recommended_actions', false );
				?>
		
				<div class="action-list">
					<?php if($actions): foreach ($actions as $key => $val): ?>
					<div class="action" id="<?php echo esc_attr($val['id']); ?>">
						<div class="action-watch">
						<?php if(!$val['is_done']): ?>
							<?php if(!isset($actions_todo[$val['id']]) || !$actions_todo[$val['id']]): ?>
								<span class="dashicons dashicons-visibility"></span>
							<?php else: ?>
								<span class="dashicons dashicons-hidden"></span>
							<?php endif; ?>
						<?php else: ?>
							<span class="dashicons dashicons-yes"></span>
						<?php endif; ?>
						</div>
						<div class="action-inner">
							<h4 class="action-title"><?php echo esc_html($val['title']); ?></h4>
							<div class="action-desc"><?php echo esc_html($val['desc']); ?></div>
							<?php echo wp_kses_post($val['link']); ?>
						</div>
					</div>
					<?php endforeach; endif; ?>
				</div>
				</div>	
			</div>	
		</div>
		
		<div class="row">
			<div class="col-md-6"> 
				<div class="cloudpress-page">
					<div class="cloudpress-page-top"><?php esc_html_e( 'Additional features in CloudPress PRO', 'cloudpress' ); ?></div>
					<div class="cloudpress-page-content">
						<ul class="cloudpress-page-list-flex">
							<li>
								<?php echo esc_html__('Unlimited slides','cloudpress'); ?>
							</li>
							<li>
							<?php echo esc_html__('Pricing Table','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Unlimited Service Section','cloudpress'); ?>
							</li>					
							<li>
								<?php echo esc_html__('Boxed layout support','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Portfolio section','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Funfact section','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Google Maps section','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Client section','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Multiple Blog Templates','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Typography','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('WPML Support','cloudpress'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Mulitple Color Schemes','cloudpress'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Drag and drop section orders','cloudpress'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Team section with carousel effect','cloudpress'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Shop section with unlimited items','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Shop section with carousel effect','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Testimonial section with carousel effect','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('Homepage sections before/after hooks','cloudpress'); ?>
							</li>
							
							<li>
								<?php echo esc_html__('Latest news section with grid format','cloudpress'); ?>
							</li>
							<li>
								<?php echo esc_html__('NewsLetter subscription section','cloudpress'); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-6"> 
				<div class="cloudpress-page">
					<div class="cloudpress-page-top"><?php esc_html_e( 'Useful Links', 'cloudpress' ); ?></div>
					<div class="cloudpress-page-content">
						<ul class="cloudpress-page-list-flex">
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url('https://demo.spicethemes.com/?theme=CloudPress'); ?>" target="_blank"><?php echo esc_html__('CloudPress Demo','cloudpress'); ?></a>
							</li>
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url('https://demo.spicethemes.com/?theme=CloudPress%20Pro'); ?>" target="_blank"><?php echo esc_html__('CloudPress Pro Demo','cloudpress'); ?></a>
							</li>
							
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/cloudpress/'); ?>" target="_blank"><?php echo esc_html__('CloudPress Theme Support','cloudpress'); ?></a>
							</li>
							
						    <li> 
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url('https://wordpress.org/support/theme/cloudpress/reviews/#new-post'); ?>" target="_blank"><?php echo esc_html__('Your feedback is valuable to us','cloudpress'); ?></a>
							</li>
							
							<li>
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/cloudpress-pro'); ?>" target="_blank"><?php echo esc_html__('CloudPress Pro Details','cloudpress'); ?></a>
							</li>
							
							<li> 
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url('https://helpdoc.spicethemes.com/cloudpress/cloudpress-wordpress-theme/'); ?>" target="_blank"><?php echo esc_html__('CloudPress Documentation','cloudpress'); ?></a>
							</li>
							
						    <li> 
								<a class="cloudpress-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/contact'); ?>" target="_blank"><?php echo esc_html__('Pre-sales enquiry','cloudpress'); ?></a>
							</li> 
						</ul>
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>	