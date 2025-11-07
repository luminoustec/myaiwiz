<?php

/**
 * making array of custom icon classes
 * which is saved in transient
 * @return array
 */
if (!function_exists('xaito_get_fa_icons')) :

    function xaito_get_fa_icons()
    {
        $data = get_transient('xaito_fa_icons');

        if (empty($data)) {
            global $wp_filesystem;
            require_once(ABSPATH . '/wp-admin/includes/file.php');
            WP_Filesystem();

            $fontAwesome_file =  XAITO_ADDON_PATH . '/assets/vendors/fontawesome/css/all.min.css';
            $template_icon_file =XAITO_ADDON_PATH . '/assets/vendors/xaito-icons/style.css';
            $content = '';

            if ($wp_filesystem->exists($fontAwesome_file)) {
                $content = $wp_filesystem->get_contents($fontAwesome_file);
            } // End If Statement

            if ($wp_filesystem->exists($template_icon_file)) {
                $content .= $wp_filesystem->get_contents($template_icon_file);
            } // End If Statement

            $pattern = '/\.(fa-(?:\w+(?:-)?)+):before\s*{\s*content/';
            $pattern_two = '/\.(icon-(?:\w+(?:-)?)+):before\s*{\s*content/';

            $subject = $content;

            preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
            preg_match_all($pattern_two, $subject, $matches_two, PREG_SET_ORDER);

            $all_matches = array_merge($matches, $matches_two);

            $icons = array();

            foreach ($all_matches as $match) {
                // $icons[] = array('value' => $match[1], 'label' => $match[1]);
                $icons[] = $match[1];
            }


            $data = $icons;
            set_transient('xaito_fa_icons', $data, 10080); // saved for one week

        }



        return array_combine($data, $data); // combined for key = value
    }


endif;

// custom kses allowed html
if (!function_exists('xaito_kses_allowed_html')) :
    function xaito_kses_allowed_html($tags, $context)
    {
        switch ($context) {
            case 'xaito_allowed_tags':
                $tags = array(
                    'a' => array('href' => array(), 'class' => array()),
                    'b' => array(),
                    'br' => array(),
                    'span' => array('class' => array(), 'data-count' => array(), 'data-speed' => array(), 'data-stop' => array()),
                    'del' => array('class' => array()),
                    'ins' => array('class' => array()),
                    'bdi' => array('class' => array()),
                    'img' => array('class' => array()),
                    'i' => array('class' => array()),
                    'p' => array('class' => array()),
                    'ul' => array('class' => array()),
                    'li' => array('class' => array()),
                    'div' => array('class' => array()),
                    'strong' => array(),
                    'sup' => array(),
                );
                return $tags;
            default:
                return $tags;
        }
    }

    add_filter('wp_kses_allowed_html', 'xaito_kses_allowed_html', 10, 2);

endif;

if (!function_exists('xaito_excerpt')) :

    // Post's excerpt text
    function xaito_excerpt($get_limit_value, $echo = true)
    {
        $opt = $get_limit_value;
        $excerpt_limit = !empty($opt) ? $opt : 40;
        $excerpt = wp_trim_words(get_the_content(), $excerpt_limit, '');
        if ($echo == true) {
            echo esc_html($excerpt);
        } else {
            return esc_html($excerpt);
        }
    }

endif;

if (!function_exists('xaito_givewp_excerpt')) :

    // Post's excerpt text
    function xaito_givewp_excerpt($get_limit_value, $echo = true)
    {
        $opt = $get_limit_value;
        $excerpt_limit = !empty($opt) ? $opt : 40;
        $excerpt = wp_trim_words(get_the_excerpt(), $excerpt_limit, '');
        if ($echo == true) {
            echo esc_html($excerpt);
        } else {
            return esc_html($excerpt);
        }
    }

endif;


