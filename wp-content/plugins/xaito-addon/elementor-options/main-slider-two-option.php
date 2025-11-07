<?php
//layout_two
$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Slider Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$layout_two_slider = new \Elementor\Repeater();


$layout_two_slider->add_control(
    'circle_text',
    [
        'label' => __('Circle Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Circle Title', 'xaito-addon'),
    ]
);
$layout_two_slider->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);


$layout_two_slider->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
    ]
);

$layout_two_slider->add_control(
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

$layout_two_slider->add_control(
    'slider_shape',
    [
        'label' => __('Slider Shape', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
        ],
    ]
);
$layout_two_slider->add_control(
    'circle_img',
    [
        'label' => __('Cirlce Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$layout_two_slider->add_control(
    'cicle_text',
    [
        'label' => __('Circle Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('We Are . Digital . Agency .', 'xaito-addon'),
        'label_block' => true,
    ]
);
$layout_two_slider->add_control(
    'background_image',
    [
        'label' => __('Slider Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'layout_two_sliders',
    [
        'label' => __('Slider Content', 'xaito-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_two_slider->get_controls(),
        'default' => [
            [
                'title' => __('Awesome Title', 'xaito-addon'),
            ],
        ],
        'title_field' => '{{{ title }}}',
    ]
);

$this->end_controls_section();
