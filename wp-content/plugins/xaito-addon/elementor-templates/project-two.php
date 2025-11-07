<!--Start Cases One-->
<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!--Project Two Start-->
	<section class="project-two">
		<div class="project-two__bg-img" style="background-image: url(<?php echo esc_url($settings['layout_two_bg_image']['url']) ?>);"></div>
		<div class="project-two__top">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<?php if (!empty($settings['layout_two_title']) || !empty($settings['layout_two_sub_title'])) : ?>
							<div class="section-title text-center">
								<span class="section-title__tagline"><?php echo wp_kses($settings['layout_two_sub_title'], 'xaito_allowed_tags'); ?></span>

								<<?php echo esc_attr($settings['section_title_two_tag_']) ?> class="section-title__title"><?php echo wp_kses($settings['layout_two_title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_two_tag_']) ?>>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="project-two__bottom">
			<div class="container">
				<div class="project-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(xaito_get_owl_options($settings)) ?>'>
					<?php foreach ($settings['layout_two_service_items'] as $index => $item) : ?>
						<!--Project Two Single Start-->
						<div class="item">
							<div class="project-two__single">
								<div class="project-two__img-box">
									<div class="project-two__img">
										<img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($item['image']['id']); ?>">
									</div>
									<div class="project-two__content">
										<div class="project-two__content-left">
											<div class="project-two__title-box">
												<p class="project-two__subtitle">
													<?php esc_html_e($item['subtitle']) ?>
												</p>
												<h4 class="project-two__title"><a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>"><?php esc_html_e($item['title']) ?></a>
												</h4>
											</div>
										</div>
										<div class="project-two__details">
											<?php if (!empty($item['button_label'])) : ?>
												<p><?php echo esc_html($item['button_label']); ?></p>
											<?php endif; ?>

											<div class="project-two__details-box">
												<a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>" class="project-two__icon">
													<?php \Elementor\Icons_Manager::render_icon($item['link-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
												<a href="<?php echo esc_url($item['image']['url']); ?>" class="project-two__icon-2">

													<?php \Elementor\Icons_Manager::render_icon($item['zoom-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Project Two Single End-->
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<!--Project Two End-->


<?php endif; ?>