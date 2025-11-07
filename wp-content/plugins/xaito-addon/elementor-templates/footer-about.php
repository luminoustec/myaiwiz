<?php if ('layout_one' == $settings['layout_type']) : ?>
	<div class="xc-footer__widget mb-30">
		<div class="xc-footer__widget-about">
			<div class="xc-footer__widget-logo xc-disabled-dark">
				<a href="<?php echo esc_url(home_url('/')); ?>"><img width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" src="<?php echo esc_attr($settings['logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
			</div>
			<div class="xc-footer__widget-logo xc-enable-dark">
				<a href="<?php echo esc_url(home_url('/')); ?>"><img width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" src="<?php echo esc_attr($settings['light-logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
			</div>
			<div class="xc-footer__widget-social">
				<?php foreach ($settings['social_icons'] as $item) : ?>
					<a href="<?php echo esc_url($item['social_url']['url']); ?>" <?php echo esc_attr(!empty($item['social_url']['is_external']) ? 'target=_blank' : ' '); ?>>
						<span>
							<?php \Elementor\Icons_Manager::render_icon($item['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
					</a>
				<?php endforeach ?>
			</div>
			<p><?php echo wp_kses($settings['text'], 'xaito_allowed_tags'); ?></p>
		</div>
	</div>
<?php endif; ?>