<?php

function xaito_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'xaito'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'xaito'),
            'before_widget' => '<section id="%1$s" class="widget %2$s xc-sidebar__widget">',
            'after_widget'  => '</section>',
            'before_title'  => ' <div class="sidebar-title"><h2>',
            'after_title'   => '</h2></div>',
        )
    );
}
add_action('widgets_init', 'xaito_widgets_init');
