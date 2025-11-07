<?php if ('layout_three' == $settings['layout_type']) : ?>
	<!--Testimonial Two Start-->
	<section class="testimonial-two testimonial-three">
		<div class="testimonial-two-bg" style="background-image: url(<?php echo esc_url($settings['layout_three_bg_image']['url']); ?>);"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-4">
					<div class="testimonial-two__left">
						<?php if (!empty($settings['layout_three_sec_title']) || !empty($settings['layout_three_sec_sub_title'])) : ?>
							<div class="section-title text-left">
								<?php if (!empty($settings['layout_three_sec_sub_title'])) : ?>
									<span class="section-title__tagline"><?php echo wp_kses($settings['layout_three_sec_sub_title'], 'xaito_allowed_tags'); ?></span>
								<?php endif; ?>
								<?php if (!empty($settings['layout_three_sec_title'])) : ?>
									<h2 class="section-title__title"><?php echo wp_kses($settings['layout_three_sec_title'], 'xaito_allowed_tags'); ?></h2>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<?php if (!empty($settings['layout_three_summary'])) : ?>
							<p class="testimonial-two__text"><?php echo wp_kses($settings['layout_three_summary'], 'xaito_allowed_tags'); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-xl-8">
					<div class="testimonial-two__right">
						<div class="testimonial-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(xaito_get_owl_options($settings)); ?>'>
							<?php foreach ($settings['layout_three_testimonial'] as $item) : ?>
								<!--Testimonial Two Single Start-->
								<div class="item">
									<div class="testimonial-two__single">
										<div class="testimonial-two__client-info">
											<div class="testimonial-two__client-img">
												<img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($item['image']['id']); ?>">
											</div>
											<div class="testimonial-two__client-content">
												<h4 class="testimonial-two__client-name"><?php echo esc_html($item['name']); ?></h4>
												<p class="testimonial-two__client-sub-title"><?php echo esc_html($item['designation']); ?></p>
											</div>
										</div>
										<p class="testimonial-two__text-2"><?php echo esc_html($item['testimonial']); ?></p>
										<div class="testimonial-two__quote">
											<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
										</div>
										<div class="testimonial-two__rating">
											<?php for ($i = 0; $i < $item['rating']['size']; $i++) : ?>
												<i class="fa fa-star"></i>
											<?php endfor; ?>
										</div>
									</div>
								</div>
								<!--Testimonial Two Single End-->
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Testimonial Two End-->
<?php endif; ?>