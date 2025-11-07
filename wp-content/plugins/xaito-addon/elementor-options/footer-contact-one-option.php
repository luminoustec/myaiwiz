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
        'label' => __('Widget Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Contact', 'xaito-addon')
    ]
);

$items = new \Elementor\Repeater();

$items->add_control(
    'icon',
    [
        'label' => __('Select Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-email-1',
            'library' => 'custom',
        ],
    ]
);

$items->add_control(
    'content',
    [
        'label' => __('Content'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'label_block' => true,
        'default' => wp_kses(__('<a href="mailto:helpus24@gmail.com">helpus24@gmail.com</a>', 'xaito-addon'), 'xaito_allowed_tags'),
    ]
);

$this->add_control(
    'items',
    [
        'label' => __('Contact Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $items->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'icon' => esc_html__('icon-email-1', 'xaito-addon'),
            ],
            [
                'icon' => esc_html__('icon-phone', 'xaito-addon')
            ],
        ],
    ]
);

$social_icons = new \Elementor\Repeater();

$social_icons->add_control(
    'social_icon',
    [
        'label' => __('Select Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fab fa-facebook-f',
            'library' => 'brands',
        ],
    ]
);

$social_icons->add_control(
    'social_url',
    [
        'label' => __('Add Url', 'xaito-addon'),
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
    'social_icons',
    [
        'label' => __('Social Icons', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $social_icons->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'social_url' => [
                    'url' => '#',
                    'is_external' => false,
                    'nofollow' => true,
                ],
            ],
        ],
    ]
);

$this->end_controls_section();
