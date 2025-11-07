<?php

$this->start_controls_section(
    'content_section_four',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four',
        ],
    ]
);

$this->add_control(
    'sec_title_four',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Title ', 'xaito-addon'),
        'label_block' => true,
    ]
);
$this->add_control(
    'description_four',
    [
        'label' => __('Description', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Description Here ', 'xaito-addon'),
        'label_block' => true,
    ]
);

xaito_elementor_heading_option($this, 'section_title_four', 'h2');

$this->add_control(
    'sec_sub_title_four',
    [
        'label' => __('Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Sub Title', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'section_background_four',
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
    'service_section_four',
    [
        'label' => __('Service ', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_four',
        ],
    ]
);
$layout_four_services = new \Elementor\Repeater();



$layout_four_services->add_control(
    'image',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$layout_four_services->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-marketing-analysis-marketing-research',
            'library' => 'custom-icon',
        ],
    ]
);

$layout_four_services->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);

$layout_four_services->add_control(
    'content',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('short description here', 'xaito-addon'),
        'label_block' => true,
    ]
);


$layout_four_services->add_control(
    'btn-icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-right-arrow-1',
            'library' => 'custom-icon',
        ],
    ]
);

$layout_four_services->add_control(
    'url',
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


$this->add_control(
    'layout_four_service_items',
    [
        'label' => __('Services', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_four_services->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'title' => esc_html__('Discover', 'xaito-addon'),
            ],
            [
                'title' => esc_html__('Define', 'xaito-addon')
            ],
            [
                'title' => esc_html__('Discover', 'xaito-addon')
            ],
        ],
        'title_field' => '{{{ name }}}',

    ]

);




$this->end_controls_section();
