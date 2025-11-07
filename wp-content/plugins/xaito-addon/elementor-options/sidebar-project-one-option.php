<?php

$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);
$this->add_control(
    'sec-title',
    [
        'label' => __('Add Widget Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Title', 'xaito-addon'),
    ]
);
$this->add_control(
    'sec-info',
    [
        'label' => __('Add Widget Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Info', 'xaito-addon'),
    ]
);

$this->add_control(
    'button',
    [
        'label' => __('Button Label', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Button Text', 'xaito-addon'),
        'default' => __('Button Text', 'xaito-addon'),
    ]
);

$this->add_control(
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

$tab_items = new \Elementor\Repeater();


$tab_items->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa-thin fa-user-tie',
            'library' => 'custom-icon',
        ],
    ]
);

$tab_items->add_control(
    'title',
    [
        'label' => __('Add Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Title', 'xaito-addon'),
    ]
);
$tab_items->add_control(
    'info',
    [
        'label' => __('Add Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Info', 'xaito-addon'),
    ]
);

$this->add_control(
    'tab_items',
    [
        'label' => __('Tab Items', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $tab_items->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ name }}}',
    ]
);
$this->end_controls_section();
