<?php if ('layout_one' == $settings['layout_type']) : ?>

	<div class="footer-widget__column footer-widget__newsletter clearfix">
		<div class="footer-widget__title-box">
			<h3 class="footer-widget__title"><?php echo wp_kses($settings['title'], 'xaito_allowed_tags'); ?></h3>
		</div>
		<p class="footer-widget__newsletter-text"><?php echo wp_kses($settings['text'], 'xaito_allowed_tags'); ?></p>

		<form class="footer-widget__subscribe-box" data-url="<?php echo esc_url($settings['mailchimp_url']); ?>">
			<div class="footer-widget__subscribe-input-box">
				<input type="email" placeholder="<?php echo esc_attr($settings['mc_input_placeholder']); ?>" name="email">
				<button type="submit" class="footer-widget__subscribe-btn"><?php \Elementor\Icons_Manager::render_icon($settings['submit_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></button>
			</div>
		</form>
	</div>



<?php endif; ?>