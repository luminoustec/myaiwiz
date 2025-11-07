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
        'label' => __('Add Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Links', 'xaito-addon'),
        'label_block' => true
    ]
);


$this->add_control(
    'nav_menu',
    [
        'label' => __('Select Nav Menu', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => xaito_get_nav_menu(),
        'label_block' => true,
    ]
);
$this->end_controls_section();
