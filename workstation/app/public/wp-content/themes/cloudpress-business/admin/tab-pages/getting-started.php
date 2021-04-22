<?php
/**
 * Getting started template
 */
?>

<div id="getting_started" class="cloudpress-business-tab-pane active">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="cloudpress-business-info-title text-center"><?php echo esc_html__('About the CloudPress Business theme','cloudpress-business'); ?><?php if( !empty($cloudpress_business['Version']) ): ?> <sup id="cloudpress-business-theme-version"><?php echo esc_html( $cloudpress_business['Version'] ); ?> </sup><?php endif; ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="cloudpress-business-tab-pane-half cloudpress-business-tab-pane-first-half">
				<p><?php esc_html_e( 'This theme is ideal for creating corporate and business websites. The premium version, CloudPress PRO has tons of features: a homepage with many sections where you can feature unlimited slides, portfolios, user reviews, latest news, services, calls to action and much more. Each section in the Homepage template is carefully designed to fit to all business requirements.','cloudpress-business');?></p>
				<p>
				<?php esc_html_e( 'You can use this theme for any type of activity. CloudPress Business is compatible with popular plugins like WPML and Polylang.', 'cloudpress-business' ); ?>
				</p>

				<h1 style="margin-top: 73px !important; font-size:2em !important; background: #0085ba;border-color: #0073aa #006799 #006799; color: #fff; padding: 10px 10px;"><?php esc_html_e( "Getting Started", 'cloudpress-business' ); ?></h1>
				<div>
				<p style="margin-top: 16px;">

				<?php esc_html_e( 'To take full advantage of all the features this theme has to offer, install and activate the SpiceBox plugin. Go to Customize and install the SpiceBox plugin.', 'cloudpress-business' ); ?>

				</p>
				<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary" style="padding: 3px 15px;height: 40px; font-size: 16px;"><?php esc_html_e( 'Go to the Customizer','cloudpress-business');?></a></p>
				</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="cloudpress-business-tab-pane-half cloudpress-business-tab-pane-first-half">
				<img src="<?php echo esc_url( CLOUDPRESS_BUSINESS_TEMPLATE_DIR_URI ) . '/admin/img/cloudpress-business.png'; ?>" alt="<?php esc_attr_e( 'CloudPress Business theme', 'cloudpress-business' ); ?>" />
				</div>
			</div>
		</div>

		<div class="row">
    	<div class="col-md-12">
				<div class="cloudpress-business-tab-center">
					<h1><?php esc_html_e( "Useful Links", 'cloudpress-business' ); ?></h1>
				</div>
      </div>
			<div class="col-md-6">
				<div class="cloudpress-business-tab-pane-half cloudpress-business-tab-pane-first-half">
					<a href="<?php echo esc_url('https://cloudpress-business.spicethemes.com/'); ?>" target="_blank"  class="info-block">
						<div class="dashicons dashicons-desktop info-icon"></div>
						<p class="info-text"><?php echo esc_html__('Lite Demo','cloudpress-business'); ?></p>
					</a>
					<a href="<?php echo esc_url('https://demo.spicethemes.com/?theme=CloudPress Pro'); ?>" target="_blank"  class="info-block">
						<div class="dashicons dashicons-desktop info-icon"></div>
						<p class="info-text"><?php echo esc_html__('PRO Demo','cloudpress-business'); ?></p>
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="cloudpress-business-tab-pane-half cloudpress-business-tab-pane-first-half">
					<a href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/cloudpress-business'); ?>" target="_blank"  class="info-block">
						<div class="dashicons dashicons-smiley info-icon"></div>
						<p class="info-text"><?php echo esc_html__('Your feedback is valuable to us','cloudpress-business'); ?></p>
					</a>
					<a href="<?php echo esc_url('https://support.spicethemes.com/index.php?p=/categories/cloudpress-pro'); ?>" target="_blank"  class="info-block">
						<div class="dashicons dashicons-sos info-icon"></div>
						<p class="info-text"><?php echo esc_html__('Premium Theme Support','cloudpress-business'); ?></p>
					</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="cloudpress-business-tab-pane-half cloudpress-business-tab-pane-first-half">
					<a href="<?php echo esc_url('https://spicethemes.com/cloudpress-pro/'); ?>" target="_blank"  class="info-block">
						<div class="dashicons dashicons-book-alt info-icon"></div>
						<p class="info-text"><?php echo esc_html__('Premium Theme Details','cloudpress-business'); ?></p></a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="cloudpress-business-tab-pane-half cloudpress-business-tab-pane-first-half">
					<a href="<?php echo esc_url('https://helpdoc.spicethemes.com/category/cloudpress-pro/'); ?>" target="_blank"  class="info-block">
						<div class="dashicons dashicons-book-alt info-icon"></div>
						<p class="info-text"><?php echo esc_html__('Premium Theme Help Docs','cloudpress-business'); ?></p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
