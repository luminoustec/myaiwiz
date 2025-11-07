<?php

//layout_five

$this->start_controls_section(
    'content_five',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_five'
        ]
    ]
);


$this->add_control(
    'layout_five_sec_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title', 'h2', 'layout_five');


$this->end_controls_section();


$this->start_controls_section(
    'feature_five_section',
    [
        'label' => __('Feature Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_five'
        ]
    ]
);


$features_five = new \Elementor\Repeater();

$features_five->add_control(
    'image',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$features_five->add_control(
    'image_two',
    [
        'label' => __('Image Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$features_five->add_control(
    'date',
    [
        'label' => __('Date', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Jun 23, 2016', 'xaito-addon'),
        'label_block' => true,
    ]
);
$features_five->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);

$features_five->add_control(
    'url',
    [
        'label' => __('Title Url', 'xaito-addon'),
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
$features_five->add_control(
    'contact',
    [
        'label' => __('Contact', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);

$features_five->add_control(
    'shape',
    [
        'label' => __('Shape', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'layout_five_feature_items',
    [
        'label' => __('features', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $features_five->get_controls(),
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
