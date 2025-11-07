<?php if ('layout_five' == $settings['layout_type']) : ?>
	<!-- xc about history end -->
	<div class="xc-about-history__section pt-120 pb-60">
		<div class="container">
			<?php
			if (!empty($settings['layout_five_sec_title'])) : ?>
				<div class="xc-about-history__title-wraper text-center mb-60">
					<?php $this->add_inline_editing_attributes('layout_five_sec_title', 'none');
					xaito_elementor_rendered_content($this, 'layout_five_sec_title', 'xc-about-history__title',  $settings['section_title_tag_layout_five']); ?>
				</div>
			<?php endif; ?>
			<div class="xc-about-history__wrapper">
				<div class="container">
					<div class="row justify-content-center">
						<?php foreach ($settings['layout_five_feature_items'] as $index => $item) : ?>
							<div class="col-lg-4 col-md-6">
								<div class="xc-about-history__item">
									<div class="shape">
										<?php xaito_elementor_rendered_image($item, 'shape'); ?>
									</div>
									<div class="xc-about-history__imgs">
										<div class="img-1">
											<?php xaito_elementor_rendered_image($item, 'image'); ?>
										</div>
										<div class="img-2">
											<?php xaito_elementor_rendered_image($item, 'image_two'); ?>
										</div>
									</div>
									<div class="xc-about-history__content">
										<span class="xc-about-history__date"><?php echo esc_html($item['date']) ?></span>
										<h3 class="xc-about-history__title"><a href="<?php echo esc_url($item['url']['url']) ?>"><?php echo esc_html($item['title']) ?></a></h3>
										<p class="xc-about-history__content"><?php echo esc_html($item['contact']) ?></p>
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
	<!-- xc about history start -->

<?php endif; ?>