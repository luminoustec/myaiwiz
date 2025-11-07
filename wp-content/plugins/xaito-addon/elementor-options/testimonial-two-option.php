<?php

use Elementor\Core\Utils\ImportExport\Url;

$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition'   => [
            'layout_type' => 'layout_two'
        ]
    ]
);


$this->add_control(
    'layout_two_sec_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_two_sec_sub_title',
    [
        'label' => __('Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Sub Title', 'xaito-addon'),
    ]
);
$layout_two_testimonial = new \Elementor\Repeater();

$layout_two_testimonial->add_control(
    'name',
    [
        'label' => __('Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Jessica Brown', 'xaito-addon'),
        'label_block' => true
    ]
);


$layout_two_testimonial->add_control(
    'designation',
    [
        'label' => __('Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('CO Founder', 'xaito-addon'),
        'label_block' => true
    ]
);

$layout_two_testimonial->add_control(
    'testimonial',
    [
        'label' => __('Testimonial', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Testimonial Content', 'xaito-addon'),
    ]
);

$layout_two_testimonial->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-quote',
            'library' => 'custom-icon',
        ],
    ]
);

$layout_two_testimonial->add_control(
    'image',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'layout_two_testimonial',
    [
        'label' => __('Testimonial Items', 'xaito-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_two_testimonial->get_controls(),
        'title_field' => '{{{ name }}}',
        'default' => [
            [
                'name' => esc_html__('Tushar', 'xaito-addon'),
            ],
            [
                'name' => esc_html__('Samrat', 'xaito-addon')
            ],
        ],
    ]
);

$this->end_controls_section();
