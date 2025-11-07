<?php

namespace Xoomcoders\Xaito\Widgets;


class CallToAction extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-call-to-action';
    }

    public function get_title()
    {
        return __('Call To Action', 'xaito-addon');
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
                ]
            ]
        );

        $this->end_controls_section();

        include  xaito_get_elementor_option('call-to-action-one-option.php');
        include  xaito_get_elementor_option('call-to-action-two-option.php');

        //typo options
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

        xaito_elementor_general_style_options($this, 'Title Left', '{{WRAPPER}} .cta-one__title', ['layout_one']);
        xaito_elementor_general_style_options($this, 'Text Left', '{{WRAPPER}} .cta-one__text', ['layout_one']);
        xaito_elementor_general_style_options($this, 'Title Right', '{{WRAPPER}} .cta-one__right-text', ['layout_one']);

        xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .newsletter-one__title h4', ['layout_two']);
        xaito_elementor_general_style_options($this, 'Content', '{{WRAPPER}} .newsletter-one__title p', ['layout_two']);

        xaito_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn', '{{WRAPPER}} .thm-btn::before', ['layout_one', 'layout_two']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('call-to-action-one.php');
        include xaito_get_template('call-to-action-two.php');
    }
}
