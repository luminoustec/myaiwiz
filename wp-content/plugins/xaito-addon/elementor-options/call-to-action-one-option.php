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
    'image_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'title',
    [
        'label' => __('Left Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Default Title', 'xaito-addon'),
    ]
);
$this->add_control(
    'layout_one_info',
    [
        'label' => __('Left Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Info', 'xaito-addon'),
        'default' => __('Default Info', 'xaito-addon'),
    ]
);
xaito_elementor_heading_option($this, 'section_title', 'h2');
$this->add_control(
    'right_title',
    [
        'label' => __('Right Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Title Two', 'xaito-addon'),
        'default' => __('Default Title Two', 'xaito-addon'),
    ]
);

$this->add_control(
    'right_icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-award-badge-quality cta-one__right-icon',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'right_count',
    [
        'label' => __('Count', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Count Number', 'xaito-addon'),
        'default' => __('20', 'xaito-addon'),
    ]
);

$this->add_control(
    'right_count_before',
    [
        'label' => __('Count Before', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Count Before', 'xaito-addon'),
        'default' => __('+', 'xaito-addon'),
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


$this->add_control(
    'background_image',
    [
        'label' => __('Background Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();
