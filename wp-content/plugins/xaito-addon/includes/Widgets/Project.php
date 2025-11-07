<?php

namespace Xoomcoders\Xaito\Widgets;


class Project extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-portfolio';
    }

    public function get_title()
    {
        return __('Project', 'xaito-addon');
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

        include  xaito_get_elementor_option('project-one-option.php');
        include  xaito_get_elementor_option('project-two-option.php');
        include  xaito_get_elementor_option('project-three-option.php');
        include  xaito_get_elementor_option('project-four-option.php');
        include  xaito_get_elementor_option('project-five-option.php');

        //style
        $this->start_controls_section(
            'style_options',
            [
                'label' => esc_html__('Genarel Style', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );

        xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two', 'layout_five']);
        xaito_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two', 'layout_five']);
        xaito_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .project-one__text', ['layout_one', 'layout_five']);


        $this->end_controls_section();

        $this->start_controls_section(
            'project_options',
            [
                'label' => esc_html__('Project Style', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        xaito_elementor_general_style_options($this, 'Project Title', '{{WRAPPER}} .project-one__content-title a, {{WRAPPER}} .project-two__title a', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);

        $this->add_control(
            'progress-title-hover',
            [
                'label' => __('Project Hover', 'xaito-addon'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .project-one__content-title a:hover,{{WRAPPER}} .project-two__title a:hover' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five'],
                ]
            ]
        );

        xaito_elementor_general_style_options($this, 'Project SubTitle', '{{WRAPPER}} .project-one__content-title-sub-title,{{WRAPPER}} .project-two__subtitle', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);

        xaito_elementor_button_style_options($this, 'Project Button', '{{WRAPPER}} .project-one__content-arrow-box-inner,{{WRAPPER}} .project-one__content-arrow-text,{{WRAPPER}} .project-two__icon', '{{WRAPPER}} .project-one__content-arrow-box-inner:hover,.project-one__content-arrow-text:hover,{{WRAPPER}} .project-two__icon:hover', ['layout_one', 'layout_two', 'layout_three', 'layout_five']);


        $this->end_controls_section();

        xaito_get_elementor_carousel_options($this, ['layout_one', 'layout_two', 'layout_three']);

        xaito_elementor_column_count_options($this, ['layout_four', 'layout_five']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('project-one.php');
        include xaito_get_template('project-two.php');
        include xaito_get_template('project-three.php');
        include xaito_get_template('project-four.php');
        include xaito_get_template('project-five.php');
    }
}
