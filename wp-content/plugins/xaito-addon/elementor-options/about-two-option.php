<?php

//layout_one
$this->start_controls_section(
    'content_two',
    [
        'label' => __('Section Heading', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);



$this->add_control(
    'layout_two_section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Default title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title', 'h2', 'layout_two');

$this->add_control(
    'layout_two_author_name',
    [
        'label' => __('Author Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Kristin Minasian', 'xaito-addon'),
    ]
);
$this->add_control(
    'layout_two_author_bio',
    [
        'label' => __('Author Bio', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Bio', 'xaito-addon'),
        'default' => __('Product Bio, Xaino', 'xaito-addon'),
    ]
);



$this->end_controls_section();

//images
$this->start_controls_section(
    'section_list_two',
    [
        'label' => __('List Item', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$list_item_two = new \Elementor\Repeater();

$list_item_two->add_control(
    'count',
    [
        'label' => __('Count', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Number', 'xaito-addon'),
        'default' => __('75', 'xaito-addon'),
    ]
);
$list_item_two->add_control(
    'count_after',
    [
        'label' => __('Count After', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Number After', 'xaito-addon'),
        'default' => __('%', 'xaito-addon'),
    ]
);
$list_item_two->add_control(
    'text',
    [
        'label' => __('text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add text', 'xaito-addon'),
        'default' => __('default text', 'xaito-addon'),
    ]
);
$this->add_control(
    'list_item_two',
    [
        'label' => __('Feature Lists', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $list_item_two->get_controls(),
        'prevent_empty' => false,
    ]
);

$this->end_controls_section();


//images
$this->start_controls_section(
    'section_image_two',
    [
        'label' => __('Images', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);


$this->add_control(
    'layout_two_image_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_two_shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_two_shape_two',
    [
        'label' => __('Shape Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$this->end_controls_section();
