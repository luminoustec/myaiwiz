<?php if ('layout_five' == $settings['layout_type']) : ?>
	<!-- about five start  -->
	<div class="xc-about-five__section mb-90 wow xcfadeUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="xc-about-five__right">
						<div class="xc-section__title-wrapper">

							<?php if (!empty($settings['layout_five_section_title'])) :
								$this->add_inline_editing_attributes('layout_five_section_title', 'none');
								xaito_elementor_rendered_content($this, 'layout_five_section_title', 'xc-section__title wow', $settings['section_title_tag_layout_five']);
							endif; ?>
							<?php if (!empty($settings['layout_five_section_info'])) :
								$this->add_inline_editing_attributes('layout_five_section_info', 'none');
								xaito_elementor_rendered_content($this, 'layout_five_section_info', 'mb-20', 'p');
							endif; ?>
						</div>
						<div class="xc-about-five__button">
							<?php foreach ($settings['list_item_five'] as $index => $item) : ?>
								<div class="xc-about-five__feature text-center wow xcfadeUp" data-wow-delay="<? echo esc_attr($index + 1) ?>00ms">
									<span class="xc-about-five__icon"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
									<p class="xc-about-five__info"><?php echo wp_kses($item['info'],'xaito_allowed_tags') ?></p>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6 order-first order-md-last">
					<div class="xc-about-five__left mt-20 wow xcfadeUp" data-wow-delay="300ms">
						<div class="xc-about-five__img" data-tilt="">
							<?php xaito_elementor_rendered_image($settings, 'layout_five_image_one'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- about six end  -->

<?php endif; ?>