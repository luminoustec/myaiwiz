<?php
$this->start_controls_section(
    'layout_two_content_section',
    [
        'label' => __('Content', 'xaito-addon'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
        'condition' => [
            'layout_type' => 'layout_two'
        ]
    ]
);


$layout_two_faq = new \Elementor\Repeater();

$layout_two_faq->add_control(
    'question',
    [
        'label' => __('Question', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'placeholder' => __('Add Question', 'xaito-addon'),
        'default' => __('Default Question', 'xaito-addon'),
        'label_block' => true,
    ]
);
$layout_two_faq->add_control(
    'answer',
    [
        'label' => __('Answer', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'placeholder' => __('Add Answer', 'xaito-addon'),
        'default' => __('Default Question', 'xaito-addon'),
        'label_block' => true,
    ]
);

$layout_two_faq->add_control(
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
    'layout_two_faq_lists',
    [
        'label' => __('FAQ', 'xaito-addon'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $faq->get_controls(),
        'prevent_empty' => false,
        'title_field' => '{{{ question }}}',
    ]
);

$this->end_controls_section();
