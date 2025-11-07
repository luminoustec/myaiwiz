<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'title',
    [
        'label' => __('Newsletter Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Title', 'xaito-addon'),
        'default' => __('Newsletter', 'xaito-addon'),
    ]
);
$this->add_control(
    'text',
    [
        'label' => __('Newsletter Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add About Text', 'xaito-addon'),
        'default' => __('Default Text', 'xaito-addon'),
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
