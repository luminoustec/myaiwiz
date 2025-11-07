<?php

namespace Xoomcoders\Xaito\Widgets;


class HeaderBanner extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-header-banner';
    }

    public function get_title()
    {
        return __('Header Banner', 'xaito-addon');
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
                ]
            ]
        );


        $this->end_controls_section();

        include  xaito_get_elementor_option('header-banner-option.php');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('header-banner-one.php');
        include xaito_get_template('header-banner-two.php');
        include xaito_get_template('header-banner-three.php');
        include xaito_get_template('header-banner-four.php');
    }
}
