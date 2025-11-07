<?php if ('layout_four' == $settings['layout_type']) : ?>
	<!-- feaure list start  -->
	<div class="xc-feature-five__section">
		<div class="container">
			<div class="xc-featrue-five__warapper pt-60 pb-30 theme-bg-4 text-center">
				<?php
				if (!empty($settings['layout_four_sec_title'])) : ?>
					<div class="xc-section__title-wrapper mb-60  wow xcfadeUp">
						<?php $this->add_inline_editing_attributes('layout_four_sec_title', 'none');
						xaito_elementor_rendered_content($this, 'layout_four_sec_title', 'xc-section__title wow',  $settings['section_title_tag_layout_four']); ?>
					</div>
				<?php endif; ?>
				<div class="d-flex flex-wrap justify-content-center">
					<?php foreach ($settings['layout_four_feature_items'] as $index => $item) : ?>
						<div class="item">
							<div class="xc-feature-five__item wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index + 1) ?>00ms">
								<span class="xc-feature-five__title"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
									<?php echo esc_html($item['title']) ?></span>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- feaure list end  -->

<?php endif; ?>