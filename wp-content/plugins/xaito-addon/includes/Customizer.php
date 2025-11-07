<?php

namespace Xoomcoders\Xaito;

class Customizer
{
    public function __construct()
    {
        add_action("customize_register", [$this, 'xaito_customizer']);
    }
    public function xaito_customizer($wp_customize)
    {

        // add panel
        $wp_customize->add_panel(
            'xaito_theme_opt',
            array(
                'title'      => esc_html__('Xaito Options', 'xaito-addon'),
                'description' => esc_html__('Xaito Theme options panel', 'xaito-addon'),
                'priority'   => 220,
                'capability' => 'edit_theme_options',
            )
        );

        // General Settings
        $wp_customize->add_section('xaito_theme_general', array(
            'title' => __('General Settings', 'xaito-addon'),
            'description' => esc_html__('Xaito General Settings.', 'xaito-addon'),
            'priority' => 10,
            'capability' => 'edit_theme_options',
            'panel'      => 'xaito_theme_opt'
        ));


        $this->customize_type_color(
            $wp_customize,
            esc_html__('Select Theme Primary color', 'xaito-addon'),
            'xaito_theme_general',
            'theme_primary_color',
            '#4E43FA'
        );

        $this->customize_type_color(
            $wp_customize,
            esc_html__('Select Theme Secondary color', 'xaito-addon'),
            'xaito_theme_general',
            'theme_secondary_color',
            '#3618d3'
        );

        $this->customize_type_color(
            $wp_customize,
            esc_html__('Select Theme Black color', 'xaito-addon'),
            'xaito_theme_general',
            'theme_black_color',
            '#101828'
        );


        // $this->customize_type_radio(
        //     $wp_customize,
        //     esc_html__(' Enable Dark Mode?', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'xaito_dark_mode',
        //     'no',
        //     array(
        //         'yes' => esc_html__('Yes', 'xaito-addon'),
        //         'no' => esc_html__('No', 'xaito-addon'),
        //     )
        // );

        // $this->customize_type_radio(
        //     $wp_customize,
        //     esc_html__(' Enable Boxed Mode?', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'xaito_boxed_mode',
        //     'no',
        //     array(
        //         'yes' => esc_html__('Yes', 'xaito-addon'),
        //         'no' => esc_html__('No', 'xaito-addon'),
        //     )
        // );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Rtl Mode?', 'xaito-addon'),
            'xaito_theme_general',
            'xaito_rtl_mode',
            'no',
            array(
                'yes' => esc_html__('Yes', 'xaito-addon'),
                'no' => esc_html__('No', 'xaito-addon'),
            )
        );

