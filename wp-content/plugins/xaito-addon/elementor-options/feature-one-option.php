<?php

//layout_one

$this->start_controls_section(
    'content_one',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);


$this->add_control(
    'sec_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub Title', 'xaito-addon'),
        'default' => __('Default Sub Title', 'xaito-addon'),
    ]
);
$this->add_control(
    'sec_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);
xaito_elementor_heading_option($this, 'section_title', 'h2');

$this->add_control(
    'sec_info',
    [
        'label' => __('Section Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Section Info', 'xaito-addon'),
        'default' => __('Default Section Info', 'xaito-addon'),
    ]
);

$this->add_control(
    'bg_image',
    [
        'label' => __('Background Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$this->end_controls_section();


$this->start_controls_section(
    'feature_one_section',
    [
        'label' => __('Feature Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);


$features = new \Elementor\Repeater();

$features->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa-light fa-hotel',
            'library' => 'custom-icon',
        ],
    ]
);

$features->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);
$features->add_control(
    'content',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'feature_items',
    [
        'label' => __('features', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $features->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ name }}}',
        'default' => [
            [
                'title' => esc_html__('Discover', 'xaito-addon'),
            ],
        ],
    ]
);

$this->end_controls_section();
