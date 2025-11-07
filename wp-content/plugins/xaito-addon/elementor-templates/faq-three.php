<?php if ('layout_three' == $settings['layout_type']) : ?>
	<!-- faq three start  -->
	<div class="xc-faq-three__section pb-120">
		<div class="container">
			<div class="xc-section__title-wrapper wow xcfadeUp text-center mb-60">
				<?php
				if (!empty($settings['section_subtitle'])) :
					$this->add_inline_editing_attributes('section_subtitle', 'none');
					xaito_elementor_rendered_content($this, 'section_subtitle', 'xc-section__subtitle', 'p');
				endif;
				?>
				<?php
				if (!empty($settings['section_title'])) :
					$this->add_inline_editing_attributes('section_title', 'none');
					xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow', $settings['section_title_tag_']);
				endif;
				?>
			</div>
			<div class="xc-faq-three__wrapper">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="xc-faq-three__left mb-30">
							<div class="xc-faq-three__img w-img" data-tilt="">
								<?php xaito_elementor_rendered_image($settings, 'img'); ?>
							</div>
							<div class="xc-faq-three__shapes">
								<div class="shape-1">
									<?php xaito_elementor_rendered_image($settings, 'shape_one'); ?>
								</div>
								<div class="shape-2">
									<?php xaito_elementor_rendered_image($settings, 'shape_two'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="xc-accrodion-grp" data-grp-name="faq-three-xc-accrodion">
							<?php
							foreach ($settings['faq_lists'] as $index => $list) :
							?>
								<div class="xc-accrodion <?php echo esc_attr(('yes' == $list['active_status'] ? 'active' : '')); ?> wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index + 1) ?>00ms">
									<div class="xc-accrodion-title">
										<span class="xc-icon"><?php \Elementor\Icons_Manager::render_icon($list['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
										<h4><?php echo wp_kses($list['question'], 'xaito_allowed_tags'); ?></h4>
									</div>
									<div class="xc-accrodion-content">
										<div class="inner">
											<p><?php echo wp_kses($list['answer'], 'xaito_allowed_tags'); ?></p>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- faq three end  -->


<?php endif; ?>