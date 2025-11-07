<?php

//layout_one
$this->start_controls_section(
    'content_six',
    [
        'label' => __('Section Heading', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_six'
        ]
    ]
);
$this->add_control(
    'layout_six_section_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub title', 'xaito-addon'),
        'default' => __('Default Sub title', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_six_section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Default title', 'xaito-addon'),
    ]
);
xaito_elementor_heading_option($this, 'section_title', 'h2', 'layout_six');

$this->add_control(
    'layout_six_section_info',
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
    'section_list_six',
    [
        'label' => __('List', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_six'
        ]
    ]
);

$list_item_six = new \Elementor\Repeater();

$list_item_six->add_control(
    'info',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'list_item_six',
    [
        'label' => __('Lists', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $list_item_six->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();


//images
$this->start_controls_section(
    'section_image_six',
    [
        'label' => __('Images', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_six'
        ]
    ]
);

$this->add_control(
    'layout_six_image_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_six_image_two',
    [
        'label' => __('Image Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_six_image_three',
    [
        'label' => __('Image Three', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_six_shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_six_shape_two',
    [
        'label' => __('Shape Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();