        // $this->customize_type_radio(
        //     $wp_customize,
        //     esc_html__(' Enable Custom Cursor', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'custom_cursor',
        //     'yes',
        //     array(
        //         'yes' => esc_html__('Yes', 'xaito-addon'),
        //         'no' => esc_html__('No', 'xaito-addon'),
        //     )
        // );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Back to top?', 'xaito-addon'),
            'xaito_theme_general',
            'scroll_to_top',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'xaito-addon'),
                'no' => esc_html__('No', 'xaito-addon'),
            )
        );

        // $this->customize_type_select(
        //     $wp_customize,
        //     esc_html__('Select Back to top icon', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'scroll_to_top_icon',
        //     'fa-angle-up',
        //     xaito_get_fa_icons(),
        //     function () {
        //         return (get_theme_mod('scroll_to_top', 'no') == 'yes' ? true : false);
        //     }
        // );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Preloader?', 'xaito-addon'),
            'xaito_theme_general',
            'preloader',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'xaito-addon'),
                'no' => esc_html__('No', 'xaito-addon'),
            )
        );

        $this->customize_type_image(
            $wp_customize,
            esc_html__('Custom Preloader Image', 'xaito-addon'),
            'xaito_theme_general',
            'preloader_image',
            '',
            function () {
                return (get_theme_mod('preloader', 'no') == 'yes' ? true : false);
            }
        );

        // $this->customize_type_image(
        //     $wp_customize,
        //     esc_html__('Page Breadcrumb Background Image', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'page__breadcrumb_bg_image'
        // );

        // $this->customize_type_image(
        //     $wp_customize,
        //     esc_html__('Page Header Shape One', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'page_header_shape_one'
        // );
        // $this->customize_type_image(
        //     $wp_customize,
        //     esc_html__('Page Header Shape Two', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'page_header_shape_two'
        // );
        // $this->customize_type_image(
        //     $wp_customize,
        //     esc_html__('Page Header Shape Three', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'page_header_shape_three'
        // );
        // $this->customize_type_image(
        //     $wp_customize,
        //     esc_html__('404 Background Image', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'page_404_bg_image'
        // );
        // $this->customize_type_image(
        //     $wp_customize,
        //     esc_html__('404 Shape One', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'page_404_shape_one'
        // );
        // $this->customize_type_image(
        //     $wp_customize,
        //     esc_html__('404 Shape Two', 'xaito-addon'),
        //     'xaito_theme_general',
        //     'page_404_shape_two'
        // );

        // Blog Layout
        $wp_customize->add_section('xaito_blog_layout_settings', array(
            'title' => __('Blog Layout', 'xaito-addon'),
            'description' => esc_html__('Xaito Blog Layout', 'xaito-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'xaito_theme_opt'
        ));

        $this->customize_type_select(
            $wp_customize,
            'Select Sidebar position',
            'xaito_blog_layout_settings',
            'xaito_blog_layout',
            'right-align',
            array(
                'left-align' => esc_html__('Left Align', 'xaito-addon'),
                'right-align' => esc_html__('Right Align', 'xaito-addon'),
            )
        );

        // Header options
        $wp_customize->add_section('xaito_theme_header', array(
            'title' => __('Header Settings', 'xaito-addon'),
            'description' => esc_html__('Xaito Header Settings', 'xaito-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'xaito_theme_opt'
        ));

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Add Logo size in px', 'xaito-addon'),
            'xaito_theme_header',
            'header_logo_width',
            esc_html(198)
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__('Enable Sticky Header?', 'xaito-addon'),
            'xaito_theme_header',
            'header_sticky_menu',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'xaito-addon'),
                'no' => esc_html__('No', 'xaito-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__(' Enable Breadcrumb?', 'xaito-addon'),
            'xaito_theme_header',
            'breadcrumb_opt',
            'yes',
            array(
                'yes' => esc_html__('Yes', 'xaito-addon'),
                'no' => esc_html__('No', 'xaito-addon'),
            )
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__('Enable Custom Header?', 'xaito-addon'),
            'xaito_theme_header',
            'header_custom',
            'no',
            array(
                'yes' => esc_html__('Yes', 'xaito-addon'),
                'no' => esc_html__('No', 'xaito-addon'),
            )
        );

        $this->customize_type_select(
            $wp_customize,
            esc_html__('Select Header Type', 'xaito-addon'),
            'xaito_theme_header',
            'header_custom_post',
            '',
            xaito_post_query('header'),
            function () {
                return (get_theme_mod('header_custom', 'no') == 'yes' ? true : false);
            }
        );

        //  Mobile Menu
        $wp_customize->add_section('xaito_theme_mobile_menu', array(
            'title' => esc_html__('Mobile Menu Settings', 'xaito-addon'),
            'description' => esc_html__('Xaito Header Settings', 'xaito-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'xaito_theme_opt'
        ));

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Mobile Menu Email', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'xaito_mobile_menu_email',
            esc_html__('needhelp@xaito.com', 'xaito-addon')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Mobile Menu Phone', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'xaito_mobile_menu_phone',
            esc_html__('666 888 0000', 'xaito-addon')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Facebook url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'facebook_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Twitter url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'twitter_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Linkedin url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'linkedin_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Pinterest url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'pinterest_url',
            esc_html('#')
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Youtube url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'youtube_url',
        );


        $this->customize_type_text(
            $wp_customize,
            esc_html__('dribbble url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'dribble_url',
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Instagram url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'instagram_url',
        );

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Reddit url', 'xaito-addon'),
            'xaito_theme_mobile_menu',
            'reddit_url',
        );

        // Footer options
        $wp_customize->add_section('xaito_theme_footer', array(
            'title' => esc_html__('Footer Settings', 'xaito-addon'),
            'description' => esc_html__('Xaito Footer Settings.', 'xaito-addon'),
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'panel'      => 'xaito_theme_opt'
        ));

        $this->customize_type_text(
            $wp_customize,
            esc_html__('Footer Text', 'xaito-addon'),
            'xaito_theme_footer',
            'footer_copytext',
            esc_html__('&copy; All right reserved', 'xaito'),
            function () {
                return (get_theme_mod('footer_custom', 'no') == 'yes' ? false : true);
            }
        );

        $this->customize_type_radio(
            $wp_customize,
            esc_html__('Enable Custom Footer ?', 'xaito-addon'),
            'xaito_theme_footer',
            'footer_custom',
            'no',
            array(
                'yes' => esc_html__('Yes', 'xaito-addon'),
                'no' => esc_html__('No', 'xaito-addon'),
            )
        );

        $this->customize_type_select(
            $wp_customize,
            esc_html__('Select Footer Type', 'xaito-addon'),
            'xaito_theme_footer',
            'footer_custom_post',
            '',
            xaito_post_query('footer'),
            function () {
                return (get_theme_mod('footer_custom', 'no') == 'yes' ? true : false);
            }
        );
    }

    //type text
    public function customize_type_text($wp_customize, $label, $section_id, $name,  $default = "", $callback = null)
    {
        // add settings
        $wp_customize->add_setting($name, array(
            'default'  => $default,
            'type'     => 'theme_mod'
        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "text",
                "active_callback" => $callback,
            )
        ));
    }


    //type color
    public function customize_type_color($wp_customize, $label, $section_id, $name,  $default)
    {
        // add settings
        $wp_customize->add_setting($name, array(
            'default'  => sanitize_hex_color($default),
            'type'     => 'theme_mod'
        ));

        // Add control
        $wp_customize->add_control(new \WP_Customize_Color_Control($wp_customize, $name, array(
            'label'    => $label,
            'section'  => $section_id,
            'setting' => $name,
            'priority' => 1
        )));
    }

    // type checkbox
    public function customize_type_checkbox($wp_customize, $label, $section_id, $name,  $default, $callback = null)
    {
        $wp_customize->add_setting($name, array(
            "default" => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "checkbox",
                "active_callback" => $callback,
            )
        ));
    }

    // type Image
    public function customize_type_image($wp_customize, $label, $section_id, $name,  $default = '', $callback = null)
    {
        $wp_customize->add_setting($name, array(
            "default" => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Upload_Control($wp_customize, $name, array(
            'label'    => $label,
            'section'  => $section_id,
            'setting' => $name,
            'priority' => 20,
            "active_callback" => $callback,
        )));
    }

    public function customize_type_select($wp_customize, $label, $section_id, $name,  $default, $select_value,  $callback = null)
    {
        $wp_customize->add_setting($name, array(
            'default'     => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "select",
                'choices'     => $select_value,
                "active_callback" => $callback,
            )
        ));
    }

    public function customize_type_radio($wp_customize, $label, $section_id, $name,  $default, $radio_value, $callback = null)
    {
        $wp_customize->add_setting($name, array(
            'default'     => $default,
            "transport" => "refresh",

        ));

        $wp_customize->add_control(new \WP_Customize_Control(
            $wp_customize,
            $name,
            array(
                "label" => $label,
                "section" => $section_id,
                "settings" => $name,
                "type" => "radio",
                'choices'     => $radio_value,
                "active_callback" => $callback,
            )
        ));
    }
}
