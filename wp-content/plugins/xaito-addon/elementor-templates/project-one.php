<!--Start Cases One-->
<?php if ('layout_one' == $settings['layout_type']) : ?>

	<!--Project One Start-->
	<section class="project-one">
		<div class="project-one-bg" style="background-image: url(<?php echo esc_url($settings['bg_image']['url']) ?>);">
		</div>
		<div class="container">
			<?php if (!empty($settings['title']) || !empty($settings['sub_title'])) : ?>
				<div class="project-one__top">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="project-one__left">
								<div class="section-title text-left">
									<span class="section-title__tagline"><?php echo wp_kses($settings['sub_title'], 'xaito_allowed_tags'); ?></span>
									<<?php echo esc_attr($settings['section_title_tag_']) ?> class="section-title__title"><?php echo wp_kses($settings['title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_tag_']) ?>>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<?php if (!empty($settings['description'])) : ?>
								<div class="project-one__right">
									<p class="project-one__text"><?php echo wp_kses($settings['description'], 'xaito_allowed_tags'); ?></p>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
			<div class="project-one__bottom">
				<div class="project-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(xaito_get_owl_options($settings)) ?>'>
					<?php foreach ($settings['layout_one_service_items'] as $index => $item) : ?>
						<div class="item">
							<div class="project-one__single">
								<?php if (!empty($item['image']['url'])) : ?>
									<div class="project-one__img">
										<img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($item['image']['id']); ?>">
									</div>
								<?php endif; ?>

								<div class="project-one__content">
									<div class="project-one__content-left">
										<div class="project-one__content-arrow-box">
											<div class="project-one__content-arrow-box-inner">
												<?php if (!empty($item['button_label'])) : ?>
													<p class="project-one__content-arrow-text"><?php echo esc_html($item['button_label']); ?></p>
												<?php endif; ?>
												<a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>" class="project-one__content-arrow"><span class="icon-fast-forward-thin-double-arrows"></span></a>
											</div>
										</div>
										<div class="project-one__content-title-box">
											<p class="project-one__content-title-sub-title"><?php echo esc_html($item['subtitle']); ?></p>
											<h3 class="project-one__content-title"><a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>"><?php echo esc_html($item['title']); ?></a></h3>
										</div>
									</div>
									<div class="project-one__content-right">
										<ul class="list-unstyled project-one__content-icon-box ml-0">
											<li>
												<div class="project-one__content-icon">
													<?php \Elementor\Icons_Manager::render_icon($item['love-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
												</div>
											</li>
											<li>
												<div class="project-one__content-icon">
													<a href="<?php echo esc_url($item['image']['url']); ?>">
													<?php \Elementor\Icons_Manager::render_icon($item['link-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<!--Project One end-->

<?php endif; ?>