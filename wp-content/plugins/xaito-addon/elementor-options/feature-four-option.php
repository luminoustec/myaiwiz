<?php

//layout_four

$this->start_controls_section(
    'content_four',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four'
        ]
    ]
);


$this->add_control(
    'layout_four_sec_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title', 'h2','layout_four');


$this->end_controls_section();


$this->start_controls_section(
    'feature_four_section',
    [
        'label' => __('Feature Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four'
        ]
    ]
);


$features = new \Elementor\Repeater();

$features->add_control(
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

$features->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);
$this->add_control(
    'layout_four_feature_items',
    [
        'label' => __('features', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $features->get_controls(),
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
