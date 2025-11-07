<?php

/**
 * Template part for displaying Header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xaito
 */

$xaito_page_id     = get_queried_object_id();
$xaito_custom_header_status = !empty(get_post_meta($xaito_page_id, 'xaito_custom_header_status', true)) ? get_post_meta($xaito_page_id, 'xaito_custom_header_status', true) : 'off';

$xaito_custom_header_id = '';
if (is_page() && 'on' === $xaito_custom_header_status) {
	$xaito_custom_header_id = get_post_meta($xaito_page_id, 'xaito_select_custom_header', true);
} elseif ('yes' == get_theme_mod('header_custom')) {
	$xaito_custom_header_id = get_theme_mod('header_custom_post');
} else {
	$xaito_custom_header_id = 'default_header';
}

$xaito_dynamic_header = isset($_GET['custom_header_id']) ? $_GET['custom_header_id'] : $xaito_custom_header_id;
?>

<?php if ('default_header' == $xaito_dynamic_header) : ?>

	<?php $xaito_sticky_header = '';  ?>
	<?php if ('yes' == get_theme_mod('header_sticky_menu')) {
		$xaito_sticky_header = 'id=xc-header-sticky';
	} ?>
	<header class="xc-default-header" <?php echo esc_attr($xaito_sticky_header); ?>>
		<div class="container">
			<div class="xc-default-header__wrapper d-flex flex-wrap justify-content-between align-items-center">
				<div class="xc-default-logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<?php
						$xaito_logo_size = get_theme_mod('header_logo_width', 133);
						$xaito_custom_logo_id = get_theme_mod('custom_logo');
						$xaito_logo = wp_get_attachment_image_src($xaito_custom_logo_id, 'full');
						if (has_custom_logo()) {
							echo '<img width="' . esc_attr($xaito_logo_size) . '" src="' . esc_url($xaito_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
						} else {
							echo '<h1>' . esc_html(get_bloginfo('name')) . '</h1>';
						}
						?>
					</a>
				</div>
				<div class="xc-default-menu">
					<div class="xc-header-one__hamburger d-xl-none">
						<button type="button" class="xc-hamburger-btn xc-offcanvas-open-btn">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
					<div class="main-menu d-none d-xl-block">
						<nav id="mobile-menu">
							<?php xaito_mean_menu() ?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>


	<?php if (get_theme_mod('header_stricked_menu', 'yes') && !is_admin_bar_showing()) : ?>
		<div class="stricky-header stricked-menu main-menu">
			<div class="sticky-header__content"></div><!-- /.sticky-header__content -->
		</div><!-- /.stricky-header -->
	<?php endif; ?>

	<!-- xc mobule nav  -->
	<div class="xc-mobile-nav__wrapper">
		<div class="xc-mobile-nav__overlay xc-mobile-nav__toggler"></div>
		<!-- /.mobile-nav__overlay -->
		<div class="xc-mobile-nav__content">
			<span class="xc-mobile-nav__close xc-mobile-nav__toggler"><i class="fa fa-times"></i></span>

			<div class="logo-box">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<?php
					$xaito_logo_size = get_theme_mod('header_logo_width', 133);
					$xaito_custom_logo_id = get_theme_mod('custom_logo');
					$xaito_logo = wp_get_attachment_image_src($xaito_custom_logo_id, 'full');
					if (has_custom_logo()) {
						echo '<img width="' . esc_attr($xaito_logo_size) . '" src="' . esc_url($xaito_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
					} else {
						echo '<h1 class="text-white">' . esc_html(get_bloginfo('name')) . '</h1>';
					}
					?>
				</a>
			</div>
			<!-- /.logo-box -->
			<div class="xc-mobile-nav__menu"></div>
			<!-- /.mobile-nav__container -->

			<ul class="xc-mobile-nav__contact list-unstyled">
				<?php $xaito_mobile_menu_email = get_theme_mod('xaito_mobile_menu_email'); ?>
				<?php if (!empty($uterpy_mobile_menu_email)) : ?>
					<li>
						<i class="fa fa-envelope"></i>
						<a href="mailto:<?php echo esc_attr($uterpy_mobile_menu_email); ?>"><?php echo esc_html($uterpy_mobile_menu_email); ?></a>
					</li>
				<?php endif; ?>
				<?php $xaito_mobile_menu_phone = get_theme_mod('xaito_mobile_menu_phone'); ?>
				<?php if (!empty($xaito_mobile_menu_phone)) : ?>
					<li>
						<i class="fa fa-phone-alt"></i>
						<a href="tel:<?php echo esc_attr(str_replace(' ', '-', $xaito_mobile_menu_phone)); ?>"><?php echo esc_html($xaito_mobile_menu_phone); ?></a>
					</li>
				<?php endif; ?>
			</ul><!-- /.mobile-nav__contact -->
			<div class="xc-mobile-nav__top">
				<div class="xc-mobile-nav__social">
					<?php if (!empty(get_theme_mod('facebook_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><i class="fab fa-facebook"></i></a>
					<?php endif; ?>
					<?php if (!empty(get_theme_mod('twitter_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>"><i class="fab fa-twitter"></i></a>
					<?php endif; ?>
					<?php if (!empty(get_theme_mod('linkedin_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>"><i class="fab fa-linkedin"></i></a>
					<?php endif; ?>
					<?php if (!empty(get_theme_mod('pinterest_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('pinterest_url')); ?>"><i class="fab fa-pinterest"></i></a>
					<?php endif; ?>
					<?php if (!empty(get_theme_mod('youtube_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('youtube_url')); ?>"><i class="fab fa-youtube"></i></a>
					<?php endif; ?>
					<?php if (!empty(get_theme_mod('dribble_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('dribble_url')); ?>"><i class="fab fa-dribbble"></i></a>
					<?php endif; ?>
					<?php if (!empty(get_theme_mod('instagram_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>"><i class="fab fa-instagram"></i></a>
					<?php endif; ?>
					<?php if (!empty(get_theme_mod('reddit_url'))) : ?>
						<a href="<?php echo esc_url(get_theme_mod('reddit_url')); ?>"><i class="fab fa-reddit"></i></a>
					<?php endif; ?>
				</div><!-- /.mobile-nav__social -->
			</div><!-- /.mobile-nav__top -->
		</div>
		<!-- /.mobile-nav__content -->
	</div>
	<!-- /.mobile-nav__wrapper -->

	<?php $xaito_back_to_top_status = get_theme_mod('scroll_to_top', false); ?>
	<?php if ('yes' === $xaito_back_to_top_status) : ?>
		<div class="xc-back-to-top-wrapper">
			<button id="xc_back-to-top" type="button" class="xc-back-to-top-btn">
				<svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
				</svg>
			</button>
		</div>
	<?php endif; ?>

<?php else : ?>
	<?php echo do_shortcode('[xaito-header id="' . $xaito_dynamic_header . '"]');
	?>
<?php endif; ?>