<?php

namespace Xoomcoders\Xaito\Widgets;


class MainSlider extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-main-slider';
    }

    public function get_title()
    {
        return __('Main Slider', 'xaito-addon');
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
                ]
            ]
        );


        $this->end_controls_section();

        include  xaito_get_elementor_option('main-slider-one-option.php');
        include  xaito_get_elementor_option('main-slider-two-option.php');
        include xaito_get_elementor_option('main-slider-three-option.php');

        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Style Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );

        xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .main-slider__title,.main-slider-two__title,.main-slider-three__title', ['layout_one', 'layout_two', 'layout_three']);
        xaito_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .main-slider__sub-title', ['layout_one']);

        xaito_elementor_button_style_options($this, 'Video', '{{WRAPPER}} .main-slider__video-icon', '{{WRAPPER}} .main-slider__video-icon:hover', ['layout_one']);

        $this->end_controls_section();


        //Button style
        $this->start_controls_section(
            'button_style',
            [
                'label' => esc_html__('Button Style', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]

        );

        xaito_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .main-slider__btn, {{WRAPPER}} .main-slider-three__btn', '{{WRAPPER}} .main-slider__btn::before, {{WRAPPER}} .main-slider-three__btn::before', ['layout_one', 'layout_two', 'layout_three']);

        $this->end_controls_section();

        xaito_get_elementor_carousel_options($this, ['layout_one', 'layout_two', 'layout_three']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('main-slider-one.php');
        include xaito_get_template('main-slider-two.php');
        include xaito_get_template('main-slider-three.php');
    }
}
