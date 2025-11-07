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
    'section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add title', 'xaito-addon'),
        'default' => __('Default title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'section_title', 'h2');

$this->add_control(
    'section_subtitle',
    [
        'label' => __('Section Subtitle', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Subtitle', 'xaito-addon'),
        'default' => __('Default Subtitle', 'xaito-addon'),
    ]
);


$team = new \Elementor\Repeater();

$team->add_control(
    'bio',
    [
        'label' => __('Bio', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Family Psychology', 'xaito-addon'),
        'label_block' => true,
    ]
);
$team->add_control(
    'name',
    [
        'label' => __('Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Mike Hardson', 'xaito-addon'),
        'label_block' => true,
    ]
);

$team->add_control(
    'url',
    [
        'label' => __('Url', 'xaito-addon'),
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

$team->add_control(
    'social_network',
    [
        'label' => __('Social NetWork', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'label_block' => true,
        'default' => wp_kses('<a href="#"><i class="fab fa-facebook-f"></i></a>', 'xaito_allowed_tags')
    ]
);

$team->add_control(
    'image',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'team_items',
    [
        'label' => __('Team', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $team->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ name }}}',
        'default' => [
            [
                'name' => esc_html__('Tushar', 'xaito-addon'),
            ],
            [
                'name' => esc_html__('Samrat', 'xaito-addon')
            ],
            [
                'name' => esc_html__('Ashik', 'xaito-addon')
            ],
        ],
    ]
);

$this->end_controls_section();
