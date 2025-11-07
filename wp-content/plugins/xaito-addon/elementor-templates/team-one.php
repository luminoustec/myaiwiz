<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!-- xc-team-one start -->
	<div class="xc-team-one__section pt-120 pb-90">
		<div class="container">
			<div class="xc-section__title-wrapper text-center mb-60">
				<?php
				if (!empty($settings['section_subtitle'])) :
					$this->add_inline_editing_attributes('section_subtitle', 'none');
					xaito_elementor_rendered_content($this, 'section_subtitle', 'xc-section__subtitle', 'span');
				endif;
				?>
				<?php
				if (!empty($settings['section_title'])) :
					$this->add_inline_editing_attributes('section_title', 'none');
					xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow', $settings['section_title_tag_']);
				endif;
				?>
			</div>
			<div class="row">
				<?php foreach ($settings['team_items'] as $index => $item) : ?>
					<div class="col-lg-3 col-md-6">
						<div class="xc-team-one__item text-center">
							<div class="xc-team-one__img">
								<img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo esc_attr(xaito_get_thumbnail_alt($item['image']['id'])); ?>">
							</div>
							<div class="xc-team-one__content">
								<h3 class="xc-team-one__name"><?php if (!empty($item['url']['url'])) : ?>
										<a href="<?php echo esc_url($item['url']['url']); ?>"><?php echo esc_html($item['name']); ?></a>
									<?php else : ?>
										<?php echo esc_html($item['name']); ?>
									<?php endif; ?>
								</h3>
								<span class="xc-team-one__bio"><?php echo esc_html($item['bio']); ?></span>
								<div class="xc-team-one__social">
									<?php echo wp_kses($item['social_network'], 'xaito_allowed_tags'); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- xc-team-one end -->
<?php endif; ?>