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

$team_two = new \Elementor\Repeater();

$team_two->add_control(
    'bio',
    [
        'label' => __('Bio', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Family Psychology', 'xaito-addon'),
        'label_block' => true,
    ]
);
$team_two->add_control(
    'name',
    [
        'label' => __('Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Mike Hardson', 'xaito-addon'),
        'label_block' => true,
    ]
);

$team_two->add_control(
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

$team_two->add_control(
    'social_network',
    [
        'label' => __('Social NetWork', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'label_block' => true,
        'default' => wp_kses('<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>', 'xaito_allowed_tags')
    ]
);

$team_two->add_control(
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
    'team_two_items',
    [
        'label' => __('Team', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $team_two->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ name }}}',
        'condition' => [
            'layout_type' => 'layout_two'
        ],
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
