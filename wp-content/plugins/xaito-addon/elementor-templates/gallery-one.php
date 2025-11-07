<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!-- gallery start -->
	<div class="xc-gallery-one__section mb-90 pt-60">
		<div class="container">
			<div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
				<?php
				if (!empty($settings['sec_title'])) :
					$this->add_inline_editing_attributes('sec_title', 'none');
					xaito_elementor_rendered_content($this, 'sec_title', 'xc-section__title wow',  $settings['section_title_tag_']);
				endif;
				?>
			</div>
			<div class="xc-gallery-one__filter-box">
				<ul class="xc-gallery-one__filter post-filter learfix">
					<li data-role="button" data-filter=".filter-item" class="active"><span class="filter-text">All</span>
					</li>
					<?php foreach ($settings['btn_item'] as $index => $item) : ?>
						<li data-filter=".<?php echo esc_html($item['slug']) ?>"><span class="filter-text"><?php echo esc_html($item['button']) ?></span></li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="row filter-layout masonary-layout">
				<!--Intro Loan Three Single Start-->
				<?php foreach ($settings['gallery_items'] as $index => $item) : ?>
					<div class="col-lg-4 col-md-6 filter-item <?php echo esc_attr($item['slug']) ?>">
						<div class="xc-gallery-one__item w-img mb-25 " data-tilt="">
							<?php xaito_elementor_rendered_image($item, 'gallery'); ?>
						</div>
					</div>
				<?php endforeach; ?>
				<!--Intro Loan Three Single End-->
			</div>
		</div>
	</div>
	<!-- gallery end -->

<?php endif; ?>