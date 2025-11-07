<?php

namespace Xoomcoders\Xaito\Widgets;


class ContactForm extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-contact-form';
    }

    public function get_title()
    {
        return __('Contact Form', 'xaito-addon');
    }

    public function get_icon()
    {
        return 'eicon-cogs';
    }

    public function get_categories()
    {
        return ['xaito-category'];
    }

    protected function register_controls()
    {

        $this->start_controls_section(
            'layout_section',
            [
                'label' => __('Layout', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                
            ]
        );

        $this->add_control(
            'layout_type',
            [
                'label' => __('Select Layout', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'layout_one',
                'options' => [
                    'layout_one' => __('Layout One', 'xaito-addon'),
                    // 'layout_two' => __('Layout Two', 'xaito-addon'),
                ]
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                // 'condition' => [
                //     'layout_type' => 'layout_one'
                // ]
            ]
        );

        $this->add_control(
            'sec_title',
            [
                'label' => __('Section Title', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Add Title', 'xaito-addon'),
                'default' => __('Default Title', 'xaito-addon'),
            ]
        );

        $this->add_control(
            'image_one',
            [
                'label' => __('Image One', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        // xaito_elementor_heading_option($this, 'Section Title', 'h2');
        // $this->add_control(
        //     'sec_info',
        //     [
        //         'label' => __('Section info text', 'xaito-addon'),
        //         'type' => \Elementor\Controls_Manager::TEXTAREA,
        //         'placeholder' => __('Add info text', 'xaito-addon'),
        //         'default' => __('Default text', 'xaito-addon'),
        //     ]
        // );

        $this->add_control(
            'select_wpcf7_form',
            [
                'label'       => esc_html__('Select your contact form 7', 'xaito-addon'),
                'label_block' => true,
                'type'        => \Elementor\Controls_Manager::SELECT,
                'options'     => xaito_post_query('wpcf7_contact_form'),
            ]
        );

        $this->end_controls_section();





        $this->start_controls_section(
            'content_section_two',
            [
                'label' => __('Contact Item', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]
        );

        $cta = new \Elementor\Repeater();

        $cta->add_control(
            'icon',
            [
                'label' => __('Icon', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fa-light fa-credit-card',
                    'library' => 'custom-icon',
                ],
            ]
        );
        $cta->add_control(
            'title',
            [
                'label' => __('Title', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Add Title', 'xaito-addon'),
                'default' => __('Default Title', 'xaito-addon'),
            ]
        );


        $cta->add_control(
            'info',
            [
                'label' => __('Info', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Add Info', 'xaito-addon'),
                'default' => wp_kses(__('<a href="tel:8801682648101">+8801682648101</a>', 'xaito-addon'), 'xaito_allowed_tags'),
            ]
        );

        $this->add_control(
            'cta_items',
            [
                'label' => __('features', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $cta->get_controls(),
                'prevent_empty' => false,
                'title_field' => '{{{ name }}}',
                'default' => [
                    [
                        'title' => esc_html__('Discover', 'xaito-addon'),
                    ],
                    [
                        'title' => esc_html__('Define', 'xaito-addon')
                    ],
                ],
            ]
        );


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('contact-form-one.php');
        // include xaito_get_template('contact-form-two.php');
    }
}
