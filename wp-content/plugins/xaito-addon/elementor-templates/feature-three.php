<?php if ('layout_three' == $settings['layout_type']) : ?>
	<!-- feaure start  -->
	<div class="xc-feature-four__section pt-120 pb-90">
		<div class="container">
			<?php
			if (!empty($settings['layout_three_sec_title'])) : ?>
				<div class="xc-section__title-wrapper text-center mb-80  wow xcfadeUp">
					<?php $this->add_inline_editing_attributes('layout_three_sec_title', 'none');
					xaito_elementor_rendered_content($this, 'layout_three_sec_title', 'xc-section__title wow',  $settings['section_title_tag_layout_three']); ?>
				</div>
			<?php endif; ?>
			<div class="row">
				<?php foreach ($settings['layout_three_feature_items'] as $index => $item) : ?>
					<div class="col-lg-4">
						<div class="xc-feature-four__item text-center wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index + 1) ?>00ms">
							<div class="xc-feature-four__icon color-<?php echo esc_attr($index + 1) ?>">
								<span data-tilt=""><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
							</div>
							<h3 class="xc-feature-four__title"><?php echo esc_html($item['title']) ?></h3>
							<p class="xc-feature-four__info"><?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- feaure end  -->
<?php endif; ?>