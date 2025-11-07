<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!-- testimonial one start  -->
	<section class="xc-testimonial-one__section theme-bg-5 pt-120 pb-90">
		<div class="container">
			<div class="xc-section__title-wrapper wow fadeInUp text-center mb-60">
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
				<?php foreach ($settings['layout_one_testimonial'] as $item) : ?>
					<div class="col-md-6">
						<div class="xc-testimonial-one__item bg-white mb-30 wow fadeInUp">
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
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- testimonial one end  -->

<?php endif; ?>