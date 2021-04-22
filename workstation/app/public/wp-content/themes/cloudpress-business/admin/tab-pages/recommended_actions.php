<?php
	$cloudpress_business_actions = $this->recommended_actions;
	$cloudpress_business_actions_todo = get_option( 'cloudpress_business_recommended_actions', false );
?>
<div id="recommended_actions" class="cloudpress-business-tab-pane panel-close">
<div class="action-list">
    <div class="row">
	<?php if($cloudpress_business_actions): foreach ($cloudpress_business_actions as $key => $cloudpress_business_val): ?>
	<div class="col-md-6">
	<div class="action" id="<?php echo esc_attr($cloudpress_business_val['id']); ?>">
		<div class="action-watch">
		<?php if(!$cloudpress_business_val['is_done']): ?>
			<?php if(!isset($cloudpress_business_actions_todo[$cloudpress_business_val['id']]) || !$cloudpress_business_actions_todo[$cloudpress_business_val['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($cloudpress_business_val['title']); ?></h3>
			<div class="action-desc"><?php echo esc_html($cloudpress_business_val['desc']); ?></div>
			<?php echo wp_kses_post($cloudpress_business_val['link']); ?>
		</div>
	</div>
	</div>
	<?php endforeach; endif; ?>
</div>
</div>
    </div>
