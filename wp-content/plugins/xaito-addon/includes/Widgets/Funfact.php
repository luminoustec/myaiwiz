<?php

namespace Xoomcoders\Xaito\Widgets;


class Funfact extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-funfact';
    }

    public function get_title()
    {
        return __('Funfact', 'xaito-addon');
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

        include  xaito_get_elementor_option('funfact-one-option.php');
        include  xaito_get_elementor_option('funfact-two-option.php');

        //style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Counter Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        xaito_elementor_general_style_options($this, 'Counter Icon', '{{WRAPPER}} .facts-counter-one-list-item .icon-box span::before', ['layout_one', 'layout_two']);
        xaito_elementor_general_style_options($this, 'Counter Text', '{{WRAPPER}} .facts-counter-one-list-item p', ['layout_one', 'layout_two']);
        xaito_elementor_general_style_options($this, 'Counter Title', '{{WRAPPER}} .facts-counter-one-list-item h2', ['layout_one', 'layout_two']);


        $this->end_controls_section();
        $this->start_controls_section(
            'professional_style',
            [
                'label' => esc_html__('Professional Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'layout_type' => 'layout_two'
                ]
            ]
        );

        xaito_elementor_general_style_options($this, 'Section Title', '{{WRAPPER}} .professional-therapy-one__content .title-box h2', ['layout_two']);
        xaito_elementor_general_style_options($this, 'Item Title', '{{WRAPPER}} .professional-therapy-one__content-single .content-box h2', ['layout_two']);
        xaito_elementor_general_style_options($this, 'Item Text', '{{WRAPPER}} .professional-therapy-one__content-single .content-box p', ['layout_two']);
        xaito_elementor_general_style_options($this, 'Item Icon', '{{WRAPPER}} .professional-therapy-one__content-single .icon-box span::before', ['layout_two']);


        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('funfact-one.php');
        include xaito_get_template('funfact-two.php');
    }
}
