<?php
$this->start_controls_section(
    'content_section',
    [
        'label' => __('Banner Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout_'
        ]
    ]
);

$this->add_control(
    'section_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Sub Title', 'xaito-addon'),
        'condition' => [
            'layout_type!' => 'layout_three'
        ]
    ]
);


$this->add_control(
    'section_title',
    [
        'label' => __('Section Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Title', 'xaito-addon'),
    ]
);

xaito_elementor_heading_option($this, 'Section Title', 'h2');


$slider_text = new \Elementor\Repeater();

$slider_text->add_control(
    'text',
    [
        'label' => __('Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Discover', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'tpying_text',
    [
        'label' => __('Sldier Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $slider_text->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ name }}}',
        'condition' => [
            'layout_type' => 'layout_one'
        ],
        'default' => [
            [
                'title' => esc_html__('Discover', 'xaito-addon'),
            ],
        ],
    ]
);

$check_list = new \Elementor\Repeater();

$check_list->add_control(
    'title',
    [
        'label' => __('title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Discover', 'xaito-addon'),
        'label_block' => true,
    ]
);
$this->add_control(
    'check_list',
    [
        'label' => __('Check List', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $check_list->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ name }}}',
        'condition' => [
            'layout_type' => 'layout_four'
        ],
        'default' => [
            [
                'title' => esc_html__('Discover', 'xaito-addon'),
            ],
        ],
    ]
);

$this->add_control(
    'summary',
    [
        'label' => __('Summary', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Summary Info', 'xaito-addon'),
    ]
);
$this->add_control(
    'summary_two',
    [
        'label' => __('Summary Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Summary Info Two', 'xaito-addon'),
        'condition' => [
            'layout_type!' => ['layout_three', 'layout_four']
        ]
    ]
);

$this->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
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
$this->add_control(
    'button_two_label',
    [
        'label' => __('Button Two Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'button_two_url',
    [
        'label' => __('Button Two Url', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'xaito-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => true,
        ],
        'show_label' => false,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);


$this->add_control(
    'video_url',
    [
        'label' => __('Video Url', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::URL,
        'placeholder' => __('#', 'xaito-addon'),
        'show_external' => false,
        'default' => [
            'url' => '#',
            'is_external' => false,
            'nofollow' => true,
        ],
        'show_label' => true,
        'condition' => [
            'layout_type' => ['layout_one', 'layout_three', 'layout_four']
        ]
    ]
);

$this->add_control(
    'video_text',
    [
        'label' => __('Video Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Watch Demo', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'layout_type' => ['layout_three', 'layout_four']
        ]
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'image_section',
    [
        'label' => __('Image', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout'
        ]
    ]
);


$this->add_control(
    'banner_img',
    [
        'label' => __('Banner Img', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'banner_img_two',
    [
        'label' => __('Avata Img', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);
$this->add_control(
    'shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'shape_two',
    [
        'label' => __('Shape Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
    ]
);
$this->add_control(
    'shape_three',
    [
        'label' => __('Shape Three', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type!' => 'layout_three'
        ]
    ]
);
$this->add_control(
    'shape_four',
    [
        'label' => __('Shape Four', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type' => ['layout_two', 'layout_four']
        ]
    ]
);
$this->add_control(
    'shape_five',
    [
        'label' => __('Shape Five', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'background_image',
    [
        'label' => __('Banner Background', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'layout_type!' => 'layout_four'
        ]

    ]
);



$this->end_controls_section();
