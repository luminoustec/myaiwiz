<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xaito
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php $xaito_preloader_status = get_theme_mod('preloader', false); ?>
	<?php if ('yes' === $xaito_preloader_status) : ?>
		<!-- preloader start -->
		<div class="xc-preloader">
			<div class="xc-preloader__image"></div>
		</div>
		<!-- preloader end -->
	<?php endif; ?>
	<!-- /.preloader -->

	<div id="page" class="site page-wrapper">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'xaito'); ?></a>

		<?php do_action('xaito_header'); ?>

		<?php $xaito_page_header_status = empty(get_post_meta(get_the_ID(), 'xaito_show_page_banner', true)) ? 'on' : get_post_meta(get_the_ID(), 'xaito_show_page_banner', true);
		?>

		<?php if (is_page() && 'on' === $xaito_page_header_status) : ?>
			<?php get_template_part('template-parts/layout/breadcrumb'); ?>
		<?php elseif (!is_page()) : ?>
			<?php get_template_part('template-parts/layout/breadcrumb'); ?>
		<?php endif; ?>