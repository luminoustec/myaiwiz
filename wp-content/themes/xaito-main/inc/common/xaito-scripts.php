<?php
function xaito_scripts()
{
    wp_enqueue_style('xaito-fonts', xaito_fonts_url(), array(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), '5.0.0');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/vendors/mean-menu/css/meanmenu.css', array(), '5.0.0');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/vendors/font-awesome-pro/css/fontawesome.min.css', array(), '6.0.1');
    wp_enqueue_style('xaito-spacing', get_template_directory_uri() . '/assets/vendors/spacing/spacing.css', array(), '1.0');
    wp_enqueue_style('xaito-style', get_template_directory_uri() . '/assets/css/xaito-style.css', array(), time());
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), time());
    // wp_style_add_data('xaito-style', 'rtl', 'replace');

    $xaito_get_dark_mode_status = get_theme_mod('xaito_dark_mode', false);

    if (is_page()) {
        $xaito_get_dark_mode_status = get_post_meta(get_the_ID(), 'xaito_enable_dark_mode', true);
    }
    $xaito_dynamic_dark_mode_status = isset($_GET['dark_mode']) ? $_GET['dark_mode'] : $xaito_get_dark_mode_status;
    if ('yes' == $xaito_dynamic_dark_mode_status) {
        // wp_enqueue_style('xaito-dark-mode', get_template_directory_uri() . '/assets/css/modes/xaito-dark.css', array(), time());
    }

    $xaito_get_rtl_mode_status = get_theme_mod('xaito_rtl_mode', false);

    if (is_page()) {
        $xaito_rtl_mode_status = get_post_meta(get_the_ID(), 'xaito_enable_rtl_mode', true);

        $xaito_get_rtl_mode_status = empty($xaito_rtl_mode_status) ? $xaito_get_rtl_mode_status : $xaito_rtl_mode_status;
    }

    $xaito_dynamic_rtl_mode_status = isset($_GET['rtl_mode']) ? $_GET['rtl_mode'] : $xaito_get_rtl_mode_status;
    if ('yes' == $xaito_dynamic_rtl_mode_status || true == is_rtl()) {
        wp_enqueue_style('xaito-custom-rtl', get_template_directory_uri() . '/assets/css/xaito-rtl.css', array(), time());
    }

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/vendors/mean-menu/js/meanmenu.js', array('jquery'), '5.0.0', true);
    wp_enqueue_script('xaito-theme', get_template_directory_uri() . '/assets/js/xaito-theme.js', array('jquery'), time(), true);



    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'xaito_scripts');
