<?php


$this->start_controls_section(
    'heading_section',
    [
        'label' => __('Secton Title', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout',
        ],
    ]
);

$this->add_control(
    'topbar_status',
    [
        'label' => __('Enable Header ?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'layout_type' => 'layout_three',
        ],
    ]
);
$this->add_control(
    'bottom_status',
    [
        'label' => __('Enable Bottom ?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'yes',
        'condition' => [
            'layout_type' => 'layout_three',
        ],
    ]
);

$this->add_control(
    'section_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Sub Title', 'xaito-addon'),
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

xaito_elementor_heading_option($this, 'Section Title', 'h3');

$this->add_control(
    'section_summary',
    [
        'label' => __('Section Info', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Awesome Info', 'xaito-addon'),
    ]
);

$this->add_control(
    'content_two',
    [
        'label' => __('Content Bottom', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Content Bottom description here', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'layout_type' => 'layout_two',
        ],
    ]
);

$this->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'layout_type' => 'layout_three',
        ],
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
        'condition' => [
            'layout_type' => 'layout_three',
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'service_section',
    [
        'label' => __('Service Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);
$services = new \Elementor\Repeater();

$services->add_control(
    'feature_status',
    [
        'label' => __('Enable Feature Service ?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);


$services->add_control(
    'icon_image',
    [
        'label' => __('Icon Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
        'condition' => [
            'feature_status' => 'yes',
        ],
    ]
);

$services->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa-brands fa-instagram',
            'library' => 'custom-icon',
        ],
        'condition' => [
            'feature_status' => 'no',
        ],
    ]
);
$services->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Ready to Explore? ', 'xaito-addon'),
        'label_block' => true,
    ]
);
$services->add_control(
    'title_url',
    [
        'label' => __('Title Url', 'xaito-addon'),
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

$services->add_control(
    'content',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('short description here', 'xaito-addon'),
        'label_block' => true,
    ]
);

$services->add_control(
    'btn_one_text',
    [
        'label' => __('Btn One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Btn One', 'xaito-addon'),
        'label_block' => true,
    ]
);
$services->add_control(
    'btn_one_url',
    [
        'label' => __('Button One Url', 'xaito-addon'),
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

$services->add_control(
    'btn_two_text',
    [
        'label' => __('Btn Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Btn Two', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'feature_status' => 'no',
        ],
    ]
);
$services->add_control(
    'btn_two_url',
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
            'feature_status' => 'no',
        ],
    ]
);

$this->add_control(
    'service_items',
    [
        'label' => __('Services', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $services->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'title' => esc_html__('Discover', 'xaito-addon'),
            ],
            [
                'title' => esc_html__('Define', 'xaito-addon')
            ],
        ],
        'title_field' => '{{{ name }}}',

    ]

);




$this->end_controls_section();


$this->start_controls_section(
    'image_section',
    [
        'label' => __('Image', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout',
        ],
    ]
);

$this->add_control(
    'shape_one',
    [
        'label' => __('Shape One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type' => 'layout_one',
        ],
    ]
);
$this->add_control(
    'shape_two',
    [
        'label' => __('Shape Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type' => 'layout_one',
        ],
    ]
);
$this->add_control(
    'bg_shape',
    [
        'label' => __('Background Shape', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type' => 'layout_two',
        ],
    ]
);
$this->end_controls_section();
