<?php

/**
 * Template part for displaying Breadcrumb
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xaito
 */
?>
<!-- xc-breadcrumb area start -->
<div class="xc-breadcrumb__area">
	<div class="xc-breadcrumb__bg w-img">
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/backgroud/breadcrumb-bg.png" alt="<?php echo esc_attr("shape-one") ?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xxl-12">
				<div class="xc-breadcrumb__content text-center p-relative z-index-1">
					<?php
					$xaito_page_title_text = !empty(get_post_meta(get_the_ID(), 'xaito_set_header_title', true)) ? get_post_meta(get_the_ID(), 'xaito_set_header_title', true) : get_the_title();
					$xaito_page_header_tag = apply_filters('xaito_page_header_tag', 'h3');
					?>

					<<?php echo esc_attr($xaito_page_header_tag); ?> class="xc-breadcrumb__title">
						<?php if (!is_page()) : ?>
							<?php xaito_page_title(); ?>
						<?php else : ?>
							<?php echo wp_kses($xaito_page_title_text, 'xaito_allowed_tags') ?>
						<?php endif; ?>
					</<?php echo esc_attr($xaito_page_header_tag); ?>>
					<?php $xaito_page_meta_breadcumb_status = empty(get_post_meta(get_the_ID(), 'xaito_show_page_breadcrumb', true)) ? 'on' : get_post_meta(get_the_ID(), 'xaito_show_page_breadcrumb', true); ?>
					<?php if (function_exists('bcn_display') && 'yes' == get_theme_mod('breadcrumb_opt', 'off') && 'on' == $xaito_page_meta_breadcumb_status) : ?>
						<div class="xc-breadcrumb__list">
							<?php bcn_display(); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- xc-breadcrumb area end -->