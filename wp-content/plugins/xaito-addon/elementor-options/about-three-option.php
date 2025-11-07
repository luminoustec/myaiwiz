<?php

//layout_one
$this->start_controls_section(
    'content_three',
    [
        'label' => __('Section Heading', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$this->add_control(
    'layout_three_section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Default title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title', 'h2', 'layout_three');



$this->end_controls_section();

//images
$this->start_controls_section(
    'section_list_three',
    [
        'label' => __('List Item', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$list_item_three = new \Elementor\Repeater();

$list_item_three->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Title', 'xaito-addon'),
        'default' => __('Open Xaito Photo Editor', 'xaito-addon'),
    ]
);
$list_item_three->add_control(
    'text',
    [
        'label' => __('text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add text', 'xaito-addon'),
        'default' => __('default text', 'xaito-addon'),
    ]
);
$this->add_control(
    'list_item_three',
    [
        'label' => __('Feature Lists', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $list_item_three->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();


//images
$this->start_controls_section(
    'section_image_three',
    [
        'label' => __('Images', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);


$this->add_control(
    'layout_three_image_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_three_shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();
