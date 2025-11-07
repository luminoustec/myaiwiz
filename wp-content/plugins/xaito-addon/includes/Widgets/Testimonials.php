<?php

namespace Xoomcoders\Xaito\Widgets;


class Testimonials extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-testimonials';
    }

    public function get_title()
    {
        return __('Testimonials', 'xaito-addon');
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
                    'layout_two' => __('Layout One', 'xaito-addon'),
                ]
            ]
        );


        $this->end_controls_section();

        include  xaito_get_elementor_option('testimonial-option.php');

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
        xaito_elementor_general_style_options($this, 'Description', '{{WRAPPER}} .testimonial-one__text', ['layout_one']);

        $this->end_controls_section();

        //style
        $this->start_controls_section(
            'testimonial_options',
            [
                'label' => esc_html__('Testimonial Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        xaito_elementor_general_style_options($this, 'Testimonial', '{{WRAPPER}} .testimonial-one__text-2', ['layout_one', 'layout_two']);
        xaito_elementor_general_style_options($this, 'Reviewer Name', '{{WRAPPER}} .testimonial-one__client-content h4', ['layout_one', 'layout_two']);
        xaito_elementor_general_style_options($this, 'Reviewer bio', '{{WRAPPER}} .testimonial-one__client-content p', ['layout_one', 'layout_two']);

        xaito_elementor_general_style_options($this, 'Reviewer Icon', '{{WRAPPER}} .testimonial-one__quote span', ['layout_one', 'layout_two']);

        $this->add_control(
            'testimonial-bg-color',
            [
                'label' => __('Background Color', 'xaito-addon'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-one__single' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => ['layout_one', 'layout_two']
                ]
            ]
        );

        $this->end_controls_section();

        xaito_get_elementor_carousel_options($this, ['layout_one', 'layout_two']);
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('testimonials-one.php');
        include xaito_get_template('testimonials-two.php');
    }
}
