<?php

/**
 * xaito functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xaito
 */

if (!defined('AIRSLV_VERSION')) {
    // Replace the version number of the theme on each release.
    define('AIRSLV_VERSION', '1.0');
}

if (!function_exists('xaito_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function xaito_setup()
    {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on xaito, use a find and replace
		 * to change 'xaito' to the name of your theme in all the template files.
		 */
        load_theme_textdomain('xaito', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        // Set post thumbnail size.
        set_post_thumbnail_size(716, 428, true);

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Primary', 'xaito'),
            )
        );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'xaito_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xaito_content_width()
{
    $GLOBALS['content_width'] = apply_filters('xaito_content_width', 640);
}
add_action('after_setup_theme', 'xaito_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

require get_template_directory() . "/inc/common/xaito-widgets.php";

// google font process

function xaito_fonts_url()
{
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'xaito')) {
        $font_url = add_query_arg('family', urlencode('Manrope:wght@200;300;400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap'), "//fonts.googleapis.com/css");
    }
    
    return esc_url_raw($font_url);
}


// xaito_comment 
if (!function_exists('xaito_comment')) {
    function xaito_comment($comment, $args, $depth)
    {
        $GLOBAL['comment'] = $comment;
        extract($args, EXTR_SKIP);
        $args['reply_text'] = 'Reply';
        $replayClass = 'comment-depth-' . esc_attr($depth);
?>
        <li id="comment-<?php comment_ID(); ?>">
            <div class="comments-box xc-postbox__comment-box">
                <div class="xc-postbox__comment-info">
                    <div class="xc-postbox__comment-avater comments-avatar">
                        <?php print get_avatar($comment, 102, null, null, ['class' => []]); ?>
                    </div>
                </div>

                <div class="xc-postbox__comment-text ">
                    <div class="xc-postbox__comment-name">
                        <h5><?php print get_comment_author_link(); ?></h5>
                        <span class="xc-postbox__comment-meta"><?php comment_time(get_option('date_format')); ?></span>
                    </div>
                    <?php comment_text(); ?>
                    <div class="xc-postbox__comment-reply">
                        <?php comment_reply_link(array_merge($args, ['depth' => $depth, 'max_depth' => $args['max_depth']])); ?>
                    </div>
                </div>
            </div>
    <?php
    }
}

/** 
 * nav walker 
 */
require get_template_directory() . "/inc/class-navwalker.php";


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . "/inc/common/xaito-scripts.php";


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-helper.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Implement the customizer feature.
 */
if (class_exists('Xoomcoders\Xaito\Customizer')) {
    require get_template_directory() . '/inc/theme-customizer-styles.php';
}

/**
 * TGMPA Activation.
 */
require get_template_directory() . '/inc/plugins.php';



/*
* one click deomon import
*/
if (class_exists('OCDI_Plugin')) {
    require get_template_directory() . '/inc/demo-import.php';
}
