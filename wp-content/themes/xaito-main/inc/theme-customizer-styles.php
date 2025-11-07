<?php

/**
 * xaito functions for getting inline styles from theme customizer
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xaito
 */

if (!function_exists('xaito_theme_customizer_styles')) :
	function xaito_theme_customizer_styles()
	{

		// xaito color option

		$xaito_inline_style = '';
		$xaito_inline_style .= ':root {
			--xc-theme-primary: ' . get_theme_mod('theme_primary_color', sanitize_hex_color('#4E43FA')) . ';
			--xc-theme-primary-rgb: ' . xaito_hex_to_rgb(get_theme_mod('theme_primary_color', sanitize_hex_color('#4E43FA'))) . ';

			--xc-theme-secondary:' . get_theme_mod('theme_secondary_color', sanitize_hex_color('#3618d3')) . ';
			--xaito-base-rgb: ' . xaito_hex_to_rgb(get_theme_mod('theme_secondary_color', sanitize_hex_color('#3618d3'))) . ';

			--xc-common-black:' . get_theme_mod('theme_black_color', sanitize_hex_color('#000000')) . ';
			--xaito-black-rgb: ' . xaito_hex_to_rgb(get_theme_mod('theme_black_color', sanitize_hex_color('#000000'))) . ';
		}';

		$xaito_inner_banner_bg = get_theme_mod('page__breadcrumb_bg_image');
		$xaito_inline_style .= '.xc-breadcrumb__section { background-image: url(' . $xaito_inner_banner_bg . '); } ';

		$xaito_preloader_icon = get_theme_mod('preloader_image');
		if ($xaito_preloader_icon) {
			$xaito_inline_style .= '.xc-preloader .xc-preloader__image { background-image: url(' . $xaito_preloader_icon . '); } ';
		}

		if (is_page()) {


			$xaito_page_primary_color = empty(get_post_meta(get_the_ID(), 'xaito_primary_color', true)) ? get_theme_mod('theme_primary_color', sanitize_hex_color('#4E43FA')) : get_post_meta(get_the_ID(), 'xaito_primary_color', true);

			$xaito_page_secondary_color = empty(get_post_meta(get_the_ID(), 'xaito_secondary_color', true)) ? get_theme_mod('theme_secondary_color', sanitize_hex_color('#3618d3')) : get_post_meta(get_the_ID(), 'xaito_secondary_color', true);

			$xaito_page_black_color = empty(get_post_meta(get_the_ID(), 'xaito_black_color', true)) ? get_theme_mod('theme_black_color', sanitize_hex_color('#000000')) : get_post_meta(get_the_ID(), 'xaito_black_color', true);

			$xaito_inline_style .= ':root {
				--xc-theme-primary: ' . $xaito_page_primary_color . ';
				--xc-theme-primary-rgb: ' . xaito_hex_to_rgb($xaito_page_primary_color) . ';

				--xc-theme-secondary:' . $xaito_page_secondary_color . ';
				--xaito-base-rgb: ' . xaito_hex_to_rgb($xaito_page_secondary_color) . ';

				--xc-common-black:' . $xaito_page_black_color . ';
				--andesti-black-rgb: ' . xaito_hex_to_rgb($xaito_page_black_color) . ';
			}';

			$xaito_page_header_bg = empty(get_post_meta(get_the_ID(), 'xaito_set_breadcrumb_bg', true)) ? get_theme_mod('page__breadcrumb_bg_image') : get_post_meta(get_the_ID(), 'xaito_set_breadcrumb_bg', true);

			$xaito_inline_style .= '.xc-breadcrumb__section { background-image: url(' . $xaito_page_header_bg . '); }';
		}


		wp_add_inline_style('xaito-style', $xaito_inline_style);
	}
endif;

add_action('wp_enqueue_scripts', 'xaito_theme_customizer_styles');
