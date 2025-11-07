<?php if ('layout_four' == $settings['layout_type']) : ?>
	<!-- about four start  -->
	<div class="xc-about-four__section mb-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="xc-about-four__left mt-20">
						<div class="xc-about-four__img " data-tilt="">
							<?php xaito_elementor_rendered_image($settings, 'layout_four_image_one'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xc-about-four__right">
						<div class="xc-section__title-wrapper wow xcfadeUp">
							<?php if (!empty($settings['layout_four_section_title'])) :
								$this->add_inline_editing_attributes('layout_four_section_title', 'none');
								xaito_elementor_rendered_content($this, 'layout_four_section_title', 'xc-section__title wow', $settings['section_title_tag_layout_four']);
							endif; ?>
							<?php
							if (!empty($settings['layout_four_section_summary'])) :
								$this->add_inline_editing_attributes('layout_four_section_summary', 'none');
								xaito_elementor_rendered_content($this, 'layout_four_section_summary', 'mb-20', 'p');
							endif;
							?>
						</div>
						<div class="xc-about-four__tag wow xcfadeUp" data-wow-delay="200ms">
							<?php foreach ($settings['list_item_four'] as $index => $item) : ?>
								<span>
									<a href="<?php echo esc_url($item['tag_url']['url']) ?>"><?php echo esc_html($item['tag']) ?></a>
								</span>
							<?php endforeach; ?>
						</div>
						<div class="xc-about-four__btn wow xcfadeUp" data-wow-delay="200ms">
							<?php
							if (!empty($settings['button_label'])) :
								$this->add_inline_editing_attributes('button_label', 'none');
								xaito_elementor_rendered_content($this, 'button_label', 'xc-btn', 'a', 'button_url');
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- about four end  -->
<?php endif; ?>