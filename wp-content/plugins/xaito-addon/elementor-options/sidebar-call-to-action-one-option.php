<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-brain',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'title',
    [
        'label' => __('Add Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Title', 'xaito-addon'),
    ]
);

$this->add_control(
    'info_text',
    [
        'label' => __('Info Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('feel free to call', 'xaito-addon'),
        'label_block' => true
    ]
);
$this->add_control(
    'info_text_two',
    [
        'label' => __('Info Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('(11) 22 11-5751', 'xaito-addon'),
        'label_block' => true
    ]
);


$this->add_control(
    'button_label',
    [
        'label' => __('Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Begin a Conversation', 'xaito-addon'),
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
    'image',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();
