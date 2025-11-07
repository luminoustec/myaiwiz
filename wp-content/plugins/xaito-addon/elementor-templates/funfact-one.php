<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!--Start Facts Counter One-->
	<section class="facts-counter-one">
		<div class="facts-counter-one__bg" style="background-image: url(<?php echo esc_url($settings['backgroud-image']['url']) ?>);"></div>
		<div class="container">
			<div class="row">
				<!--Start Facts Counter One Left-->
				<div class="col-xl-6">
					<div class="facts-counter-one__left">
						<div class="facts-counter-one__left-inner">
							<ul class="list-unstyled facts-counter-one-list clearfix ml-0">
								<?php foreach ($settings['funfact_boxes'] as $index => $item) : ?>
									<li class="facts-counter-one-list-item text-center wow animated fadeInUp" data-wow-delay="0.<?php esc_attr($index + 1) ?>s">
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
								<?php endforeach; ?>
							</ul>

							<ul class="list-unstyled facts-counter-one-list clearfix wow animated fadeInUp ml-0" data-wow-delay="0.1s">
								<?php foreach ($settings['funfact_boxes_two'] as $index => $item) : ?>
									<li class="facts-counter-one-list-item text-center wow animated fadeInUp" data-wow-delay="0.<?php esc_attr($index + 1) ?>s">
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
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
				<!--End Facts Counter One Left-->
				<!--Start Facts Counter One Img-->
				<div class="col-xl-6 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
					<div class="facts-counter-one__img">
						<div class="shape1"></div>
						<div class="shape2"></div>
						<div class="shape3"></div>
						<div class="shape4"></div>
						<div class="shape5"></div>
						<img src="<?php echo esc_url($settings['image']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($settings['image']['id']); ?>">
					</div>
				</div>
				<!--End Facts Counter One Img-->
			</div>
		</div>
	</section>
	<!--End Facts Counter One-->
<?php endif; ?>