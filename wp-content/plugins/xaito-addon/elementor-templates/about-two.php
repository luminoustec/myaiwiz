<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!-- about two start -->
	<div class="xc-about-two__section pt-90 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" data-tilt="">
					<div class="xc-about-two__img wow xcfadeLeft mb-30">
						<div class="shape-1"><?php xaito_elementor_rendered_image($settings, 'layout_two_shape_one'); ?></div>
						<div class="shape-2"><?php xaito_elementor_rendered_image($settings, 'layout_two_shape_two'); ?></div>
						<div class="w-img">
							<?php xaito_elementor_rendered_image($settings, 'layout_two_image_one'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="xc-about-two__right wow xcfadeRight mb-30">
						<div class="xc-section__title-wrapper">
							<?php
							if (!empty($settings['layout_two_section_title'])) :
								$this->add_inline_editing_attributes('layout_two_section_title', 'none');
								xaito_elementor_rendered_content($this, 'layout_two_section_title', 'xc-about-two__title', $settings['section_title_tag_layout_two']);
							endif;
							?>
							<h4 class="xc-about-two__name"><?php echo esc_html($settings['layout_two_author_name']) ?></h4>
							<span class="xc-about-two__bio"><?php echo esc_html($settings['layout_two_author_bio']) ?></span>
						</div>
						<div class="xc-about-two__feature">
							<ul class="xc-about-two__feature-list list-unstyled">
								<?php foreach ($settings['list_item_two'] as $index => $item) : ?>
									<li>
										<div class="xc-about-two__count xc-count-box">
											<span class="xc-count-text" data-speed="1500" data-stop="<?php echo esc_html($item['count']); ?>"></span><?php echo esc_html($item['count_after']) ?>
											<p><?php echo wp_kses($item['text'], 'xaito_allowed_tags'); ?></p>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- about two end -->
<?php endif; ?>