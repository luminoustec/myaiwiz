<?php

namespace Xoomcoders\Xaito\Widgets;


class Header extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-header';
    }

    public function get_title()
    {
        return __('Header', 'xaito-addon');
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
                'label' => __('Layout Type', 'xaito-addon'),
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

        include  xaito_get_elementor_option('header-option.php');

        //style
        $this->start_controls_section(
            'style_ooptions',
            [
                'label' => esc_html__('Style Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );

        xaito_elementor_general_style_options($this, 'Nav Menu', '{{WRAPPER}} .main-menu .main-menu__list > li > a, .stricky-header .main-menu__list > li > a,.main-menu .main-menu__list > li > ul > li > a, .main-menu .main-menu__list > li > ul > li > ul > li > a, .stricky-header .main-menu__list > li > ul > li > a, .stricky-header .main-menu__list > li > ul > li > ul > li > a', ['layout_one', 'layout_two', 'layout_three']);




        $this->end_controls_section();

        //style
        $this->start_controls_section(
            'button_options',
            [
                'label' => esc_html__('Button Style', 'orkoz-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        xaito_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .thm-btn', '{{WRAPPER}} .thm-btn:after', ['layout_one', 'layout_two', 'layout_three']);

        $this->end_controls_section();


        //style
        $this->start_controls_section(
            'icon_options',
            [
                'label' => esc_html__('Icons Style', 'orkoz-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        xaito_elementor_button_style_options($this, 'Socail Icon', '{{WRAPPER}} .main-menu__right-social-link li a', '{{WRAPPER}} .main-menu__right-social-link li a:hover', ['layout_one', 'layout_three']);

        xaito_elementor_button_style_options($this, 'Search Icon', '{{WRAPPER}} .main-menu__search,.main-menu-two__search,.main-menu-three .main-menu-two__search', '{{WRAPPER}} .main-menu__search:hover,.main-menu-two__search:hover,.main-menu-three .main-menu-two__search:hover', ['layout_one', 'layout_two', 'layout_three']);

        xaito_elementor_button_style_options($this, 'Navbar', '{{WRAPPER}} .main-menu .mobile-nav__toggler', '{{WRAPPER}} .main-menu .mobile-nav__toggler', ['layout_one', 'layout_two', 'layout_three']);
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('header-one.php');
        include xaito_get_template('header-two.php');
        include xaito_get_template('header-three.php');
        include xaito_get_template('header-four.php');

        include xaito_get_template('header-common.php');
    }
}
