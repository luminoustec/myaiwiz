<?php if ('layout_four' == $settings['layout_type']) : ?>
	<!--Testimonials Page Start-->
	<section class="testimonials-page">
		<div class="container">
			<div class="row">
				<?php foreach ($settings['layout_four_testimonial'] as $item) : ?>
					<!--Testimonial Two Single Start-->
					<div class="col-xl-4 col-lg-6 col-md-6">
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
	</section>
	<!--Testimonials Page End-->
<?php endif; ?>