<?php


$this->start_controls_section(
    'content_one',
    [
        'label' => __('Section Heading', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
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

$this->add_control(
    'section_subtitle',
    [
        'label' => __('Section Subtitle', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Subtitle', 'xaito-addon'),
        'default' => __('Default Subtitle', 'xaito-addon'),
    ]
);

$this->add_control(
    'button',
    [
        'label' => __('Button Label', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Button Text', 'xaito-addon'),
        'default' => __('Button Text', 'xaito-addon'),
    ]
);

$this->add_control(
    'url',
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
    'testi_section',
    [
        'label' => __('Testimonal Item', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);


$layout_one_testimonial = new \Elementor\Repeater();

$layout_one_testimonial->add_control(
    'tagline',
    [
        'label' => __('Tagline', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Great Services', 'xaito-addon'),
        'label_block' => true
    ]
);

$layout_one_testimonial->add_control(
    'rating',
    [
        'label' => __('Rating', 'sycols-addon'),
        'type' => \Elementor\Controls_Manager::SLIDER,
        'size_units' => ['count'],
        'range' => [
            'count' => [
                'min' => 1,
                'max' => 5,
                'step' => 1,
            ],
        ],
        'default' => [
            'unit' => 'count',
            'size' => 5,
        ],
    ]
);
$layout_one_testimonial->add_control(
    'name',
    [
        'label' => __('Name', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Jessica Brown', 'xaito-addon'),
        'label_block' => true
    ]
);


$layout_one_testimonial->add_control(
    'designation',
    [
        'label' => __('Bio', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('CO Founder', 'xaito-addon'),
        'label_block' => true
    ]
);

$layout_one_testimonial->add_control(
    'testimonial',
    [
        'label' => __('Testimonial', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Default Testimonial Content', 'xaito-addon'),
    ]
);


$layout_one_testimonial->add_control(
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
    'layout_one_testimonial',
    [
        'label' => __('Testimonial Items', 'xaito-addon'),
        'prevent_empty' => false,
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $layout_one_testimonial->get_controls(),
        'default' => [
            [
                'name' => esc_html__('Tushar', 'xaito-addon'),
            ],
            [
                'name' => esc_html__('Samrat', 'xaito-addon')
            ],
        ],
        'title_field' => '{{{ name }}}',
    ]
);

$this->end_controls_section();
