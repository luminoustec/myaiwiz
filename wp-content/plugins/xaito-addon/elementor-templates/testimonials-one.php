<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!-- testimonial one start  -->
	<section class="xc-testimonial-one__section">
		<div class="container-fluid gx-0">
			<div class="xc-testimonials-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='<?php echo esc_attr(xaito_get_owl_options($settings)) ?>'>
				<?php foreach ($settings['layout_one_testimonial'] as $item) : ?>
					<div class="xc-testimonial-one__item">
						<div class="xc-testimonial-one__avata">
							<div class="xc-testimonial-one__img">
								<?php xaito_elementor_rendered_image($item, 'image'); ?>
							</div>
							<div class="xc-testimonial-one__name">
								<h3><?php echo esc_html($item['name']); ?></h3>
								<span class="xc-testimonial-one__bio"><?php echo esc_html($item['designation']); ?></span>
							</div>
						</div>
						<div class="xc-testimonial-one__content">
							<div class="xc-testimonial-one__ratting">
								<?php for ($i = 0; $i < $item['rating']['size']; $i++) : ?>
									<span><i class="fa-solid fa-star"></i></span>
								<?php endfor; ?>
							</div>
							<h3 class="xc-testimonial-one__title"><?php echo esc_html($item['tagline']); ?></h3>
							<p class="xc-testimonial-one__review"><?php echo esc_html($item['testimonial']); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- testimonial one end  -->

<?php endif; ?>