<?php

namespace Xoomcoders\Xaito\Widgets;


class Features extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-features';
    }

    public function get_title()
    {
        return __('Features', 'xaito-addon');
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
                    'layout_four' => __('Layout Four', 'xaito-addon'),
                    'layout_five' => __('Layout Five', 'xaito-addon'),
                ]
            ]
        );

        $this->end_controls_section();

        include  xaito_get_elementor_option('feature-one-option.php');
        include  xaito_get_elementor_option('feature-two-option.php');
        include  xaito_get_elementor_option('feature-three-option.php');
        include  xaito_get_elementor_option('feature-four-option.php');
        include  xaito_get_elementor_option('feature-five-option.php');

        //style
        $this->start_controls_section(
            'style_options',
            [
                'label' => esc_html__('Style Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );

        xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two']);
        xaito_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two']);
        xaito_elementor_general_style_options($this, 'Summary Text', '{{WRAPPER}} .why-choose-one-text', ['layout_one', 'layout_two']);

        $this->end_controls_section();

        $this->start_controls_section(
            'feature_style_options',
            [
                'label' => esc_html__('Feature box', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );

        xaito_elementor_general_style_options($this, 'Feature Title', '{{WRAPPER}} .why-choose-one__tagline', ['layout_one', 'layout_two']);
        xaito_elementor_general_style_options($this, 'Feature Text', '{{WRAPPER}} .why-choose-one__title', ['layout_one', 'layout_two']);

        xaito_elementor_general_style_options($this, 'Feature Icon', '{{WRAPPER}} .why-choose-one__content-text2 .icon-box span::before, {{WRAPPER}} .why-choose-one__icon span', ['layout_one', 'layout_two']);

        $this->end_controls_section();

        $this->start_controls_section(
            'Progress_style_options',
            [
                'label' => esc_html__('Progress box', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );

        xaito_elementor_general_style_options($this, 'Progress Title', '{{WRAPPER}} .why-choose-one__progress-title', ['layout_one']);

        $this->add_control(
            'progress-number-color',
            [
                'label' => __('Number Color', 'xaito-addon'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-choose-one__progress .count-text' => 'color: {{VALUE}};',
                ],
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );
        $this->add_control(
            'progress-number-color-backround',
            [
                'label' => __('Number Background', 'xaito-addon'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-choose-one__progress .count-text' => 'background: {{VALUE}};',
                ],
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );
        $this->add_control(
            'progress-with-color',
            [
                'label' => __('Counter Color', 'xaito-addon'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-choose-one__progress .bar-inner' => 'background: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => ['layout_one', 'layout_two'],
                ]
            ]
        );
        $this->add_control(
            'progress-border-color',
            [
                'label' => __('Border Color', 'xaito-addon'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .why-choose-one__progress .bar' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => ['layout_one', 'layout_two'],
                ]
            ]
        );


        $this->end_controls_section();

        xaito_get_elementor_carousel_options($this, ' ');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('feature-one.php');
        include xaito_get_template('feature-two.php');
        include xaito_get_template('feature-three.php');
        include xaito_get_template('feature-four.php');
        include xaito_get_template('feature-five.php');
    }
}
