<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!--about one start  -->
	<section class="xc-about-one__section pt-30 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="xc-about-one__img mb-30 wow xcfadeLeft">
						<span data-tilt="">
							<?php xaito_elementor_rendered_image($settings, 'image_one'); ?>
						</span>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="xc-about-one__right  wow xcfadeRight">
						<div class="xc-section__title-wrapper">
							<?php
							if (!empty($settings['section_title'])) :
								$this->add_inline_editing_attributes('section_title', 'none');
								xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow', $settings['section_title_tag_']);
							endif;
							?>
							<?php
							if (!empty($settings['section_summary'])) :
								$this->add_inline_editing_attributes('section_summary', 'none');
								xaito_elementor_rendered_content($this, 'section_summary', 'mb-20', 'p');
							endif;
							?>
						</div>
						<div class="xc-about-one__feature">
							<ul class="xc-about-one__feature-list list-unstyled">
								<?php foreach ($settings['list_item'] as $index => $item) : ?>
									<li>
										<p><span class="xc-icon"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span> <?php echo wp_kses($item['text'], 'xaito_allowed_tags'); ?></p>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
						<?php if (!empty($settings['button'])) : ?>
							<div class="xc-about-one__btn mt-40">
								<?php
								$this->add_inline_editing_attributes('button', 'none');
								xaito_elementor_rendered_content($this, 'button', 'xc-btn', 'a');
								?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about one end  -->


<?php endif; ?>