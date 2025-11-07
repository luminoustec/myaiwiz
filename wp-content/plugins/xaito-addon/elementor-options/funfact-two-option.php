<?php

use Elementor\Core\Utils\ImportExport\Url;

$this->start_controls_section(
    'content_section_two',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$this->add_control(
    'professional_title',
    [
        'label' => __('professional Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Professional Mental Therapy Services', 'xaito-addon'),
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_two_image',
    [
        'label' => __('Image', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);
$this->add_control(
    'layout_two_backgroud-image',
    [
        'label' => __('Background Image One', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
            'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'layout_two_counter_box_section',
    [
        'label' => __('Counter Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$funfact_box_two = new \Elementor\Repeater();

$funfact_box_two->add_control(
    'icon',
    [
        'label' => __('Count Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-hand-rating-smile',
            'library' => 'custom-icon',
        ],
    ]
);

$funfact_box_two->add_control(
    'counter',
    [
        'label' => __('Count Number', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => 790,
        'label_block' => true,
    ]
);
$funfact_box_two->add_control(
    'text',
    [
        'label' => __('Count Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Projects Completed', 'xaito-addon'),
        'label_block' => true,
    ]
);

$funfact_box_two->add_control(
    'sign',
    [
        'label' => __('Count Sign', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'label_block' => true,
    ]
);

$this->add_control(
    'layout_two_funfact_boxes',
    [
        'label' => __('Funfact Boxes Fist Row', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'prevent_empty' => false,
        'fields' => $funfact_box_two->get_controls(),
        'default' => [
            [
                'counter' => 4850,
                'text' => __('Total Campaigns', 'xaito-addon'),
                'icon' => [
                    'value' => 'icon-hand-rating-smile',
                    'library' => 'custom-icon',
                ],
            ],
        ],
        'title_field' => '{{{ text }}}',
    ]
);

$this->end_controls_section();

$this->start_controls_section(
    'layout_two_professional_box_section',
    [
        'label' => __('Professional Items', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);

$funfact_box_two_two = new \Elementor\Repeater();

$funfact_box_two_two->add_control(
    'icon',
    [
        'label' => __('Icon', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
            'value' => 'icon-checkup',
            'library' => 'custom-icon',
        ],
    ]
);

$funfact_box_two_two->add_control(
    'title',
    [
        'label' => __('Title', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Projects Completed', 'xaito-addon'),
        'label_block' => true,
    ]
);

$funfact_box_two_two->add_control(
    'text',
    [
        'label' => __('Text', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'default' => __('Projects Completed', 'xaito-addon'),
        'label_block' => true,
    ]
);



$this->add_control(
    'layout_two_funfact_boxes_two',
    [
        'label' => __('Funfact Boxes Secound Row', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'prevent_empty' => false,
        'fields' => $funfact_box_two_two->get_controls(),
        'default' => [
            [
                'text' => __('Total Campaigns', 'xaito-addon'),
                'icon' => [
                    'value' => 'icon-checkup',
                    'library' => 'custom-icon',
                ],
            ],
        ],
        'title_field' => '{{{ text }}}',
    ]
);

$this->end_controls_section();
