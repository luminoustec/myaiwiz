<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package xaito
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- xc-error area start -->
	<section class="xc-error__section xc-error__bg pt-110 pb-110">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6 col-lg-8 col-md-10">
					<div class="xc-error__wrapper p-relative z-index-1 text-center">

						<div class="xc-error__thumb w-img">
							<?php if (!empty(get_theme_mod('page_404_bg_image'))) : ?>
								<img src="<?php echo esc_url(get_theme_mod('page_404_bg_image')); ?>" alt="<?php esc_attr_e('404 error', 'xaito') ?>">
							<?php else : ?>
								<img src="<?php echo get_theme_file_uri() ?>/assets/img/resourse/404.png" alt="<?php esc_attr_e('404 error', 'xaito') ?>">
							<?php endif; ?>
						</div>
						<div class="xc-error__content">

							<h3 class="xc-error__title"><?php esc_html_e('Oops! Page not found', 'xaito'); ?></h3>
							<p><?php esc_html_e('Whoops, this is embarassing. Looks like the page you were looking for wasn\'t found.', 'xaito'); ?></p>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="xc-btn">
								<?php esc_html_e('Back to Home', 'xaito'); ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- xc-error area end -->




</main><!-- #main -->

<?php
get_footer();
