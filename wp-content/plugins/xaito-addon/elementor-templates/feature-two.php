<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!-- xc feature two  -->
	<div class="xc-feature-two__section pb-120">

		<div class="container">
			<?php if (!empty($settings['layout_two_sec_title']) || !empty($settings['layout_two_sec_info'])) : ?>
				<div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
					<?php
					if (!empty($settings['layout_two_sec_subtitle'])) :
						$this->add_inline_editing_attributes('layout_two_sec_subtitle', 'none');
						xaito_elementor_rendered_content($this, 'layout_two_sec_subtitle', 'xc-section__subtitle style-2', 'span');
					endif;
					?>
					<?php
					if (!empty($settings['layout_two_sec_title'])) :
						$this->add_inline_editing_attributes('layout_two_sec_title', 'none');
						xaito_elementor_rendered_content($this, 'layout_two_sec_title', 'xc-section__title wow', $settings['section_title_tag_layout_two']);
					endif;
					?>
					<?php
					if (!empty($settings['section_summary'])) :
						$this->add_inline_editing_attributes('section_summary', 'none');
						xaito_elementor_rendered_content($this, 'section_summary', 'mb-20', 'p');
					endif;
					?>
				</div>
			<?php endif; ?>
			<div class="xc-feature-two__inner p-relative">
				<div class="xc-feature-two__line">
				</div>
				<?php foreach ($settings['feature_two_items'] as $index => $item) : ?>
					<div class="xc-feature-two__item wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index + 1) ?>00ms">
						<div class="row feature-item-<?php echo esc_attr($index + 1) ?>">
							<div class="col-lg-6">
								<div class="xc-feature-two__imgs" data-tilt="">
									<div class="main-img-1" data-tilt="">
										<?php xaito_elementor_rendered_image($item, 'bg'); ?>
									</div>
									<div class="xc-feature-two__shapes">
										<div class="img-1" data-tilt="">
											<?php xaito_elementor_rendered_image($item, 'image'); ?>
										</div>
										<div class="img-2">
											<span data-tilt="">
												<?php xaito_elementor_rendered_image($item, 'image_two'); ?>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="xc-feature-two__content">
									<span class="xc-feature-two__count">0<?php echo esc_html($index + 1)?></span>
									<h3 class="xc-feature-two__title"><?php esc_html_e($item['title']) ?></h3>
									<p class="xc-feature-two__info"><?php esc_html_e($item['info']) ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- xc feature three  -->

<?php endif; ?>