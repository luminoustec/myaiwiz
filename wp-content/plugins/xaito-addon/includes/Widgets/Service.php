<?php

namespace Xoomcoders\Xaito\Widgets;


class Service extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-service';
    }

    public function get_title()
    {
        return __('Service', 'xaito-addon');
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
                    'layout_two' => __('Layout Two', 'xaito-addon'),
                    'layout_three' => __('Layout Three', 'xaito-addon'),
                    // 'layout_four' => __('Layout Four', 'xaito-addon'),
                ]
            ]
        );

        $this->end_controls_section();

        include  xaito_get_elementor_option('service-option.php');
        // include  xaito_get_elementor_option('service-two-option.php');
        // include  xaito_get_elementor_option('service-three-option.php');
        // include  xaito_get_elementor_option('service-four-option.php');

        //style
        $this->start_controls_section(
            'style_options',
            [
                'label' => esc_html__('Style Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'layout_type' => 'layout_'
                ]
            ]
        );

        xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        xaito_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);
        xaito_elementor_general_style_options($this, 'Content', '{{WRAPPER}} .services-one__top .section-title__text,{{WRAPPER}} .services-two__text-1,{{WRAPPER}} .section-title__text', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        $this->end_controls_section();

        $this->start_controls_section(
            'service_style',
            [
                'label' => esc_html__('Service Style Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        xaito_elementor_general_style_options($this, 'Service Title', '{{WRAPPER}} .services-one__title a,{{WRAPPER}} .services-two__title a', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        xaito_elementor_general_style_options($this, 'Service Content', '{{WRAPPER}} .services-one__text ,{{WRAPPER}} .services-two__text-2', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        xaito_elementor_button_style_options($this, 'Service Button', '{{WRAPPER}} .services-one__arrow a ,{{WRAPPER}} .services-two__btn-box a', '{{WRAPPER}} .services-one__arrow a:hover , {{WRAPPER}} .services-two__btn-box a:hover', ['layout_one', 'layout_two', 'layout_three', 'layout_four']);

        $this->end_controls_section();

        xaito_elementor_column_count_options($this, ['layout_one', 'layout_four']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('service-one.php');
        include xaito_get_template('service-two.php');
        include xaito_get_template('service-three.php');
        // include xaito_get_template('service-four.php');
    }
}
