<?php if ('layout_three' == $settings['layout_type']) : ?>
	<!-- about start  -->
	<div class="xc-about-three__section pt-120 ">
		<div class="container">
			<?php if (!empty($settings['layout_three_section_title'])) : ?>
				<div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
					<?php
					$this->add_inline_editing_attributes('layout_three_section_title', 'none');
					xaito_elementor_rendered_content($this, 'layout_three_section_title', 'xc-section__title wow', $settings['section_title_tag_layout_three']);
					?>
				</div>
			<?php endif; ?>
			<div class="row">
				<div class="col-lg-6">
					<div class="xc-about-three__left wow xcfadeUp">
						<div class="xc-about-three__img">
							<div data-tilt="">
								<?php xaito_elementor_rendered_image($settings, 'layout_three_image_one'); ?>
							</div>

							<div class="xc-about-three__img-shape">
								<?php xaito_elementor_rendered_image($settings, 'layout_three_shape_one'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xc-about-three__right ">
						<div class="xc-about-three__feature-list">
							<?php foreach ($settings['list_item_three'] as $index => $item) : ?>
								<div class="xc-about-three__feature-item item-<?php echo esc_attr($index + 1) ?> wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index + 1) ?>00ms">
									<div class="xc-about-three__feature-count"></div>
									<div class="xc-about-three__feature-content">
										<h3 class="xc-about-three__feature-title"><?php echo wp_kses($item['title'], 'xaito_allowed_tags'); ?></h3>
										<p><?php echo wp_kses($item['text'], 'xaito_allowed_tags'); ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- about end  -->
<?php endif; ?>