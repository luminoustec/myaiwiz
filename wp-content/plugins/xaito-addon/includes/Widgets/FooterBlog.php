<?php

namespace Xoomcoders\Xaito\Widgets;


class FooterBlog extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'footer-blog';
    }

    public function get_title()
    {
        return __('Footer Blog', 'xaito-addon');
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

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Post Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'sec_title',
            [
                'label' => __('Title', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Add Title', 'xaito-addon'),
                'default' => __('Default Title', 'xaito-addon'),
            ]
        );
        $this->add_control(
            'post_count',
            [
                'label' => __('Number Of Posts', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],
                'range' => [
                    'count' => [
                        'min' => 0,
                        'max' => 15,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 6,
                ],
            ]
        );

        $this->add_control(
            'select_category',
            [
                'label' => __('Post Category', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'options' => xaito_get_taxonoy('category'),
            ]
        );

        $this->add_control(
            'query_order',
            [
                'label' => __('Select Order', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'default' => 'DESC',
                'options' => [
                    'DESC' => __('DESC', 'xaito-addon'),
                    'ASC' => __('ASC', 'xaito-addon'),
                ]
            ]
        );
        $this->end_controls_section();
        //General style
        $this->start_controls_section(
            'general_style',
            [
                'label' => esc_html__('Content Style', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
					'layout_type' => ['layout']
				]
            ]
        );


        xaito_elementor_general_style_options($this, 'Widget Title', '{{WRAPPER}} .footer-widget__title', ['layout_one']);
        xaito_elementor_general_style_options($this, 'Blog Heading', '{{WRAPPER}} .footer-widget__latest-post-title a', ['layout_one']);
        xaito_elementor_general_style_options($this, 'Blog Date', '{{WRAPPER}} .footer-widget__latest-post-date', ['layout_one']);

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include xaito_get_template('footer-blog.php');
    }
}
