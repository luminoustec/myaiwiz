<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'sidebar-title',
    [
        'label' => __('Widget Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' =>  __('Service Categories', 'xaito-addon'),
    ]
);

$nav_menus = new \Elementor\Repeater();

$nav_menus->add_control(
    'nav_menu',
    [
        'label' => __('Select Nav Menu', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => xaito_get_nav_menu(),
        'label_block' => true,
    ]
);


$this->add_control(
    'nav_menus',
    [
        'label' => __('Nav Menus', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'prevent_empty' => false,
        'fields' => $nav_menus->get_controls(),
    ]
);

$this->end_controls_section();
