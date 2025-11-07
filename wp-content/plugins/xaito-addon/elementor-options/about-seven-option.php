<?php

//layout_one
$this->start_controls_section(
    'content_seven',
    [
        'label' => __('Section Heading', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_seven'
        ]
    ]
);
$this->add_control(
    'layout_seven_section_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub title', 'xaito-addon'),
        'default' => __('Default Sub title', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_seven_section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Default title', 'xaito-addon'),
    ]
);
xaito_elementor_heading_option($this, 'section_title', 'h2', 'layout_seven');

$this->add_control(
    'layout_seven_section_info',
    [
        'label' => __('Section Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Info', 'xaito-addon'),
        'default' => __('Default Info', 'xaito-addon'),
    ]
);

$this->add_control(
    'video_url',
    [
        'label' => __('video Url', 'xaito-addon'),
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
    'section_list_seven',
    [
        'label' => __('List', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_seven'
        ]
    ]
);

$list_item_seven = new \Elementor\Repeater();

$list_item_seven->add_control(
    'info',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'list_item_seven',
    [
        'label' => __('Lists', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $list_item_seven->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();


//images
$this->start_controls_section(
    'section_image_seven',
    [
        'label' => __('Images', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_seven'
        ]
    ]
);

$this->add_control(
    'layout_seven_image_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'layout_seven_shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'layout_seven_shape_two',
    [
        'label' => __('Shape two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'layout_seven_shape_three',
    [
        'label' => __('Shape Three', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'layout_seven_shape_four',
    [
        'label' => __('Shape Four', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);

$this->end_controls_section();
