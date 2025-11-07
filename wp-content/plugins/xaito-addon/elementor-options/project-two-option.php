<?php

$this->start_controls_section(
    'section_content_section_two',
    [
        'label' => __('Section Header', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_two']
        ]
    ]
);

$this->add_control(
    'layout_two_title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title_two', 'h2');

$this->add_control(
    'layout_two_sub_title',
    [
        'label' => __('Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_two_bg_image',
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
    'portfolio_section_two',
    [
        'label' => __('Project Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => ['layout_two']
        ]
    ]
);


$layout_two_services = new \Elementor\Repeater();



$layout_two_services->add_control(
    'image',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);


$layout_two_services->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);

$layout_two_services->add_control(
    'subtitle',
    [
        'label' => __('Subtitle', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('subtitle here', 'xaito-addon'),
        'label_block' => true,
    ]
);

$layout_two_services->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Learn More', 'xaito-addon'),
        'label_block' => true,
    ]
);

$layout_two_services->add_control(
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

$layout_two_services->add_control(
    'link-icon',
    [
        'label' => __('Link Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-fast-forward-thin-double-arrows',
            'library' => 'custom-icon',
        ],
    ]
);
$layout_two_services->add_control(
    'zoom-icon',
    [
        'label' => __('Zoom Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-zoom-in',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'layout_two_service_items',
    [
        'label' => __('Services', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_two_services->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'title' => esc_html__('Discover', 'xaito-addon'),
            ],
            [
                'title' => esc_html__('Define', 'xaito-addon')
            ],
        ],
        'title_field' => '{{{ name }}}',

    ]

);


$this->end_controls_section();
