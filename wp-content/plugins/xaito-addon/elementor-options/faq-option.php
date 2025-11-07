<?php
$this->start_controls_section(
    'content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$this->add_control(
    'section_subtitle',
    [
        'label' => __('Section Sub Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Sub title', 'xaito-addon'),
        'default' => __('Default Sub title', 'xaito-addon'),
        'condition' => [
            'layout_type' => 'layout_three'
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


$this->end_controls_section();

$this->start_controls_section(
    'faq_section',
    [
        'label' => __('Faq', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);

$faq = new \Elementor\Repeater();

$faq->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'fa-regular fa-lightbulb',
            'library' => 'custom-icon',
        ],
    ]
);

$faq->add_control(
    'question',
    [
        'label' => __('Question', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Add Question', 'xaito-addon'),
        'label_block' => true,
    ]
);
$faq->add_control(
    'answer',
    [
        'label' => __('Answer', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Add Answer', 'xaito-addon'),
        'label_block' => true,
    ]
);

$faq->add_control(
    'active_status',
    [
        'label' => __('Is active?', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Yes', 'xaito-addon'),
        'label_off' => __('No', 'xaito-addon'),
        'return_value' => 'yes',
        'default' => 'no',
    ]
);

$this->add_control(
    'faq_lists',
    [
        'label' => __('FAQ', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $faq->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ question }}}',
    ]
);

$this->end_controls_section();


$this->start_controls_section(
    'img_section',
    [
        'label' => __('Imgae', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type!' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'img',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'shape_one',
    [
        'label' => __('Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);
$this->add_control(
    'shape_two',
    [
        'label' => __('Shape Two', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [],
        'condition' => [
            'layout_type' => 'layout_three'
        ]
    ]
);


$this->end_controls_section();
