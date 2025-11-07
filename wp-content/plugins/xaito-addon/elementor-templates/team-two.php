<?php if ('layout_two' == $settings['layout_type']) : ?>
	<!--Team Page Start-->
	<section class="team-page">
		<div class="container">
			<div class="row">
				<!--Team One Single Start-->
				<?php foreach ($settings['team_two_items'] as $index => $item) : ?>
					<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php esc_attr_e($index) ?>00ms">
						<div class="team-one__single">
							<div class="team-one__img">
								<img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo esc_attr(xaito_get_thumbnail_alt($item['image']['id'])); ?>">
								<div class="team-one__content">
									<h4 class="team-one__title"><?php if (!empty($item['url']['url'])) : ?>
											<a href="<?php echo esc_url($item['url']['url']); ?>"><?php echo esc_html($item['name']); ?></a>
										<?php else : ?>
											<?php echo esc_html($item['name']); ?>
										<?php endif; ?>
									</h4>
									<p class="team-one__tagline"><?php echo esc_html($item['bio']); ?></p>
									<ul class="team-one__social list-unstyled ml-0">
										<?php echo wp_kses($item['social_network'], 'xaito_allowed_tags'); ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<!--Team One Single End-->
			</div>
		</div>
	</section>
	<!--Team Page End-->
<?php endif; ?>