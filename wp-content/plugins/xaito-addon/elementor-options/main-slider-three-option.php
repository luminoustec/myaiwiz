<?php

//layout_three
$this->start_controls_section(
    'layout_three_content_section',
    [
        'label' => __('Slider Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);

$layout_three_slider = new \Elementor\Repeater();


$layout_three_slider->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);


$layout_three_slider->add_control(
    'sub_title',
    [
        'label' => __('Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Sub Title', 'xaito-addon'),
    ]
);

$layout_three_slider->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Discover More', 'xaito-addon'),
        'label_block' => true,
    ]
);

$layout_three_slider->add_control(
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

$layout_three_slider->add_control(
    'background_image',
    [
        'label' => __('Slider Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$layout_three_slider->add_control(
    'layout_three_circle_icon',
    [
        'label' => __('Circle logo', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$layout_three_slider->add_control(
    'cicle_text',
    [
        'label' => __('Circle Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('We Are . Digital . Agency .', 'xaito-addon'),
        'label_block' => true,
    ]
);
$layout_three_slider->add_control(
    'background_image_shape_one',
    [
        'label' => __('Shpae One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
        ],
    ]
);
$layout_three_slider->add_control(
    'background_image_shape_two',
    [
        'label' => __('Shpae Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
        ],
    ]
);
$layout_three_slider->add_control(
    'background_image_shape_three',
    [
        'label' => __('Shpae Three', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
        ],
    ]
);

$this->add_control(
    'layout_three_sliders',
    [
        'label' => __('Slider Content', 'xaito-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_three_slider->get_controls(),
        'default' => [
            [
                'title' => __('Awesome Title', 'xaito-addon'),
            ],
        ],
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
