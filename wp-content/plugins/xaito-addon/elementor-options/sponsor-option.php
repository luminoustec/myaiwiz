<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Default title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title', 'h4');


$this->add_control(
    'section_info',
    [
        'label' => __('Section Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Info', 'xaito-addon'),
        'default' => __('Default Info', 'xaito-addon'),
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$this->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$this->add_control(
    'url',
    [
        'label' => __('Button Url', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'xaito-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => true,
        ],
        'show_label' => false,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);


$this->add_control(
    'counter',
    [
        'label' => __('counter', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('counter', 'xaito-addon'),
        'default' => __('7000000', 'xaito-addon'),
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);
$this->add_control(
    'counter_after',
    [
        'label' => __('Counter After', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Counter After', 'xaito-addon'),
        'default' => __('+', 'xaito-addon'), 'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);


$this->end_controls_section();

$this->start_controls_section(
    'sponsor_section',
    [
        'label' => __('Sponsor Item', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$sponsor_images = new \Elementor\Repeater();

$sponsor_images->add_control(
    'image',
    [
        'label' => __('Add Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
    ]
);

$sponsor_images->add_control(
    'link',
    [
        'label' => __('Link', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'xaito-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => true,
        ],
        'show_label' => false,
    ]
);

$this->add_control(
    'sponsor_images',
    [
        'label' => __('Sponsor Items', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'prevent_empty' => false,
        'fields' => $sponsor_images->get_controls(),
    ]
);

$this->end_controls_section();
