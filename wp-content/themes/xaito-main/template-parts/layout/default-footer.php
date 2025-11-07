<?php

/**
 * Template part for displaying footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xaito
 */
?>


<?php
$xaito_page_id     = get_queried_object_id();
$xaito_custom_footer_status = !empty(get_post_meta($xaito_page_id, 'xaito_custom_footer_status', true)) ? get_post_meta($xaito_page_id, 'xaito_custom_footer_status', true) : 'off';

$xaito_custom_footer_id = '';
if ((is_page() && 'on' === $xaito_custom_footer_status) || (is_singular('portfolio') && 'on' === $xaito_custom_footer_status) || (is_singular('service') && 'on' === $xaito_custom_footer_status)) {
	$xaito_custom_footer_id = get_post_meta($xaito_page_id, 'xaito_select_custom_footer', true);
} elseif ('yes' == get_theme_mod('footer_custom')) {
	$xaito_custom_footer_id = get_theme_mod('footer_custom_post');
} else {
	$xaito_custom_footer_id = 'default_footer';
}

$xaito_dynamic_footer = isset($_GET['custom_footer_id']) ? $_GET['custom_footer_id'] : $xaito_custom_footer_id;
?>


<?php if ('default_footer' == $xaito_dynamic_footer) : ?>

	<footer class="xc-site-footer xc-default-footer text-center">
		<div class="xc-site-footer__bottom">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="xc-site-footer__bottom-inner">
							<p class="xc-site-footer__bottom-text"><?php echo wp_kses(get_theme_mod('footer_copytext', wp_kses('&copy; Copyright 2024 by <a href="http://freekytheme.com/" target"_black"> FreekyTheme.com </a>', 'xaito_allowed_tags')), 'xaito_allowed_tags'); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php else : ?>
	<?php echo do_shortcode('[xaito-footer id="' . $xaito_dynamic_footer . '"]');
	?>
<?php endif; ?>