<?php

namespace Xoomcoders\Xaito\Metaboxes;


class Event
{
    function __construct()
    {
        add_action('cmb2_admin_init', [$this, 'add_metabox']);
    }

    function add_metabox()
    {
        $prefix = 'xaito_event_';

        $general = new_cmb2_box(array(
            'id'           => $prefix . 'event_option',
            'title'        => __('Event Options', 'xaito-addon'),
            'object_types' => array('event'),
            'context'      => 'normal',
            'priority'     => 'default',
        ));

        $general->add_field(array(
            'name' => __('Starting Time', 'xaito-addon'),
            'id' => $prefix . 'starting_time',
            'type' => 'text',
        ));

        $general->add_field(array(
            'name' => __('Event Date', 'xaito-addon'),
            'id' => $prefix . 'date',
            'type' => 'text_date',
            'date_format' => 'Y-m-d',
        ));

        $general->add_field(array(
            'name' => __('Phone', 'xaito-addon'),
            'id' => $prefix . 'phone',
            'type' => 'text',
        ));

        $general->add_field(array(
            'name' => __('Email', 'xaito-addon'),
            'id' => $prefix . 'email',
            'type' => 'text',
        ));

        $general->add_field(array(
            'name' => __('Location', 'xaito-addon'),
            'id' => $prefix . 'location',
            'type' => 'textarea',
        ));

        $general->add_field(array(
            'name' => __('Country', 'xaito-addon'),
            'id' => $prefix . 'country',
            'type' => 'text',
        ));

        $general->add_field(array(
            'name' => __('Set Map Location', 'xaito-addon'),
            'id' => $prefix . 'map',
            'type' => 'text',
            'default' => 'London Eye, London, United Kingdom'
        ));

        $general->add_field(array(
            'name'        => __('Map Zoom', 'xaito-addon'),
            'id'          => $prefix . 'zoom',
            'type'        => 'own_slider',
            'min'         => '0',
            'max'         => '200',
            'step'        => '5',
            'default'     => '10', // start value
        ));

        $general->add_field(array(
            'name' => __('Register Button Label', 'xaito-addon'),
            'id' => $prefix . 'btn_label',
            'type' => 'text',
        ));

        $general->add_field(array(
            'name' => __('Register Button Url', 'xaito-addon'),
            'id' => $prefix . 'btn_url',
            'type' => 'text',
        ));
    }
}
