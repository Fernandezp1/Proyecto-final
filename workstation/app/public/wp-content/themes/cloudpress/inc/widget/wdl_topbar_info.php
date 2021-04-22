<?php
	// Register and load the widget
	function cloudpress_header_topbar_info_widget() {
	    register_widget( 'cloudpress_header_topbar_info_widget' );
	}
	add_action( 'widgets_init', 'cloudpress_header_topbar_info_widget' );

	// Creating the widget
	class cloudpress_header_topbar_info_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'cloudpress_header_topbar_info_widget', // Base ID
			__('CloudPress: Header info widget','cloudpress'), // Widget Name
			array(
				'classname' => 'cloudpress_header_topbar_info_widget',
				'description' => __('Topbar header info widget.','cloudpress'),
			),
			array(
				'width' => 600,
			)
		);

	 }

	public function widget( $args, $instance ) {

		if($args['id']=='sidebar_primary')
		{
			$instance['before_title']='<div class="sm-widget-title wow fadeInDown animated" data-wow-delay="0.4s"><h3>';
			$instance['before_title']='</h3></div><div class="sm-sidebar-widget wow fadeInDown animated" data-wow-delay="0.4s">';
		}
		echo $args['before_widget'];
		?>
		<ul class="head-contact-info">
			<li>
				<?php if(!empty($instance['fa_icon'])) { ?>
					<i class="fa <?php echo esc_attr($instance['fa_icon']); ?>"></i>
				<?php }
				if(!empty($instance['description'])) {
					echo esc_html($instance['description']);
				} ?>
			</li>
			<li>
				<?php if(!empty($instance['cloudpress_email'])) { ?>
					<i class="fa <?php echo esc_attr($instance['cloudpress_email']); ?>"></i>
				<?php }
				if (!empty($instance['cloudpress_email_id'])) {
					echo '<a href="mailto:' . esc_attr($instance['cloudpress_email_id']) . '">';
          echo esc_html($instance['cloudpress_email_id']);
          echo '</a>';
        } ?>
			</li>
		</ul>
	<?php
	echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {

		if ( isset( $instance[ 'fa_icon' ])) {
			$fa_icon = $instance[ 'fa_icon' ];
		}
		else {
			$fa_icon = 'fa fa-phone';
		}

		if ( isset( $instance[ 'description' ])) {
			$cloudpress_description = $instance[ 'description' ];
		}
		else {
			$cloudpress_description = esc_html__( 'Phone: +99 999-999-9999', 'cloudpress' );
		}

		if ( isset( $instance[ 'cloudpress_email' ])) {
			$cloudpress_email = $instance[ 'cloudpress_email' ];
		}
		else {
			$cloudpress_email = 'fa fa-envelope-o';
		}

		if ( isset( $instance[ 'cloudpress_email_id' ])) {
			$cloudpress_email_id = $instance[ 'cloudpress_email_id' ];
		}
		else {
	 		$cloudpress_email_id = esc_html__( 'abc@example.com', 'cloudpress' );
		}

	// Widget admin form
	?>

	<label for="<?php echo esc_attr($this->get_field_id( 'fa_icon' )); ?>"><?php esc_html_e( 'Font Awesome icon','cloudpress' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'fa_icon' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'fa_icon' )); ?>" type="text" value="<?php if($fa_icon) echo esc_attr( $fa_icon );?>" />
	<span><?php esc_html_e('Link to get Font Awesome icons','cloudpress'); ?><a href="<?php echo esc_url('http://fortawesome.github.io/Font-Awesome/icons/'); ?>" target="_blank" ><?php esc_html_e('fa-icon','cloudpress'); ?></a></span>
	<br><br>

	<label for="<?php echo esc_attr($this->get_field_id( 'description' )); ?>"><?php esc_html_e( 'Phone','cloudpress' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'description' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'description' )); ?>" type="text" value="<?php if($cloudpress_description) echo esc_attr(htmlspecialchars_decode($cloudpress_description));?>" /><br><br>

	<label for="<?php echo esc_attr($this->get_field_id( 'cloudpress_email' )); ?>"><?php esc_html_e( 'Font Awesome icon','cloudpress' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('cloudpress_email')); ?>" name="<?php echo esc_attr($this->get_field_name('cloudpress_email')); ?>" type="text" value="<?php if($cloudpress_email) echo esc_attr($cloudpress_email);?>" />
	<span><?php esc_html_e('Link to get Font Awesome icons','cloudpress'); ?><a href="<?php echo esc_url('http://fortawesome.github.io/Font-Awesome/icons/'); ?>" target="_blank" ><?php esc_html_e('fa-icon','cloudpress'); ?></a></span><br><br>

	<label for="<?php echo esc_attr($this->get_field_id('cloudpress_email_id')); ?>"><?php esc_html_e( 'Email','cloudpress' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('cloudpress_email_id')); ?>" name="<?php echo esc_attr($this->get_field_name('cloudpress_email_id')); ?>" type="text" value="<?php if($cloudpress_email_id) echo esc_attr(htmlspecialchars_decode($cloudpress_email_id)); ?>" /><br><br>



	<?php
    }
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['fa_icon'] = ( ! empty( $new_instance['fa_icon'] ) ) ? cloudpress_sanitize_text( $new_instance['fa_icon'] ) : '';
		$instance['description'] = ( ! empty( $new_instance['description'] ) ) ? cloudpress_sanitize_text($new_instance['description']) : '';
		$instance['cloudpress_email'] = ( ! empty( $new_instance['cloudpress_email'] ) ) ? cloudpress_sanitize_text( $new_instance['cloudpress_email'] ) : '';
		$instance['cloudpress_email_id'] = ( ! empty( $new_instance['cloudpress_email_id'] ) ) ? cloudpress_sanitize_text($new_instance['cloudpress_email_id']) : '';

		return $instance;
	}
	}
