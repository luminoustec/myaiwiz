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
    'bg_image',
    [
        'label' => __('Background Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'shape_one',
    [
        'label' => __('Shapne One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'content_section',
    [
        'label' => __('Price Tab', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout'
        ]
    ]
);
$this->add_control(
    'montly_tab_text',
    [
        'label' => __('Monthly', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Monthly', 'xaito-addon'),
        'label_block' => true,
    ]
);
$this->add_control(
    'yearly_tab_text',
    [
        'label' => __('Yearly', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Yearly', 'xaito-addon'),
        'label_block' => true,
    ]
);
$this->add_control(
    'offer',
    [
        'label' => __('Offer', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('30% Off', 'xaito-addon'),
        'label_block' => true,
    ]
);
$this->add_control(
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

$this->end_controls_section();

$this->start_controls_section(
    'monthly_section',
    [
        'label' => __('Montly Table', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout'
        ]
    ]
);

$montly = new \Elementor\Repeater();

$montly->add_control(
    'feature_status',
    [
        'label' => __('Enable Feature Table ?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);


$montly->add_control(
    'feature_title',
    [
        'label' => __('Feature Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('MOST POPULAR', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'feature_status' => 'yes'
        ]
    ]
);

$montly->add_control(
    'package',
    [
        'label' => __('Package Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Most Popular', 'xaito-addon'),
        'label_block' => true,
    ]
);
$montly->add_control(
    'price',
    [
        'label' => __('Package Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('$19/', 'xaito-addon'),
        'label_block' => true,
    ]
);
$montly->add_control(
    'duration',
    [
        'label' => __('Duration', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('mo', 'xaito-addon'),
        'label_block' => true,
    ]
);

$montly->add_control(
    'content',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'default' => __('short description here', 'xaito-addon'),
        'label_block' => true,
    ]
);

$montly->add_control(
    'btn_text',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start Free Trial Today', 'xaito-addon'),
        'label_block' => true,
    ]
);
$montly->add_control(
    'btn_url',
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
    'montly_price_table',
    [
        'label' => __('Montly Price Table', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $montly->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'package' => esc_html__('Discover', 'xaito-addon'),
            ],
            [
                'package' => esc_html__('Define', 'xaito-addon')
            ],
        ],
        'title_field' => '{{{ name }}}',

    ]

);

$this->end_controls_section();

$this->start_controls_section(
    'yearly_section',
    [
        'label' => __('Yearly Table', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout'
        ]
    ]
);

$yearly = new \Elementor\Repeater();

$yearly->add_control(
    'feature_status',
    [
        'label' => __('Enable Feature Table ?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

$yearly->add_control(
    'feature_title',
    [
        'label' => __('Feature Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('MOST POPULAR', 'xaito-addon'),
        'label_block' => true,
        'condition' => [
            'feature_status' => 'yes'
        ]
    ]
);

$yearly->add_control(
    'package',
    [
        'label' => __('Package Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Most Popular', 'xaito-addon'),
        'label_block' => true,
    ]
);
$yearly->add_control(
    'price',
    [
        'label' => __('Package Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('$228/', 'xaito-addon'),
        'label_block' => true,
    ]
);
$yearly->add_control(
    'duration',
    [
        'label' => __('Duration', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('yr', 'xaito-addon'),
        'label_block' => true,
    ]
);

$yearly->add_control(
    'content',
    [
        'label' => __('Content', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::CODE,
        'default' => __('short description here', 'xaito-addon'),
        'label_block' => true,
    ]
);

$yearly->add_control(
    'btn_text',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start Free Trial Today', 'xaito-addon'),
        'label_block' => true,
    ]
);
$yearly->add_control(
    'btn_url',
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
    'yearly_price_table',
    [
        'label' => __('Yearly Price Table', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $yearly->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'package' => esc_html__('Discover', 'xaito-addon'),
            ],
            [
                'package' => esc_html__('Define', 'xaito-addon')
            ],
        ],
        'title_field' => '{{{ name }}}',

    ]

);

$this->end_controls_section();
