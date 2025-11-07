<?php if ('layout_one' == $settings['layout_type']) : ?>

	<div class="footer-widget__contact">
		<?php if (!empty($settings['title'])) : ?>
			<h3 class="footer-widget__tag"><?php echo esc_html($settings['title']); ?></h3>
		<?php endif ?>
		<ul class="footer-widget__contact-box list-unstyled clearfix ml-0">
			<?php foreach ($settings['items'] as $item) : ?>
				<li>
					<div class="icon">
						<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
					</div>
					<div class="text">
						<p><?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?></p>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
		<ul class="footer-widget__social-box list-unstyled ml-0">
			<?php foreach ($settings['social_icons'] as $item) : ?>
				<li>
					<a href="<?php echo esc_url($item['social_url']['url']); ?>" <?php echo esc_attr(!empty($item['social_url']['is_external']) ? 'target=_blank' : ' '); ?>>
						<?php \Elementor\Icons_Manager::render_icon($item['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
					</a>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
<?php endif; ?>