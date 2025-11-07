<?php if ('layout_six' == $settings['layout_type']) : ?>
	<div class="xc-about-six__section pb-90 fix">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="xc-about-six__left">
						<div class="xc-about-six__banner">
							<span><i class="fa-light fa-file-video"></i><?php esc_html_e('Type video Topics...','xaito-addon') ?> </span>
						</div>
						<div class="images-1 d-md-flex align-items-center mb-30">
							<div class="img-1">
								<?php xaito_elementor_rendered_image($settings, 'layout_six_image_one'); ?>
							</div>
							<div class="img-2">
								<?php xaito_elementor_rendered_image($settings, 'layout_six_image_two'); ?>
								<div class="shape-2">
									<?php xaito_elementor_rendered_image($settings, 'layout_six_shape_one'); ?>
								</div>
							</div>
						</div>
						<div class="img-3 mb-30">
							<?php xaito_elementor_rendered_image($settings, 'layout_six_image_three'); ?>
							<div class="shape-1">
								<?php xaito_elementor_rendered_image($settings, 'layout_six_shape_two'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xc-section__title-wrapper wow xcfadeUp mb-40">
						<?php if (!empty($settings['layout_six_section_subtitle'])) :
							$this->add_inline_editing_attributes('layout_six_section_subtitle', 'none');
							xaito_elementor_rendered_content($this, 'layout_six_section_subtitle', 'xc-section__subtitle', 'span');
						endif; ?>
						<?php if (!empty($settings['layout_six_section_title'])) :
							$this->add_inline_editing_attributes('layout_six_section_title', 'none');
							xaito_elementor_rendered_content($this, 'layout_six_section_title', 'xc-section__title wow sm-title', $settings['section_title_tag_layout_six']);
						endif; ?>
						<?php if (!empty($settings['layout_six_section_info'])) :
							$this->add_inline_editing_attributes('layout_six_section_info', 'none');
							xaito_elementor_rendered_content($this, 'layout_six_section_info', '', 'p');
						endif; ?>
					</div>
					<ul class="xc-about-six__list list-unstyled ml-0 wow xcfadeUp">
						<?php foreach ($settings['list_item_six'] as $index => $item) : ?>
							<li>
								<p><?php echo wp_kses($item['info'], 'xaito_allowed_tags') ?></p>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php endif; ?>