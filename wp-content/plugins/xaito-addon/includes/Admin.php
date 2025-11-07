<?php

namespace Xoomcoders\Xaito;

/**
 * The admin class
 */
class Admin
{

    /**
     * Initialize the class
     */
    function __construct()
    {
        new Metaboxes\Page();
        new Metaboxes\Event();

        add_action('admin_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    function enqueue_scripts($hook)
    {
        if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
            $post_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
        }
        wp_enqueue_script('xaito-addon-admin-script');
        if ("post.php" == $hook || "post-new.php" == $hook) {

            $get_tab_layout = empty($post_id) ? 'layout_one' : get_post_meta($post_id, 'xaito_tab_layout', true);

            wp_enqueue_script('xaito-addon-metaboxes-tab-script');
            wp_localize_script("xaito-addon-metaboxes-tab-script", "xaito_tab_layout", array("layout" => $get_tab_layout));
        }
    }
}
