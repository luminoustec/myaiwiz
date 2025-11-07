<?php if ('layout_two' == $settings['layout_type']) : ?>

	<!--Blog One Start-->
	<section class="blog-two">
		<div class="container">
			<?php if (!empty($settings['title']) || !empty($settings['sub_title'])) : ?>
				<div class="blog-two__top">
					<div class="section-title text-center">
						<?php if (!empty($settings['sub_title'])) : ?>
							<span class="section-title__tagline"><?php echo wp_kses($settings['sub_title'], 'xaito_allowed_tags'); ?></span>
							<div class="section-title__line center"></div>
						<?php endif; ?>
						<?php if (!empty($settings['title'])) : ?>
							<<?php echo esc_attr($settings['section_title_tag_']) ?> class="section-title__title"><?php echo wp_kses($settings['title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_tag_']) ?>>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
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

					<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="<?php esc_attr_e($index + 1) ?>00ms">
						<div class="blog-two__single">
							<div class="blog-two__img">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('xaito_blog_370X250'); ?></a>
							</div>
							<div class="blog-two__content">
								<div class="blog-two__date-and-arrow">
									<div class="blog-two__date">
										<span><?php echo get_the_date('d') ?></span>
										<p><?php echo get_the_date('M') ?></p>
									</div>
									<a href="<?php the_permalink(); ?>"><i class="icon-fast-forward-thin-double-arrows"></i></a>
								</div>
								<div class="blog-two__title-box">
									<h4 class="blog-two__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
								</div>
								<div class="blog-two__content-box">
									<?php $category =  get_the_terms(get_the_ID(), 'category'); ?>
									<?php if (!empty($category[0]->name)) : ?>
										<div class="blog-two__tag">
											<p><?php echo esc_html($category[0]->name); ?></p>
										</div>
									<?php endif; ?>
									<ul class="blog-two__meta list-unstyled ml-0">
										<li>
											<?php xaito_posted_by(); ?>
										</li>
										<li>
											<?php xaito_comment_count(); ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				<?php $index++;
				endwhile; ?>

				<?php if ('yes' == $settings['pagination_status']) : ?>
					<div class="col-lg-12">
						<div class="blog-pagination wp-pagination portfolio-page__btn-box justify-content-center text-center pt-5">
							<?php xaito_custom_query_pagination($blog_post_one_query_paged, $blog_post_one_query->max_num_pages); ?>
						</div><!-- /.blog-post-pagination -->
					</div><!-- /.col-lg-12 -->
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<!--Blog One End-->

<?php endif; ?>