<?php

namespace Xoomcoders\Xaito\Widgets;


class Blog extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'xaito-blog';
    }

    public function get_title()
    {
        return __('Blog', 'xaito-addon');
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

        include  xaito_get_elementor_option('blog-option.php');

        //style
        //typos
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

        xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title', ['layout_one', 'layout_two', 'layout_three']);


        xaito_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two', 'layout_three']);


        $this->end_controls_section();

        $this->start_controls_section(
            'blog_options',
            [
                'label' => esc_html__('Blog Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );


        xaito_elementor_general_style_options($this, 'Blog Title', '{{WRAPPER}} .blog-one__title a,{{WRAPPER}} .blog-two__title a ,{{WRAPPER}} .blog-three__title a', ['layout_one', 'layout_two', 'layout_three']);
        $this->add_control(
            'title-hover',
            [
                'label' => __('Title Hover Color', 'xaito-addon'),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog-one__title a:hover, {{WRAPPER}} .blog-two__title a:hover, {{WRAPPER}} .blog-three__title a:hover' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => ['layout_one', 'layout_two', 'layout_three']
                ]
            ]
        );
        xaito_elementor_general_style_options($this, 'Blog Content', '{{WRAPPER}} .blog-one__text,{{WRAPPER}} .blog-two__text', ['layout_one']);

        xaito_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .blog-one__date-and-arrow a,{{WRAPPER}} .blog-two__date-and-arrow a,{{WRAPPER}} .blog-three__btn-box a', '{{WRAPPER}} .blog-one__date-and-arrow a:hover ,{{WRAPPER}} .blog-two__date-and-arrow a:hover, {{WRAPPER}} .blog-three__btn-box a:hover', ['layout_one', 'layout_two', 'layout_three']);

        $this->end_controls_section();

        // load carousel options
        xaito_get_elementor_carousel_options($this, 'layout_four');
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('blog-one.php');
        include xaito_get_template('blog-two.php');
        include xaito_get_template('blog-three.php');
    }
}
