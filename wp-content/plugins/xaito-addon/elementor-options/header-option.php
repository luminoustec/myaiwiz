<?php
$this->start_controls_section(
    'logo_section',
    [
        'label' => __('Site Logo', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'logo',
    [
        'label' => __('Logo', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'logo_dimension',
    [
        'label' => __('Logo Dimension', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
        'description' => __('Set Custom Logo Size.', 'xaito-addon'),
        'default' => [
            'width' => '134',
            'height' => '34',
        ],
    ]
);

$this->add_control(
    'light-logo',
    [
        'label' => __('Dark Mode Logo', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->add_control(
    'light_logo_dimension',
    [
        'label' => __('Dark Logo Dimension', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
        'description' => __('Set Custom Logo Size.', 'xaito-addon'),
        'default' => [
            'width' => '134',
            'height' => '34',
        ],
    ]
);



$this->end_controls_section();

$this->start_controls_section(
    'header_top_section',
    [
        'label' => __('Header Top', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_one'
        ]
    ]
);

$this->add_control(
    'top_shape',
    [
        'label' => __('Background Shape', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'header_top_text',
    [
        'label' => __('Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Introducing Xaito: The large site for content writting for enterprise.', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'header_top_button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Learn More', 'xaito-addon'),
        'label_block' => true,
    ]
);


$this->add_control(
    'header_to_button_url',
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


$this->end_controls_section();

$this->start_controls_section(
    'nav_section',
    [
        'label' => __('Navigation', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'one_page_status',
    [
        'label' => __('Enable One Page Menu?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

$this->add_control(
    'nav_menu',
    [
        'label' => __('Select Nav Menu', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SELECT2,
        'options' => xaito_get_nav_menu(),
        'label_block' => true,
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'others_section',
    [
        'label' => __('Others', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'search_status',
    [
        'label' => __('Enable Search?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);
$this->add_control(
    'topbar_status',
    [
        'label' => __('Enable Header Top?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);
$this->add_control(
    'dark_status',
    [
        'label' => __('Enable Dark Switcher?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

$this->add_control(
    'button_label',
    [
        'label' => __('Button Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Sign In', 'xaito-addon'),
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
        'label' => __('Try For Free', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Start a Project', 'xaito-addon'),
        'label_block' => true,
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
    ]
);


$this->end_controls_section();



$this->start_controls_section(
    'mobile_menu_section',
    [
        'label' => __('Mobile Drawer', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);


$this->add_control(
    'mobile_menu_logo',
    [
        'label' => __('Mobile Drawer Logo', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);



$this->add_control(
    'mobile_menu_email',
    [
        'label' => __('Email Address', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('email@eamil.com', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'mobile_menu_phone',
    [
        'label' => __('Phone Number', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('323232', 'xaito-addon'),
        'label_block' => true,
    ]
);

$mobile_menu_social_icons = new \Elementor\Repeater();

$mobile_menu_social_icons->add_control(
    'social_icon',
    [
        'label' => __('Select Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fab fa-facebook-f',
            'library' => 'brands',
        ],
        'label_block' => true,
    ]
);

$mobile_menu_social_icons->add_control(
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
    'mobile_menu_social_icons',
    [
        'label' => __('Social Icons', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $mobile_menu_social_icons->get_controls(),
        'prevent_empty' => false,
        'default' => [
            [
                'social_icon' => 'fa-facebook-f',
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
