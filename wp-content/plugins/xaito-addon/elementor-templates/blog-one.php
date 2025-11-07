<?php if ('layout_one' == $settings['layout_type']) : ?>
	<!-- xc-postbox area start -->
	<section class="xc-postbox__area pb-60">
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
			<div class="xc-postbox__wrapper mb-30">
				<div class="row">
					<?php
					$blog_post_one_query_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$blog_post_one_query_args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'ignore_sticky_posts' => true,
						'orderby' => 'date',
						'order'   => $settings['query_order'],
						'paged'          => $blog_post_one_query_paged,
						'posts_per_page' => $settings['post_count']['size']
					);
					$blog_post_one_query = new \WP_Query($blog_post_one_query_args);
					?>
					<?php $index = 0;
					while ($blog_post_one_query->have_posts()) :
						$blog_post_one_query->the_post(); ?>
						<div class="col-lg-4 col-md-6">
							<div class="xc-postbox__item xc-grid mb-30">
								<?php if (has_post_thumbnail()) : ?>
									<div class="xc-postbox__thumb w-img mb-20 p-relative">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('xaito_blog_370X250'); ?></a>
										<?php $category =  get_the_terms(get_the_ID(), 'category'); ?>
										<?php if (!empty($category[0]->name)) : ?>
											<div class="xc-postbox__cat">
												<a href="<?php the_permalink() ?>"><?php echo esc_html($category[0]->name); ?></a>
											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
								<div class="xc-postbox__content">
									<div class="xc-postbox__meta">
										<span>
											<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="fa-light fa-user"></i><?php echo get_the_author(); ?></a>
										</span>
										<span><a href="<?php the_permalink() ?>"><i class="fa-light fa-calendar"></i><?php echo get_the_date(); ?></a></span>

									</div>
									<h3 class="xc-postbox__title">
										<a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
									</h3>
									<div class="xc-postbox__read-more">
										<a href="<?php the_permalink() ?>" class="xc-more-btn"><?php esc_html_e("Read More", 'xaito')   ?><i class="fa-light fa-arrow-right-long"></i></a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<?php if ('yes' == $settings['pagination_status']) : ?>
					<div class="col-lg-12">
						<div class="wp-pagination">
							<?php xaito_custom_query_pagination($blog_post_one_query_paged, $blog_post_one_query->max_num_pages); ?>
						</div><!-- /.blog-post-pagination -->
					</div><!-- /.col-lg-12 -->
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<!-- xc-postbox area end -->

<?php endif; ?>