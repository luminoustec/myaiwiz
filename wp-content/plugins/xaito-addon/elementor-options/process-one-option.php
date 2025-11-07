<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'sec_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);

$this->add_control(
    'sec_sub_title',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Sub Title', 'xaito-addon'),
    ]
);

$process_items = new \Elementor\Repeater();

$process_items->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Concept', 'xaito-addon'),
        'label_block' => true,
    ]
);

$process_items->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-concept',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'process_items',
    [
        'label' => __('Items', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $process_items->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'title' => __('Concept', 'xaito-addon'),
            ],
        ],
        'title_field' => '{{{ title }}}',
    ]
);

$this->add_control(
    'summary',
    [
        'label' => __('Summary Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Summary Text', 'xaito-addon'),
        'label_block' => true,
    ]
);


$this->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'button_url',
    [
        'label' => __('Button Url', 'xaito-addon'),
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
