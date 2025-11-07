<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!--Start Facts Counter One-->
	<section class="facts-counter-one facts-counter-one--two">
		<div class="facts-counter-one__bg" style="background-image: url(<?php echo esc_url($settings['layout_two_backgroud-image']['url']) ?>);"></div>
		<div class="container">
			<div class="row">
				<!--Start Facts Counter One Left-->
				<div class="col-xl-12">
					<div class="facts-counter-one__left">
						<div class="facts-counter-one__left-inner">
							<ul class="list-unstyled facts-counter-one-list clearfix ml-0">
								<?php foreach ($settings['layout_two_funfact_boxes'] as $index => $item) : ?>
									<li class="facts-counter-one-list-item text-center wow animated fadeInUp" data-wow-delay="0.<?php echo esc_attr(($index + 1) * 2) ?>s">
										<div class="icon-box">
											<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
										</div>
										<p><?php echo esc_html($item['text']); ?></p>
										<h2 class="count-box">
											<span class="count-text" data-stop="<?php echo esc_attr($item['counter']); ?>" data-speed="1500">00</span>
											<?php if (!empty($item['sign'])) : ?>
												<span class="plus"><?php echo esc_html($item['sign']); ?></span>
											<?php endif; ?>
										</h2>
									</li>
								<?php endforeach ?>
							</ul>
						</div>
					</div>
				</div>
				<!--End Facts Counter One Left-->
			</div>
		</div>
	</section>
	<!--End Facts Counter One-->

	<!--Start Professional Therapy One-->
	<section class="professional-therapy-one">
		<div class="container">
			<div class="row">
				<!--Start Professional Therapy One Img-->
				<div class="col-xl-6 col-lg-6">
					<div class="professional-therapy-one__img" style="background-image: url(<?php echo esc_url($settings['layout_two_image']['url']) ?>);">
						<div class="shape1"></div>
						<div class="shape2"></div>
						<div class="shape3"></div>
						<div class="shape4"></div>
						<div class="shape5"></div>
					</div>
				</div>
				<!--End Professional Therapy One Img-->

				<!--Start Professional Therapy One Content-->
				<div class="col-xl-6 col-lg-6">
					<div class="professional-therapy-one__content">
						<?php if (!empty($settings['professional_title'])) : ?>
							<div class="title-box">
								<h2><?php echo wp_kses($settings['professional_title'], 'xaito_allowed_tags'); ?></h2>
							</div>
						<?php endif ?>

						<?php foreach ($settings['layout_two_funfact_boxes_two'] as $index => $item) : ?>
							<div class="professional-therapy-one__content-single">
								<div class="icon-box">
									<?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
								</div>
								<div class="content-box">
									<h2><?php echo esc_html($item['title']); ?></h2>
									<p><?php echo wp_kses($item['text'], 'xaito_allowed_tags'); ?></p>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<!--End Professional Therapy One Content-->
			</div>
		</div>
	</section>
	<!--End Professional Therapy One-->
<?php endif; ?>