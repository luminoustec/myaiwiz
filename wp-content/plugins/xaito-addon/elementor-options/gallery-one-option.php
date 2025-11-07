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
        'label' => __('Gallery Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);


$btn = new \Elementor\Repeater();

$btn->add_control(
    'button',
    [
        'label' => __('Button', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Button', 'xaito-addon'),
        'label_block' => true,
    ]
);
$btn->add_control(
    'slug',
    [
        'label' => __('Group Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('button button1', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'btn_item',
    [
        'label' => __('Button Item', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $btn->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ button }}}',
        'default' => [
            [
                'default' => __('Button', 'xaito-addon'),
            ],
        ],
    ]
);

$gallery = new \Elementor\Repeater();

$gallery->add_control(
    'slug',
    [
        'label' => __('Group Names', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('button', 'xaito-addon'),
        'label_block' => true,
    ]
);

$gallery->add_control(
    'gallery',
    [
        'label' => __('Gallery Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'gallery_items',
    [
        'label' => __('gallery', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $gallery->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ name }}}',
    ]
);

$this->end_controls_section();
