<?php

namespace Xoomcoders\Xaito\Widgets;


class FooterSubscribe extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'footer-subscribe';
    }

    public function get_title()
    {
        return __('Footer Subscribe', 'xaito-addon');
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
                ]
            ]
        );

        $this->end_controls_section();

        include  xaito_get_elementor_option('footer-subscribe-one-option.php');

        //font typos style
        $this->start_controls_section(
            'font_typos',
            [
                'label' => esc_html__('Style', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );

        xaito_typo_and_color_options($this, 'Title', '{{WRAPPER}} .footer-widget__title', ['layout_one']);
        xaito_typo_and_color_options($this, 'Text', '{{WRAPPER}} .footer-widget__newsletter-text', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('footer-subscribe.php');
    }
}
