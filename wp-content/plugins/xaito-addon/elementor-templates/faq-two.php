<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!-- faq one start  -->
	<section class="xc-faq-two__section pb-90">
		<div class="container">
			<div class="xc-section__title-wrapper text-center mb-80 wow xcfadeUp">
				<?php
				if (!empty($settings['section_title'])) :
					$this->add_inline_editing_attributes('section_title', 'none');
					xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow', $settings['section_title_tag_']);
				endif;
				?>
			</div>
			<div class="row">
				<?php
				foreach ($settings['faq_lists'] as $index => $list) :
				?>
					<div class="xc-accrodion-grp" data-grp-name="faq-two-xc-accrodion">
						<div class="xc-accrodion <?php echo esc_attr(('yes' == $list['active_status'] ? 'active' : '')); ?> wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index) ?>00ms">
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
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- faq one end  -->


<?php endif; ?>