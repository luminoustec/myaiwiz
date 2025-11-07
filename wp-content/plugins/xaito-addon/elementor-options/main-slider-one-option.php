<?php
$this->start_controls_section(
    'content_section',
    [
        'label' => __('Slider Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$slider = new \Elementor\Repeater();


$slider->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);

$slider->add_control(
    'sub_title',
    [
        'label' => __('Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Sub Title', 'xaito-addon'),
    ]
);

$slider->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
    ]
);

$slider->add_control(
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

$slider->add_control(
    'background_image',
    [
        'label' => __('Slider Background', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$slider->add_control(
    'shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$slider->add_control(
    'shape_two',
    [
        'label' => __('Shape Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$slider->add_control(
    'shape_three',
    [
        'label' => __('Shape Three', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'sliders',
    [
        'label' => __('Slider Content', 'xaito-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $slider->get_controls(),
        'default' => [
            [
                'title' => __('Awesome Title', 'xaito-addon'),
            ],
        ],
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
