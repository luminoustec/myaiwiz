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

$download = new \Elementor\Repeater();

$download->add_control(
    'file-name',
    [
        'label' => __('File Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Name', 'xaito-addon'),
        'default' =>  __('File Name', 'xaito-addon'),
    ]
);
$download->add_control(
    'file-size',
    [
        'label' => __('File Size', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Size', 'xaito-addon'),
        'default' =>  __('File Size', 'xaito-addon'),
    ]
);

$download ->add_control(
    'file-link',
    [
        'label' => esc_html__( 'Download Link', 'xaito-addon' ),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => esc_html__( 'https://your-link.com', 'xaito-addon' ),
        'options' => [ 'url', 'is_external', 'nofollow' ],
        'default' => [
            'url' => '#',
            'is_external' => true,
            'nofollow' => true,
        ],
        'label_block' => true,
    ]
);

$download->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-download',
            'library' => 'custom-icon',
        ],
    ]
);

$this->add_control(
    'download-list',
    [
        'label' => __('Download Item', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'prevent_empty' => false,
        'fields' => $download->get_controls(),
    ]
);

$this->end_controls_section();
