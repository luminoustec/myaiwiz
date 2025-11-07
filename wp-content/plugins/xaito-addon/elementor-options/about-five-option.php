<?php

//layout_one
$this->start_controls_section(
    'content_five',
    [
        'label' => __('Section Heading', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_five'
        ]
    ]
);

$this->add_control(
    'layout_five_section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Default title', 'xaito-addon'),
    ]
);
xaito_elementor_heading_option($this, 'section_title', 'h2', 'layout_five');
$this->add_control(
    'layout_five_section_info',
    [
        'label' => __('Section Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Info', 'xaito-addon'),
        'default' => __('Default Info', 'xaito-addon'),
    ]
);

$this->end_controls_section();

//images
$this->start_controls_section(
    'section_list_five',
    [
        'label' => __('Tag List', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_five'
        ]
    ]
);

$list_item_five = new \Elementor\Repeater();

$list_item_five->add_control(
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
$list_item_five->add_control(
    'info',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'list_item_five',
    [
        'label' => __('Feature Lists', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $list_item_five->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();


//images
$this->start_controls_section(
    'section_image_five',
    [
        'label' => __('Images', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_five'
        ]
    ]
);

$this->add_control(
    'layout_five_image_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();
