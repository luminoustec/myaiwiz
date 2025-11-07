<?php

//layout_two

$this->start_controls_section(
    'content_two',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);
$this->add_control(
    'layout_two_sec_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub Title', 'xaito-addon'),
        'default' => __('Default Sub Title', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_two_sec_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);
xaito_elementor_heading_option($this, 'section_title', 'h2', 'layout_two');

$this->add_control(
    'layout_two_sec_info',
    [
        'label' => __('Section Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Section Info', 'xaito-addon'),
        'default' => __('Default Section Info', 'xaito-addon'),
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'feature_section',
    [
        'label' => __('Feature Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);


$features_two = new \Elementor\Repeater();


$features_two->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);
$features_two->add_control(
    'info',
    [
        'label' => __('Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('MasAI is now better at following along a storyline and referencing information you or Jasper have said recently in the chat.        ', 'xaito-addon'),
        'label_block' => true,
    ]
);
$features_two->add_control(
    'image',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$features_two->add_control(
    'image_two',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$features_two->add_control(
    'bg',
    [
        'label' => __('Bg Shape', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'feature_two_items',
    [
        'label' => __('features_two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $features_two->get_controls(),
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
