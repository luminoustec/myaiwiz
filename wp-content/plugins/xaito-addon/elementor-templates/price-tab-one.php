<?php if ('layout_one' == $settings['layout_type']) : ?>
	<section class="xc-price-one__section p-relative z-index-1 pt-120 pb-90 overflow-hidden" data-background="<?php echo esc_url($settings['bg_image']['url']) ?>">
		<div class="container">
			<div class="xc-section__title-wrapper text-center mb-55 wow xcfadeUp">
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
			<div class="xc-price-one__tab-nav">
				<nav class="xc-price-one__tab-wrapper xc-nav">
					<div class="nav nav-tabs xc-price-tab-slide justify-content-center" id="nav-tab" role=tablist>
						<label for="price-tab-check" class="nav justify-content-center">
							<span class="nav-link" id="nav-monthly-tab" data-bs-toggle="tab" data-bs-target="#nav-monthly" role="tab" aria-controls="nav-monthly" aria-selected="true"><?php echo esc_html($settings['montly_tab_text']); ?></span>
							<input type="checkbox" id="price-tab-check">
							<i></i>
							<span class="nav-link active" id="nav-yearly-tab" data-bs-toggle="tab" data-bs-target="#nav-yearly" role="tab" aria-controls="nav-yearly" aria-selected="false"><?php echo esc_html($settings['yearly_tab_text']); ?></span>
						</label>
					</div>
					<div class="xc-price-one__tab-offer">
						<?php xaito_elementor_rendered_image($settings, 'shape_one'); ?>
						<span><?php echo esc_html($settings['offer']); ?></span>
					</div>
				</nav>
			</div>
			<div class="row">
				<div class="col-xxl-12">
					<div class="tab-content wow fadeInUp" id="nav-tabContent" data-wow-delay=".3s">
						<div class="tab-pane fade" id="nav-monthly" role="tabpanel" aria-labelledby="nav-monthly-tab">
							<div class="row">
								<?php foreach ($settings['montly_price_table'] as $index => $item) : ?>
									<?php $feature = $item['feature_status'] == "yes" ? "featured" : '';
									?>
									<div class="col-lg-4">
										<div class="xc-price-one__item <?php echo esc_attr($feature); ?>">
											<?php if ($item['feature_status'] == "yes") : ?>
												<div class="xc-price-one__banner">
													<p><?php echo esc_html($item['feature_title']) ?></p>
												</div>
											<?php endif; ?>
											<div class="xc-price-one__head">
												<h3 class="xc-price-one__package"><?php echo esc_html($item['package']) ?></h3>
												<p class="xc-price-one__price"><?php echo esc_html($item['price']) ?> <span><?php echo esc_html($item['duration']) ?></span></p>
											</div>
											<div class="xc-price-one__list">
												<?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?>
											</div>
											<div class="xc-price-one__btn">
												<a <?php echo esc_attr(!empty($item['btn_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['btn_url']['url']); ?>"><?php echo esc_html($item['btn_text']) ?></a>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="tab-pane fade show active" id="nav-yearly" role="tabpanel" aria-labelledby="nav-yearly-tab">
							<div class="row">
								<?php foreach ($settings['yearly_price_table'] as $index => $item) : ?>
									<?php $feature = $item['feature_status'] == "yes" ? "featured" : '';
									?>
									<div class="col-lg-4">
										<div class="xc-price-one__item <?php echo esc_attr($feature); ?>">
											<?php if ($item['feature_status'] == "yes") : ?>
												<div class="xc-price-one__banner">
													<p><?php echo esc_html($item['feature_title']) ?></p>
												</div>
											<?php endif; ?>
											<div class="xc-price-one__head">
												<h3 class="xc-price-one__package"><?php echo esc_html($item['package']) ?></h3>
												<p class="xc-price-one__price"><?php echo esc_html($item['price']) ?> <span><?php echo esc_html($item['duration']) ?></span></p>
											</div>
											<div class="xc-price-one__list">
												<?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?>
											</div>
											<div class="xc-price-one__btn">
												<a <?php echo esc_attr(!empty($item['btn_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['btn_url']['url']); ?>"><?php echo esc_html($item['btn_text']) ?></a>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- price area end -->

<?php endif; ?>