<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title', 'h3');


$this->add_control(
    'subtitle',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Subtitle', 'xaito-addon'),
    ]
);
$this->add_control(
    'content',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Text', 'xaito-addon'),
    ]
);

$this->add_control(
    'video_url',
    [
        'label' => __('Video Url', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Video Url', 'xaito-addon'),
        'default' => esc_url('https://www.youtube.com/watch?v=Get7rqXYrbQ'),
        'label_block' => true
    ]
);
$this->end_controls_section();

$this->start_controls_section(
    'count_section',
    [
        'label' => __('Count Item', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$layout_one_count = new \Elementor\Repeater();

$layout_one_count->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('default title', 'xaito-addon'),
    ]
);

$layout_one_count->add_control(
    'count',
    [
        'label' => __('Count Number', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Number', 'xaito-addon'),
        'default' => __('25', 'xaito-addon'),
    ]
);
$layout_one_count->add_control(
    'count_after',
    [
        'label' => __('Count After', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add After', 'xaito-addon'),
        'default' => __('+', 'xaito-addon'),
    ]
);

$layout_one_count->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-success-achievement-award-medal-winner',
            'library' => 'custom-icon',
        ],
    ]
);


$this->add_control(
    'layout_one_count',
    [
        'label' => __('Feature Lists', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_one_count->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'image_section',
    [
        'label' => __('Images', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);


$this->add_control(
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
    'shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'shape_two',
    [
        'label' => __('Shape Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
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
