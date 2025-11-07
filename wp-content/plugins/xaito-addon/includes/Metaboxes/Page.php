<?php

namespace Xoomcoders\Xaito\Metaboxes;


class Page
{
    function __construct()
    {
        add_action('cmb2_admin_init', [$this, 'page_metabox']);
    }

    function page_metabox()
    {
        $prefix = 'xaito_';

        $general = new_cmb2_box(array(
            'id'           => $prefix . 'page_option',
            'title'        => __('General Options', 'xaito-addon'),
            'object_types' => array('page'),
            'context'      => 'normal',
            'priority'     => 'default',
        ));

        $general->add_field(array(
            'name' => __('Enable Custom Header', 'xaito-addon'),
            'id' => $prefix . 'custom_header_status',
            'type' => 'radio',
            'options' => array(
                'on' => __('On', 'xaito-addon'),
                'off'   => __('Off', 'xaito-addon'),
            ),
        ));


        $general->add_field(array(
            'name' => __('Select Custom Header', 'xaito-addon'),
            'id' => $prefix . 'select_custom_header',
            'type' => 'pw_select',
            'options' => xaito_post_query('header'),
            'attributes' => array(
                'data-conditional-id' => $prefix . 'custom_header_status',
                'data-conditional-value' => 'on',
            ),
        ));

        $general->add_field(array(
            'name' => __('Enable Custom Footer', 'xaito-addon'),
            'id' => $prefix . 'custom_footer_status',
            'type' => 'radio',
            'options' => array(
                'on' => __('On', 'xaito-addon'),
                'off'   => __('Off', 'xaito-addon'),
            ),
        ));


        $general->add_field(array(
            'name' => __('Select Custom Footer', 'xaito-addon'),
            'id' => $prefix . 'select_custom_footer',
            'type' => 'pw_select',
            'options' => xaito_post_query('footer'),
            'attributes' => array(
                'data-conditional-id' => $prefix . 'custom_footer_status',
                'data-conditional-value' => 'on',
            ),
        ));


        $general->add_field(array(
            'name' => __('Show Page Banner', 'xaito-addon'),
            'id' => $prefix . 'show_page_banner',
            'type' => 'radio',
            'default' => 'on',
            'options' => array(
                'on' => __('On', 'xaito-addon'),
                'off' => __('Off', 'xaito-addon'),
            ),
        ));

        $general->add_field(array(
            'name' => __('Enable BreadCrumb', 'xaito-addon'),
            'id' => $prefix . 'show_page_breadcrumb',
            'type' => 'radio',
            'default' => 'on',
            'options' => array(
                'on' => __('On', 'xaito-addon'),
                'off' => __('Off', 'xaito-addon'),
            ),
            'attributes' => array(
                'data-conditional-id' => $prefix . 'show_page_banner',
                'data-conditional-value' => 'on',
            ),
        ));

        $general->add_field(array(
            'name' => __('Header Title', 'xaito-addon'),
            'id' => $prefix . 'set_header_title',
            'type' => 'text',
            'attributes' => array(
                'data-conditional-id' => $prefix . 'show_page_banner',
                'data-conditional-value' => 'on',
            ),
        ));

        $general->add_field(array(
            'name' => __('Breadcrumb Bg', 'xaito-addon'),
            'id' => $prefix . 'set_breadcrumb_bg',
            'type' => 'file',
            'attributes' => array(
                'data-conditional-id' => $prefix . 'show_page_banner',
                'data-conditional-value' => 'on',
            ),
        ));

        $general->add_field(array(
            'name' => __('Enable Dark Mode', 'xaito-addon'),
            'id' => $prefix . 'enable_dark_mode',
            'type' => 'radio',
            'default' => 'no',
            'options' => array(
                'yes' => __('On', 'xaito-addon'),
                'no' => __('Off', 'xaito-addon'),
            ),
        ));

        $general->add_field(array(
            'name' => __('Enable Boxed Mode', 'xaito-addon'),
            'id' => $prefix . 'enable_boxed_mode',
            'type' => 'radio',
            'default' => 'no',
            'options' => array(
                'yes' => __('On', 'xaito-addon'),
                'no' => __('Off', 'xaito-addon'),
            ),
        ));

        $general->add_field(array(
            'name' => __('Enable Rtl Mode', 'xaito-addon'),
            'id' => $prefix . 'enable_rtl_mode',
            'type' => 'radio',
            'default' => 'no',
            'options' => array(
                'yes' => __('On', 'xaito-addon'),
                'no' => __('Off', 'xaito-addon'),
            ),
        ));

        $color_options = new_cmb2_box(array(
            'id'           => $prefix . 'page_color_option',
            'title'        => __('Color Options', 'xaito-addon'),
            'object_types' => array('page'),
            'context'      => 'normal',
            'priority'     => 'default',
        ));


        $color_options->add_field(array(
            'name' => __('Base Color', 'xaito-addon'),
            'id' => $prefix . 'primary_color',
            'type'    => 'colorpicker',
        ));

        $color_options->add_field(array(
            'name' => __('Secondary Color', 'xaito-addon'),
            'id' => $prefix . 'secondary_color',
            'type'    => 'colorpicker',
        ));
        $color_options->add_field(array(
            'name' => __('black Color', 'xaito-addon'),
            'id' => $prefix . 'black_color',
            'type'    => 'colorpicker',
        ));
    }
}
