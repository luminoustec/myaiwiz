<?php if ('layout_seven' == $settings['layout_type']) : ?>
	
	<div class="xc-video-two__section pb-90 fix">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="xc-section__title-wrapper wow xcfadeUp mb-40">
						<?php if (!empty($settings['layout_seven_section_subtitle'])) :
							$this->add_inline_editing_attributes('layout_seven_section_subtitle', 'none');
							xaito_elementor_rendered_content($this, 'layout_seven_section_subtitle', 'xc-section__subtitle', 'span');
						endif; ?>
						<?php if (!empty($settings['layout_seven_section_title'])) :
							$this->add_inline_editing_attributes('layout_seven_section_title', 'none');
							xaito_elementor_rendered_content($this, 'layout_seven_section_title', 'xc-section__title wow sm-title', $settings['section_title_tag_layout_seven']);
						endif; ?>
						<?php if (!empty($settings['layout_seven_section_info'])) :
							$this->add_inline_editing_attributes('layout_seven_section_info', 'none');
							xaito_elementor_rendered_content($this, 'layout_seven_section_info', '', 'p');
						endif; ?>
					</div>
					<ul class="xc-about-six__list list-unstyled ml-0 wow xcfadeUp">
						<?php foreach ($settings['list_item_seven'] as $index => $item) : ?>
							<li>
								<p><?php echo wp_kses($item['info'], 'xaito_allowed_tags') ?></p>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="col-lg-6 order-first order-lg-2">
					<div class="xc-video-two__left mb-30">
						<div class="img-1">
							<div data-tilt="">
								<?php xaito_elementor_rendered_image($settings, 'layout_seven_image_one'); ?>
							</div>
							<div class="xc-video-two__video xc-video-1">
								<a class="xc-popup-video" href="<?php echo esc_url($settings['video_url']['url']); ?>"><i class="fa-solid fa-play"></i> </a>
							</div>
							<div class="xc-video-two__shapes">
								<div class="shape-1">
									<?php xaito_elementor_rendered_image($settings, 'layout_seven_shape_one'); ?>
								</div>
								<div class="shape-2">
									<?php xaito_elementor_rendered_image($settings, 'layout_seven_shape_two'); ?>
								</div>
								<div class="shape-3">
									<?php xaito_elementor_rendered_image($settings, 'layout_seven_shape_three'); ?>
								</div>
								<div class="shape-4">
									<?php xaito_elementor_rendered_image($settings, 'layout_seven_shape_four'); ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>