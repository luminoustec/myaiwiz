<?php if ('layout_one' == $settings['layout_type']) : ?>

	<!--CTA Project Start-->
	<section class="cta-project">
		<div class="cta-project-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?php echo esc_url($settings['bg_image']['url']) ?>);">
		</div>
		<div class="container">
			<div class="cta-project__top">
				<div class="row">
					<div class="col-xl-9 col-lg-9 col-md-9">
						<?php if (!empty($settings['title']) || !empty($settings['subtitle'])) : ?>
							<div class="cta-project__top-left">
								<p class="cta-project__tagline"><?php echo wp_kses($settings['subtitle'], 'xaito_allowed_tags'); ?></p>
								<<?php echo esc_attr($settings['section_title_tag_']) ?> class="cta-project__title"><?php echo wp_kses($settings['title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_tag_']) ?>>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-3">
						<div class="cta-project__top-right">
							<div class="cta-project__video-link">
								<a href="<?php echo esc_url($settings['video_url']); ?>" class="video-popup">
									<div class="cta-project__video-icon">
										<span class="fa fa-play"></span>
										<i class="ripple"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="cta-project__bottom">
				<div class="cta-project__bottom-inner">
					<div class="cta-project__bottom-left">
						<div class="cta-project-counter-shape" style="background-image: url(<?php echo esc_url($settings['shape_one']['url']) ?>);">
						</div>
						<div class="cta-project-counter-bg" style="background-image: url(<?php echo esc_url($settings['shape_two']['url']) ?>);">
						</div>
						<div class="cta-project__counter">
							<ul class="list-unstyled cta-project__counter-list ml-0">
								<?php foreach ($settings['layout_one_count'] as $item) : ?>
									<li>
										<div class="cta-project__counter-single">
											<div class="cta-project__counter-top">
												<div class="cta-project__counter-icon">
													<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
												</div>
												<div class="cta-project__counter-count-box">
													<div class="count-box">
														<h3 class="count-text" data-stop="<?php echo esc_attr($item['count']); ?>" data-speed="1500">00</h3>
														<span class="cta-project__counter-plus"><?php esc_html_e($item['count_after']) ?></span>
													</div>
												</div>
											</div>
											<p class="cta-project__counter-text"><?php echo esc_attr($item['title']); ?></p>
										</div>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
					<div class="cta-project__bottom-right">
						<p class="cta-project__bottom-text"><?php echo wp_kses($settings['content'], 'xaito_allowed_tags'); ?></p>
						<div class="cta-project__bottom-img">
							<img src="<?php echo esc_url($settings['image']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($settings['image']['id']) ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--CTA Project End-->
<?php endif; ?>