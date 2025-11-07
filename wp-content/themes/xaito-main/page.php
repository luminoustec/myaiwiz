<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xaito
 */

get_header();
?>

<!-- xc-postbox area start -->
<div class="xc-postbox__area pt-120 pb-90">
	<div class="container">
		<div class="row">
			<?php $xaito_content_class = (is_active_sidebar('sidebar-1')) ? "col-xl-8 col-lg-7" : "col-xl-12 col-lg-12" ?>
			<div class="<?php echo esc_attr($xaito_content_class); ?>">
				<div class="xc-postbox__wrapper mb-50">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'page');


						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</div>
			</div>
			<?php if (is_active_sidebar('sidebar-1')) : ?>
				<div class="col-xl-4 col-lg-5 <?php echo esc_attr(xaito_blog_layout()); ?>">
					<div class="xc-sidebar__wrapper">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- xc-postbox area end -->

<?php
get_footer();