if (!function_exists('xaito_posted_on')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function xaito_posted_on()
    {
        $time_xaitotring = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_xaitotring = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_xaitotring = sprintf(
            $time_xaitotring,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x(' %s', 'post date', 'xaito'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_xaitotring . '</a>'
        );

        echo '<span class="posted-on"><i class="icon-clock-1"></i>' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }
endif;

if (!function_exists('xaito_posted_on_two')) :
    /**
     * Prints HTML with meta information for the current post-date/time.
     */
    function xaito_posted_on_two()
    {
        $time_xaitotring = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_xaitotring = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_xaitotring = sprintf(
            $time_xaitotring,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            /* translators: %s: post date. */
            esc_html_x(' %s', 'post date', 'xaito'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_xaitotring . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }
endif;

if (!function_exists('xaito_posted_by')) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function xaito_posted_by()
    {
        $byline = sprintf(
            /* translators: %s: post author. */
            esc_html_x('%s', 'post author', 'xaito'),
            '<span><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html("By " . get_the_author()) . '</a></span>'
        );

        echo '<span class="byline"><i class="icon-user"></i> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

    }

endif;

if (!function_exists('xaito_comment_count')) {
    function xaito_comment_count()
    {
        if (!post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link"><i class="icon-comment"></i> ';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: post title */
                        __('No Comment<span class="screen-reader-text"> on %s</span>', 'xaito'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );
            echo '</span>';
        }
    }
}

if (!function_exists('xaito_entry_footer')) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function xaito_entry_footer()
    {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {


            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(' ', 'xaito'));
            if ($categories_list) {
                /* translators: 1: list of categories. */
                printf('<span class="cat-info blog-details__tags cat-links"><span>' . esc_html__('Categories: %1$s', 'xaito') . '</span>', '</span>' . $categories_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(' ', 'list item separator', 'xaito'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<span class="tags-links blog-details__tags tags-info"><span>' . esc_html__('Tags: %1$s', 'xaito') . '</span>', '</span>' . $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }
        }
    }
endif;


if (!function_exists('xaito_post_thumbnail')) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function xaito_post_thumbnail()
    {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
?>

            <div class="post-thumbnail news-details__img blog-details__img ">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

        <?php else : ?>
            <div class="blog-sidebar__img">
                <span class="post-thumbnail blog-single__content-img news-sidebar__img">
                    <?php
                    the_post_thumbnail(
                        'post-thumbnail',
                        array(
                            'alt' => the_title_attribute(
                                array(
                                    'echo' => false,
                                )
                            ),
                        )
                    );
                    ?>
                </span>
            </div>

        <?php
        endif; // End is_singular().
    }
endif;

if (!function_exists('xaito_post_query')) {
    function xaito_post_query($post_type)
    {
        $post_list = get_posts(array(
            'post_type' => $post_type,
            'showposts' => -1,
        ));
        $posts = array();

        if (!empty($post_list) && !is_wp_error($post_list)) {
            foreach ($post_list as $post) {
                $options[$post->ID] = $post->post_title;
            }
            return $options;
        }
    }
}

if (!function_exists('xaito_custom_query_pagination')) :
    /**
     * Prints HTML with post pagination links.
     */
    function xaito_custom_query_pagination($paged = '', $max_page = '')
    {
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        if (!$paged)
            $paged = get_query_var('paged');
        if (!$max_page)
            $max_page = $wp_query->max_num_pages;

        $links = paginate_links(array(
            'base'       => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'     => '?paged=%#%',
            'current'    => max(1, $paged),
            'total'      => $max_page,
            'mid_size'   => 1,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
        ));

        echo wp_kses($links, 'xaito_allowed_tags');
    }
endif;

if (!function_exists('xaito_get_nav_menu')) :
    function xaito_get_nav_menu()
    {
        $menu_list = get_terms(array(
            'taxonomy' => 'nav_menu',
            'hide_empty' => true,
        ));
        $options = [];
        if (!empty($menu_list) && !is_wp_error($menu_list)) {
            foreach ($menu_list as $menu) {
                $options[$menu->slug] = $menu->name;
            }
            return $options;
        }
    }
endif;

if (!function_exists('xaito_get_taxonoy')) :
    function xaito_get_taxonoy($taxonoy)
    {
        $taxonomy_list = get_terms(array(
            'taxonomy' => $taxonoy,
            'hide_empty' => true,
        ));
        $options = [];
        if (!empty($taxonomy_list) && !is_wp_error($taxonomy_list)) {
            foreach ($taxonomy_list as $taxonomy) {
                $options[$taxonomy->slug] = $taxonomy->name;
            }
            return $options;
        }
    }
endif;

if (!function_exists('xaito_get_template')) :
    function xaito_get_template($template_name = null)
    {
        $template_path = apply_filters('xaito-elementor/template-path', 'elementor-templates/');
        $template = locate_template($template_path . $template_name);
        if (!$template) {
            $template =XAITO_ADDON_PATH  . '/elementor-templates/' . $template_name;
        }
        if (file_exists($template)) {
            return $template;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('xaito_get_elementor_option')) :
    function xaito_get_elementor_option($template_name = null)
    {
        $template_path = apply_filters('xaito-elementor/template-options', 'elementor-options/');
        $template = locate_template($template_path . $template_name);
        if (!$template) {
            $template =XAITO_ADDON_PATH  . '/elementor-options/' . $template_name;
        }
        if (file_exists($template)) {
            return $template;
        }
    }
endif;



if (!function_exists('xaito_get_thumbnail_alt')) :
    function xaito_get_thumbnail_alt($thumbnail_id)
    {
        return get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
    }
endif;

if (!function_exists('xaito_get_owl_options')) :
    function xaito_get_owl_options($settings)
    {
        $loop_status = ('yes' == $settings['loop']) ? 'true' : 'false';
        $nav_status = ('yes' == $settings['enable_nav']) ? 'true' : 'false';
        $dots_status = ('yes' == $settings['enable_dots']) ? 'true' : 'false';
        $center_mode = ('yes' == $settings['enable_center']) ? 'true' : 'false';
        if ('yes' == $settings['enable_nav']) {
            $nav_left_icon = $settings['nav_left_icon']['value'];
            $nav_right_icon = $settings['nav_right_icon']['value'];
        }
        $items = $settings['items']['size'];
        $margin = $settings['margin']['size'];
        $smart_speed = $settings['smart_speed']['size'];
        $breakpoint = $settings['breakpoint'];
        ob_start(); ?>
        {
        "loop": <?php echo esc_attr($loop_status) ?>,
        "margin": <?php echo esc_attr($margin) ?>,
        "items": <?php echo esc_attr($items) ?>
        ,"nav": <?php echo esc_attr($nav_status) ?>
        <?php if ('yes' == $settings['enable_nav']) :  ?>
            ,"navText": [
            "<span class=\" <?php echo esc_attr($nav_left_icon) ?>\"></span>",
            "<span class=\" <?php echo esc_attr($nav_right_icon) ?>\"></span>"
            ]
        <?php endif; ?>
        ,"dots": <?php echo esc_attr($dots_status) ?>
        ,"smartSpeed": <?php echo esc_attr($smart_speed) ?>
        ,"center": <?php echo esc_attr($center_mode) ?>

        <?php if (!empty($breakpoint)) :  ?>
            ,
            "responsive":
            {
            <?php foreach ($breakpoint as $item) : ?>
                "<?php echo esc_attr($item['screen_size']['size']); ?>": {
                "margin": <?php echo esc_attr($item['margin']['size']); ?>,
                "items": <?php echo esc_attr($item['item']['size']); ?>
                }<?php echo esc_attr($item != end($breakpoint) ? ',' : ''); ?>
            <?php endforeach; ?>
            }
        <?php endif; ?>
        }
    <?php return ob_get_clean();
    }
endif;

if (!function_exists('xaito_get_swiper_options')) :
    function xaito_get_swiper_options($settings, $pagination_id = false)
    {
        $loop_status = ('yes' == $settings['loop']) ? 'true' : 'false';
        $autoplay_status = ('yes' == $settings['autoplay']) ? 'true' : 'false';
        $delay = $settings['delay']['size'];
        $items = $settings['items']['size'];
        $margin = $settings['margin']['size'];
        $breakpoint = $settings['breakpoint'];
        ob_start(); ?>

        {
        "loop": <?php echo esc_attr($loop_status); ?>,
        "spaceBetween": <?php echo esc_attr($margin); ?>,
        "slidesPerView": <?php echo esc_attr($items); ?>
        <?php if ('true' == $autoplay_status) : ?>
            ,"autoplay": { "delay": <?php echo esc_attr($delay); ?> }
        <?php endif; ?>
        <?php if ('yes' == $settings['enable_dots']) : ?>
            ,"pagination": {
            "el": "#<?php echo esc_attr($pagination_id); ?>",
            "type": "bullets",
            "clickable": true
            }
        <?php endif; ?>
        <?php if (!empty($breakpoint)) :  ?>
            ,"breakpoints": {
            <?php foreach ($breakpoint as $item) : ?>
                "<?php echo esc_attr($item['screen_size']['size']); ?>": {
                "spaceBetween": <?php echo esc_attr($item['margin']['size']); ?>,
                "slidesPerView": <?php echo esc_attr($item['item']['size']); ?>
                }<?php echo esc_attr($item != end($breakpoint) ? ',' : ''); ?>
            <?php endforeach; ?>
            }
        <?php endif; ?>
        }
    <?php return ob_get_clean();
    }
endif;

if (!function_exists('xaito_get_elementor_carousel_options')) :
    function xaito_get_elementor_carousel_options($arg, $condition)
    {


        $arg->start_controls_section(
            'slider_options',
            [
                'label' => __('Slider Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );



        $arg->add_control(
            'autoplay',
            [
                'label' => esc_html__('AutoPlay', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'xaito-addon'),
                'label_off' => esc_html__('No', 'xaito-addon'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $arg->add_control(
            'delay',
            [
                'label' => __('AutoPlay Delay', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],

                'range' => [
                    'count' => [
                        'min' => 0,
                        'max' => 10000,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 5000,
                ],
            ]
        );

        $arg->add_control(
            'loop',
            [
                'label' => esc_html__('Loop', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'xaito-addon'),
                'label_off' => esc_html__('No', 'xaito-addon'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $arg->add_control(
            'enable_nav',
            [
                'label' => esc_html__('Display Nav', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'xaito-addon'),
                'label_off' => esc_html__('No', 'xaito-addon'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $arg->add_control(
            'nav_left_icon',
            [
                'label' => esc_html__('Nav Left Icon', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'enable_nav' => 'yes'
                ],
                'default' => [
                    'value' => 'icon-up-arrow',
                    'library' => 'custom-icon',
                ],
            ]
        );

        $arg->add_control(
            'nav_right_icon',
            [
                'label' => esc_html__('Nav Right Icon', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'enable_nav' => 'yes'
                ],
                'default' => [
                    'value' => 'icon-up-arrow',
                    'library' => 'custom-icon',
                ],
            ]
        );
        $arg->add_control(
            'enable_center',
            [
                'label' => esc_html__('Center Mode', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'xaito-addon'),
                'label_off' => esc_html__('No', 'xaito-addon'),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $arg->add_control(
            'enable_dots',
            [
                'label' => esc_html__('Display Dots', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__('Yes', 'xaito-addon'),
                'label_off' => esc_html__('No', 'xaito-addon'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );


        $arg->add_control(
            'smart_speed',
            [
                'label' => __('Smart Speed', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],

                'range' => [
                    'count' => [
                        'min' => 0,
                        'max' => 10000,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 700,
                ],
            ]
        );
        

        $arg->add_control(
            'items',
            [
                'label' => __('Slide Items', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],
                'range' => [
                    'count' => [
                        'min' => 1,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 1,
                ],
            ]
        );

        $arg->add_control(
            'margin',
            [
                'label' => __('Margin', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],
                'range' => [
                    'count' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 0,
                ],
            ]
        );


        $breakpoint = new \Elementor\Repeater();

        $breakpoint->add_control(
            'screen_size',
            [
                'label' => __('Screen Size', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],
                'range' => [
                    'count' => [
                        'min' => 0,
                        'max' => 1920,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 0,
                ],
            ]
        );

        $breakpoint->add_control(
            'item',
            [
                'label' => __('Slide Item', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],
                'range' => [
                    'count' => [
                        'min' => 1,
                        'max' => 10,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 1,
                ],
            ]
        );

        $breakpoint->add_control(
            'margin',
            [
                'label' => __('Margin', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => ['count'],
                'range' => [
                    'count' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'count',
                    'size' => 0,
                ],
            ]
        );

        $arg->add_control(
            'breakpoint',
            [
                'label' => __('Breakpoints', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'prevent_empty' => false,
                'fields' => $breakpoint->get_controls(),
            ]
        );

        $arg->end_controls_section();
    }
endif;


if (!function_exists('xaito_typo_and_color_options')) :
    function xaito_typo_and_color_options($agrs, $label, $selector, $condition, $style = 'color', $typo = true, $color = true)
    {

        if (false != $typo) :
            //title typography
            $agrs->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name'           =>  str_replace(' ', '_', $label) . '_typo',
                    'label'          => esc_html__($label . ' Typography', 'xaito-addon'),
                    'selector'       => $selector,
                    'condition' => [
                        'layout_type' => $condition
                    ]
                ]
            );

        endif;
        if (false != $color) :
            $agrs->add_control(
                str_replace(' ', '_', $label) . '_color',
                [
                    'label' => __($label . ' Color', 'xaito-addon'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        $selector => $style . ': {{VALUE}}',
                    ],
                    'condition' => [
                        'layout_type' => $condition
                    ]
                ]
            );
        endif;
    }
endif;



if ('yes' != get_theme_mod('project_in_shop')) :

    function xaito_project_product_query($q)
    {
        $tax_query = $q->get('tax_query');

        $tax_query[] = array(
            'taxonomy' => 'product_type',
            'field'    => 'slug',
            'terms'    => 'crowdfunding',
            'operator' => 'NOT IN',
        );
        $q->set('tax_query', $tax_query);
    }
    add_action('woocommerce_product_query', 'xaito_project_product_query', 99);
endif;


function xaito_get_static_menu($url)
{
    ob_start(); ?>
    <ul class="main-menu__list">
        <li class="dropdown">
            <a href="<?php echo $url; ?>/home-1/">Home </a>
            <ul>
                <li><a href="<?php echo $url; ?>/home-1/">Home One</a></li>
                <li><a href="<?php echo $url; ?>/home2/">Home Two</a></li>
                <li><a href="<?php echo $url; ?>/home3/">Home Three</a></li>
                <li class="dropdown">
                    <a href="<?php echo $url; ?>/#">Header Styles</a>
                    <ul>
                        <li><a href="<?php echo $url; ?>/home-1/">Header One</a></li>
                        <li><a href="<?php echo $url; ?>/home2/">Header Two</a></li>
                        <li><a href="<?php echo $url; ?>/home3/">Header Three</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="<?php echo $url; ?>/services/">Services</a>
            <ul>
                <li><a href="<?php echo $url; ?>/services/">Services</a></li>
                <li><a href="<?php echo $url; ?>/services-carousel/">Services Carousel</a></li>
                <li><a href="<?php echo $url; ?>/individual-counselling/">Individual Counselling</a>
                </li>
                <li><a href="<?php echo $url; ?>/couple-counselling/">Couple Counselling</a></li>
                <li><a href="<?php echo $url; ?>/depression-treatment/">Depression Treatment</a></li>
                <li><a href="<?php echo $url; ?>/family-psychology/">Family Psychology</a></li>
                <li><a href="<?php echo $url; ?>/group-theraphy/">Group Theraphy</a></li>
                <li><a href="<?php echo $url; ?>/children-counselling/">Children Counselling</a></li>
            </ul>
        </li>
        <li class="current">
            <a href="<?php echo $url; ?>/about/">About</a>
        </li>
        <li class="dropdown">
            <a href="<?php echo $url; ?>/cases/">Case</a>
            <ul>
                <li><a href="<?php echo $url; ?>/case/">Case</a></li>
                <li><a href="<?php echo $url; ?>/case-carousel/">Case Carousel</a></li>
                <li><a href="<?php echo $url; ?>/case-single/">Case Single</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="<?php echo $url; ?>/#">Page</a>
            <ul>
                <li><a href="<?php echo $url; ?>/team/">Team</a></li>
                <li><a href="<?php echo $url; ?>/team-carousel/">Team Carousel</a></li>
                <li><a href="<?php echo $url; ?>/faq/">FAQs</a></li>
                <li><a href="<?php echo $url; ?>/error/">404 Error</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="<?php echo $url; ?>/blog/">Blog</a>
            <ul>
                <li><a href="<?php echo $url; ?>/blog/">Blog</a></li>
                <li><a href="<?php echo $url; ?>/blog-carousel/">Blog Carousel</a></li>
                <li><a href="<?php echo $url; ?>/blog-list/">Blog List</a></li>
                <li><a href="<?php echo $url; ?>/blog-list-left/">Blog Left Sidebar</a></li>
                <li><a href="<?php echo $url; ?>/blog-single/">Blog Single</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo $url; ?>/contact/">Contact</a>
        </li>
    </ul>
<?php return ob_get_clean();
}


if (!function_exists('xaito_elementor_rendered_image')) {
    function xaito_elementor_rendered_image($content, $name, $class = '', $duration = '', $delay = '')
    {
        if (empty($content[$name])) {
            return;
        }

        $image = ($content[$name]["id"] != "") ? wp_get_attachment_image_url($content[$name]["id"], "full") : $content[$name]["url"];
        if (empty($image)) {
            return;
        }

        $image_attr = '';
        $title = \Elementor\Control_Media::get_image_title($content[$name]);

        if (!empty($title)) {
            $image_attr .= 'title="' . esc_attr($title) . '" ';
        }

        if (!empty($class)) {
            $image_attr .= 'class="' . esc_attr($class) . '" ';
        }

        if (!empty($duration)) {
            $image_attr .= 'data-wow-duration="' . esc_attr($duration) . '" ';
        }

        if (!empty($delay)) {
            $image_attr .= 'data-wow-delay="' . esc_attr($delay) . '" ';
        }

        printf(
            '<img src="%s" alt="%s" %s>',
            esc_url($image),
            esc_attr(\Elementor\Control_Media::get_image_alt($content[$name])),
            $image_attr
        );
    }
}


if (!function_exists('xaito_elementor_rendered_content')) :
    function xaito_elementor_rendered_content($init, $rendered_name, $class = '', $tag = 'p', $url_name = 'url', $extra = '')
    {

        $settings = $init->get_settings_for_display();


        if ('a' == $tag) :
            $init->add_render_attribute($rendered_name, [
                'class' => 'xaito-inline-editing'
            ]);
        else :
            $init->add_render_attribute($rendered_name, [
                'class' => $class,
            ]);
        endif;

        if ('a' == $tag) :
            printf(
                '<%1$s %7$s %3$s %4$s><em %2$s>%5$s</em> %6$s</%1$s>',
                tag_escape($tag),
                $init->get_render_attribute_string($rendered_name),
                'href="' . esc_url($settings[$url_name]['url']) . '"',
                esc_attr(!empty($settings[$url_name]['is_external']) ? "target=_blank" : ' '),
                wp_kses($settings[$rendered_name], 'xaito_allowed_tags'),
                $extra,
                'class="' . esc_attr($class) . '"'
            );
        else :
            printf(
                '<%1$s %2$s>%3$s</%1$s>',
                tag_escape($tag),
                $init->get_render_attribute_string($rendered_name),
                wp_kses($settings[$rendered_name], 'xaito_allowed_tags')
            );
        endif;
    }

endif;

if (!function_exists('xaito_elementor_general_style_options')) :
    function xaito_elementor_general_style_options($agrs, $label, $selector, $condition, $style = 'color', $typo = true, $color = true)
    {

        //Label
        $agrs->add_control(
            str_replace(' ', '_', $label) . '_subtitle',
            [
                'type' => \Elementor\Controls_Manager::HEADING,
                'label' => __($label, 'xaito-addon'),
                'separator' => 'after',
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $agrs->add_responsive_control(
            str_replace(' ', '_', $label) . '_padding',
            [
                'label' => __(' Padding', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $agrs->add_responsive_control(
            str_replace(' ', '_', $label) . '_margin',
            [
                'label' => __(' Margin', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    $selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        if ($typo) :
            $agrs->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name'           =>  str_replace(' ', '_', $label) . '_typo',
                    'label'          => esc_html__(' Typography', 'xaito-addon'),
                    'selector'       => $selector,
                    'condition' => [
                        'layout_type' => $condition
                    ]
                ]
            );

        endif;
        if ($color) :
            $agrs->add_control(
                str_replace(' ', '_', $label) . '_color',
                [
                    'label' => __('Color', 'xaito-addon'),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        $selector => $style . ': {{VALUE}}',
                    ],
                    'condition' => [
                        'layout_type' => $condition
                    ]
                ]
            );
        endif;
    }
endif;

if (!function_exists('xaito_elementor_button_style_options')) :

    function xaito_elementor_button_style_options($init, $label, $selector, $hover_bg_selector = '', $condition = 'layout_one')
    {

        //Label
        $init->add_control(
            str_replace(' ', '_', $label) . '_subtitle_label',
            [
                'type' => \Elementor\Controls_Manager::HEADING,
                'label' => __($label, 'xaito-addon'),
                'separator' => 'after',
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_responsive_control(
            str_replace(' ', '_', $label) . '_padding',
            [
                'label' => __('Padding', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => str_replace(' ', '_', $label) . '_typography',
                'selector' => $selector,
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => str_replace(' ', '_', $label) . '_border',
                'selector' => $selector,
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace(' ', '_', $label) . '_border_radius',
            [
                'label' => __('Border Radius', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    $selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => str_replace(' ', '_', $label) . '_box_shadow',
                'selector' => $selector,
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace(' ', '_', $label) . '_hr',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
                'style' => 'thick',
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->start_controls_tabs(str_replace(' ', '_', $label) . '_tabs_button');

        $init->start_controls_tab(
            str_replace(' ', '_', $label) . '_tab_button_normal',
            [
                'label' => __('Normal', 'xaito-addon'),
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace(' ', '_', $label) . '_color',
            [
                'label' => __('Text Color', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    $selector => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace(' ', '_', $label) . '_bg_color',
            [
                'label' => __('Background Color', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    $selector => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->end_controls_tab();

        $init->start_controls_tab(
            str_replace(' ', '_', $label) . '_tab_button_hover',
            [
                'label' => __('Hover', 'xaito-addon'),
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace(' ', '_', $label) . '_hover_color',
            [
                'label' => __('Text Color', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    $selector . ':hover,' . $selector . ':focus' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace(' ', '_', $label) . '_hover_bg_color',
            [
                'label' => __('Background Color', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    $hover_bg_selector => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace(' ', '_', $label) . '_hover_border_color',
            [
                'label' => __('Border Color', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'button_border_border!' => '',
                ],
                'selectors' => [
                    $selector . ':hover,' . $selector . ':focus' => 'border-color: {{VALUE}};',
                ],
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );

        $init->end_controls_tab();
        $init->end_controls_tabs();
    }
endif;


if (!function_exists('xaito_elementor_heading_option')) :
    function xaito_elementor_heading_option($init, $label, $default = 'h2', $layout = '')
    {
        $init->add_control(
            str_replace(' ', '_', strtolower($label)) . '_tag_' . $layout,
            [
                'label' => esc_html__($label . ' Tag', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'label_block' => true,
                'options' => array(
                    'h1'   => 'H1',
                    'h2'   => 'H2',
                    'h3'   => 'H3',
                    'h4'   => 'H4',
                    'h5'   => 'H5',
                    'h6'   => 'H6',
                    'div'  => 'div',
                    'span' => 'span',
                    'p'    => 'p',
                ),
                'default' => $default,
            ]
        );
    }
endif;


if (!function_exists('xaito_elementor_column_count_options')) :
    function xaito_elementor_column_count_options($init, $condition)
    {
        $init->start_controls_section(
            'column_options',
            [
                'label' => __('Column Options', 'xaito-addon'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'layout_type' => $condition
                ]
            ]
        );


        $init->add_responsive_control(
            'column_count',
            [
                'label' => __('Column Width %', 'xaito-addon'),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                    ],
                ],
                'devices' => ['desktop', 'tablet', 'mobile'],
                'desktop_default' => [
                    'unit' => '%',
                    'size' => '',
                ],
                'tablet_default' => [
                    'unit' => '%',
                    'size' => '',
                ],
                'mobile_default' => [
                    'unit' => '%',
                    'size' => '',
                ],
                'selectors' => [
                    '{{WRAPPER}} .row [class*=col-]' => 'width: {{SIZE}}% !important;',
                ],
            ]
        );

        $init->end_controls_section();
    }
endif;


if (!function_exists('xaito_fixed_footer_class_to_html_tag')) :
    function xaito_fixed_footer_class_to_html_tag($output, $doctype)
    {
        if ('html' !== $doctype) {
            return $output;
        }

        return $output;
    }
endif;
