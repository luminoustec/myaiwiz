<?php

$this->start_controls_section(
    'heading_section',
    [
        'label' => __('Secton Title', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout',
        ],
    ]
);


$this->add_control(
    'section_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Sub Title', 'xaito-addon'),
    ]
);


$this->add_control(
    'section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'Section Title', 'h3');


$this->end_controls_section();


$this->start_controls_section(
    'content_section',
    [
        'label' => __('Post Options', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);


$this->add_control(
    'post_count',
    [
        'label' => __('Number Of Posts', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['count'],
        'range' => [
            'count' => [
                'min' => 0,
                'max' => 15,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'count',
            'size' => 6,
        ],
    ]
);

$this->add_control(
    'post_word_count',
    [
        'label' => __('Word Count In Excerpt', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['count'],
        'range' => [
            'count' => [
                'min' => 1,
                'max' => 200,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'count',
            'size' => 11,
        ],
    ]
);

$this->add_control(
    'query_order',
    [
        'label' => __('Select Order', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'default' => 'DESC',
        'options' => [
            'DESC' => __('DESC', 'xaito-addon'),
            'ASC' => __('ASC', 'xaito-addon'),
        ]
    ]
);

$this->add_control(
    'pagination_status',
    [
        'label' => __('Enable Pagination?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
        'condition' => [
            'layout_type' => ['layout_one', 'layout_two', 'layout_three']
        ]
    ]
);


$this->end_controls_section();
