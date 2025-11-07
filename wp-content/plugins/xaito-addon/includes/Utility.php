<?php

namespace Xoomcoders\Xaito;

class Utility
{
    public function __construct()
    {
        $this->register_image_size();
        add_filter('single_template', [$this, 'load_event_template']);
        add_filter('template_include', [$this, 'load_project_template'], 99);
    }
    public function register_image_size()
    {
        add_image_size('xaito_blog_370X250', 370, 250, true); // in use
        add_image_size('xaito_event_240X182', 240, 182, true); // in use
        add_image_size('xaito_event_370X230', 370, 230, true); // in use
        add_image_size('xaito_brand_logo_230X80', 230, 80, true); // in use

        add_image_size('xaito_product_370X280', 370, 280, true); // in use
        add_image_size('xaito_product_370X400', 370, 400, true); // in use
        add_image_size('xaito_product_670X627', 670, 627, true); // in use

        add_image_size('xaito_event_1170X510', 1170, 510, true); // in use
    }


    public function load_event_template($template)
    {
        global $post;

        if ('event' === $post->post_type && locate_template(array('single-event.php')) !== $template) {
            /*
            * This is a 'event' post
            * AND a 'single event template' is not found on
            * theme or child theme directories, so load it
            * from our plugin directory.
            */
            returnXAITO_ADDON_PATH . '/post-templates/single-event.php';
        }

        return $template;
    }

    public function load_project_template($template)
    {
        global $post;

        $post_id = get_the_ID();
        $post_type = get_post_type($post_id);

        //Check is single page
        if (is_single()) {
            //Check is woocommerce activate
            if (function_exists('wc_get_product')) {
                $product = wc_get_product($post_id);
                if ($post_type === 'product') {
                    if ($product->get_type() === 'crowdfunding') {
                        $template =XAITO_ADDON_PATH . '/post-templates/single-project.php';
                    }
                }
            }
        }
        return $template;
    }
}
