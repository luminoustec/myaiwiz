<?php

namespace Xoomcoders\Xaito\Widgets;


class Team extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-team';
    }

    public function get_title()
    {
        return __('Team', 'xaito-addon');
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

        include  xaito_get_elementor_option('team-one-option.php');
        include  xaito_get_elementor_option('team-two-option.php');

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

        xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title,.our-mission__right-title', ['layout_one']);
        xaito_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two']);


        xaito_elementor_general_style_options($this, 'Name', '{{WRAPPER}} .team-one__title a', ['layout_one', 'layout_two']);

        xaito_elementor_general_style_options($this, 'Bio', '{{WRAPPER}} .team-one__tagline', ['layout_one', 'layout_two']);

        xaito_elementor_button_style_options($this, 'Socail Icon', '{{WRAPPER}} .team-one__social a', '{{WRAPPER}} .team-one__social a:hover', ['layout_one', 'layout_two']);


        $this->end_controls_section();

        xaito_get_elementor_carousel_options($this, 'layout_one');

        xaito_elementor_column_count_options($this, 'layout_two');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('team-one.php');
        include xaito_get_template('team-two.php');
    }
}
