<?php if ('layout_one' == $settings['layout_type']) : ?>
	<div class="xc-footer-one__copyright theme-bg-2 has-border">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="xc-footer-one__copyright-text text-center"><?php echo wp_kses($settings['copyright_text'], 'xaito_allowed_tags') ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>