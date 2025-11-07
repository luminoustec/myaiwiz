<?php

$this->start_controls_section(
    'layout_four_content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four'
        ]
    ]
);

$this->add_control(
    'layout_four_title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_four_sub_title',
    [
        'label' => __('Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_four_button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Make it Happen', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_four_button_url',
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
    ]
);

$this->add_control(
    'layout_four_icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-fundraiser',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'layout_four_background_image_overlay_opacity',
    [
        'label' => __('Background Overlay Opacity', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::COLOR,
        'selectors' => [
            '{{WRAPPER}} .ready-one__inner' => 'background-color: {{VALUE}}',
        ],
    ]
);


$this->add_control(
    'layout_four_background_image',
    [
        'label' => __('Background Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
