<?php if ('layout_one' == $settings['layout_type']) : ?>
	<div class="xc-feature-three__section pt-120 pb-90">
		<div class="container">
			<div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
				<?php
				if (!empty($settings['sec_subtitle'])) :
					$this->add_inline_editing_attributes('sec_subtitle', 'none');
					xaito_elementor_rendered_content($this, 'sec_subtitle', 'xc-section__subtitle style-2', 'span');
				endif;
				?>
				<?php
				if (!empty($settings['sec_title'])) :
					$this->add_inline_editing_attributes('sec_title', 'none');
					xaito_elementor_rendered_content($this, 'sec_title', 'xc-section__title wow',  $settings['section_title_tag_']);
				endif;
				?>
				<?php
				if (!empty($settings['section_summary'])) :
					$this->add_inline_editing_attributes('section_summary', 'none');
					xaito_elementor_rendered_content($this, 'section_summary', 'mb-20', 'p');
				endif;
				?>
			</div>
			<div class="xc-feature-three_wrapper">
				<div class="row">
					<?php foreach ($settings['feature_items'] as $index => $item) : ?>
						<div class="col-lg-6">
							<div class="xc-feature-three__item wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index) ?>00ms">
								<div class="xc-feature-three__icon color-<?php echo esc_attr($index+1) ?>">
									<span><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
								</div>
								<div class="xc-feature-three__content">
									<h3 class="xc-feature-three__title"><?php esc_html_e($item['title']) ?></h3>
									<p><?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

			</div>
		</div>
	</div>

	<!-- feature three  -->

<?php endif; ?>