<?php if ('layout_three' == $settings['layout_type']) : ?>
	<!--Start Blog One-->
	<section class="blog-one blog-one--carousel">
		<div class="container">
			<div class="owl-carousel owl-theme thm-owl__carousel owl-dots-one" data-owl-options='<?php echo esc_attr(xaito_get_owl_options($settings)); ?>'>
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
				<?php while ($blog_post_one_query->have_posts()) :
					$blog_post_one_query->the_post(); ?>
					<!--Start Blog One Single-->
					<div class="item">

						<div class="blog-one__single">
							<div class="blog-one__single-img">
								<div class="blog-one__single-img-inner">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('xaito_blog_370X250'); ?></a>
								</div>

								<?php $category =  get_the_terms(get_the_ID(), 'category'); ?>
								<?php if (!empty($category[0]->name)) : ?>
									<div class="blog-one__single-img-text">
										<span><?php echo esc_html($category[0]->name); ?></span>
									</div>
								<?php endif; ?>
							</div>

							<div class="blog-one__single-content">
								<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a>
								</h2>
								<div class="blog-one__single-content-meta-box">
									<ul class="list-unstyled">
										<li>
											<?php xaito_posted_by(); ?>
										</li>

										<li>
											<?php xaito_posted_on(); ?>
										</li>

										<li>
											<div class="btn-box">
												<a href="<?php the_permalink() ?>"><span class="icon-right-arrow-2"></span></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--End Blog One Single-->
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<!--End Blog One-->
<?php endif; ?>