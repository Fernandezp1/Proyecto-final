<?php //Pro Details
function cloudpress_pro_feature_customizer( $wp_customize ) {
    class Cloudpress_WP_Pro_Feature_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>
        <div class="cloudpress-pro-features-customizer">
            <ul class="cloudpress-pro-features">
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Advanced Hook Settings','cloudpress' ); ?>
                </li>
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Multiple Page Templates','cloudpress' ); ?>
                </li>   
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Portfolio Management','cloudpress' ); ?>
                </li>
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Slide Variations','cloudpress' ); ?>
                </li>
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Pricing Table','cloudpress' ); ?>
                </li>
              <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Create Unlimited Services','cloudpress' ); ?>
                </li>
                 <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Typography Settings','cloudpress' ); ?>
                </li>
              <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Manage Contact Details','cloudpress' ); ?>
                </li>
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Testimonial Section','cloudpress' ); ?>
                </li>
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Client Section','cloudpress' ); ?>
                </li>
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'New Subscription Section','cloudpress' ); ?>
                </li>
              <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Team Section','cloudpress' ); ?>
                </li>
              <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Custom Color Schemes','cloudpress' ); ?>
                </li>
              <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Section Reordering','cloudpress' ); ?>
                </li>
                <li>
                    <span class="cloudpress-pro-label"><?php esc_html_e( 'PRO','cloudpress' ); ?></span>
                    <?php esc_html_e( 'Quality Support','cloudpress' ); ?>
                </li>
            </ul>
            <a target="_blank" href="<?php echo esc_url('https://spicethemes.com/cloudpress-pro');?>" class="cloudpress-pro-button button-primary"><?php esc_html_e( 'UPGRADE TO PRO','cloudpress' ); ?></a>
            <hr>
        </div>
        <?php
        }
    }
    $wp_customize->add_section( 'cloudpress_pro_feature_section' , array(
    		'title'      => esc_html__('View PRO Details', 'cloudpress'),
    		'priority'   => 1,
       	) );
    $wp_customize->add_setting(
        'upgrade_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new Cloudpress_WP_Pro_Feature_Customize_Control( $wp_customize, 'upgrade_pro_feature', array(
    		'section' => 'cloudpress_pro_feature_section',
    		'setting' => 'upgrade_pro_feature',
        ))
    );
    class Cloudpress_WP_Feature_document_Customize_Control extends WP_Customize_Control {
        public $type = 'new_menu';
        /**
        * Render the control's content.
        */
        public function render_content() {
        ?>
       
         <div class="cloudpress-pro-content">
            <ul class="cloudpress-pro-des">
                    <li> <?php esc_html_e('With individual hook settings, you can insert html or php code according to your needs.','cloudpress');?></li>
                    <li> <?php esc_html_e('Theme comes with multiple page settings like multiple blog, portfolio 2/3/4 column, about us etc.','cloudpress');?></li>
                    <li> <?php esc_html_e('Create a professional-looking portfolio.','cloudpress');?></li>
                    <li> <?php esc_html_e('PRO version comes with slide variation options, so you can adjust your content through text alignment.','cloudpress');?></li>
                    <li> <?php esc_html_e('Add as many services as you like. You can even display each service on a separate page.','cloudpress');?></li>   
                     <li> <?php esc_html_e('Typography Settings allow you to choose content font size, font family, etc','cloudpress');?></li>    
                    <li> <?php esc_html_e('Theme comes with a beautifully designed section where you can manage your contact details.','cloudpress');?></li>
                    <li> <?php esc_html_e('Show all your team members, clients, testimonials on front page.','cloudpress');?></li>
                    <li> <?php esc_html_e('You can select amongst predefined color skins, or you can create your own without writing any CSS code.','cloudpress');?></li>
                    <li> <?php esc_html_e('The layout manager will help you rearrange all sections.','cloudpress');?></li>
                    <li> <?php esc_html_e('Translation-ready, the theme supports popular plugins WPML and Polylang','cloudpress');?></li>
                    <li> <?php esc_html_e('24/7 professional support for Google Maps','cloudpress');?></li>
                    <li> <?php esc_html_e('Dedicated support, widget and sidebar management.','cloudpress');?></li>
                </ul>
         </div>
        <?php
        }
    }

    $wp_customize->add_setting(
        'cloudpress_pro_feature',
        array(
            'capability'     => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )	
    );
    $wp_customize->add_control( new Cloudpress_WP_Feature_document_Customize_Control( $wp_customize, 'cloudpress_pro_feature', array(	
    		'section' => 'cloudpress_pro_feature_section',
    		'setting' => 'cloudpress_pro_feature',
        ))
    );

}
add_action( 'customize_register', 'cloudpress_pro_feature_customizer' );
?>