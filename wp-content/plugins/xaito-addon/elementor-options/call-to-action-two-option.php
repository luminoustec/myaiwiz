<?php

$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
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

xaito_elementor_heading_option($this, 'section_title_two', 'h4');

$this->add_control(
    'layout_two_content',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Content', 'xaito-addon'),
        'default' => __('Default Content', 'xaito-addon'),
    ]
);

$this->add_control(
    'layout_two_button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Make it Happen', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_two_button_url',
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
    'mailchimp_url',
    [
        'label' => __('Add Mailchimp URL', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => '#',
        'label_block' => true
    ]
);

$this->add_control(
    'mc_input_placeholder',
    [
        'label' => __('Input Placeholder Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Enter your email', 'xaito-addon'),
        'label_block' => true
    ]
);


$this->add_control(
    'submit_icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-send',
            'library' => 'custom-icon',
        ],
    ]
);

$this->end_controls_section();
