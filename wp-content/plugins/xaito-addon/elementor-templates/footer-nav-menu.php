<?php if ('layout_one' == $settings['layout_type']) : ?>
	<div class="xc-footer__widget mb-30">
		<?php if (!empty($settings['title'])) : ?>
			<h3 class="xc-footer__widget-title"><?php echo esc_html($settings['title']); ?></h3>
		<?php endif; ?>
		<div class="xc-footer__widget-nav">
			<?php wp_nav_menu(array(
				'menu' => $settings['nav_menu'],
				'menu_class' => '',
				'container'  => ''
			)); ?>
		</div>
	</div>
<?php endif; ?>