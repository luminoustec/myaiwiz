<?php

//layout_one
$this->start_controls_section(
    'content_one',
    [
        'label' => __('Section Heading', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
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

xaito_elementor_heading_option($this, 'section_title', 'h2');

$this->add_control(
    'section_summary',
    [
        'label' => __('Section summary', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add summary', 'xaito-addon'),
        'default' => __('Default summary', 'xaito-addon'),
    ]
);

$this->add_control(
    'button',
    [
        'label' => __('Button Label', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Button Text', 'xaito-addon'),
        'default' => __('Button Text', 'xaito-addon'),
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
    ]
);

$this->end_controls_section();

//images
$this->start_controls_section(
    'section_list',
    [
        'label' => __('List Item', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);


$list_item = new \Elementor\Repeater();

$list_item->add_control(
    'text',
    [
        'label' => __('text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add text', 'xaito-addon'),
        'default' => __('default text', 'xaito-addon'),
    ]
);
$list_item->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fas fa-check',
            'library' => 'custom-icon',
        ],
    ]
);


$this->add_control(
    'list_item',
    [
        'label' => __('Feature Lists', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $list_item->get_controls(),
        'prevent_empty' => false,
        'condition' => [
            'layout_type!' => 'layout'
        ]
    ]
);

$this->end_controls_section();


//images
$this->start_controls_section(
    'section_image',
    [
        'label' => __('Images', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);


$this->add_control(
    'image_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$this->end_controls_section();
