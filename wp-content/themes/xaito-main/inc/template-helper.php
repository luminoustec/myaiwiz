<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package xaito
 */


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


if (!function_exists('xaito_post_categories')) :
    /**
     * print each post maximum 3 categories.
     */
    function xaito_post_categories($id)
    {
        $all_related_tags = get_the_category($id);
        $categories = array_slice($all_related_tags, 0, apply_filters('xaito_post_category_count', 1));
        $numItems = count($categories);
        $i = 0;
        if (!empty($categories)) {
            foreach ($categories as $category) {
                echo '<i class="far fa-folder-open"></i> <a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
            }
        }
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


if (!function_exists('xaito_cats_and_tags')) :
    /**
     * Prints HTML with meta information for the categories, tags and comments.
     */
    function xaito_cats_and_tags()
    {
        // Hide category and tag text for pages.
        if ('post' === get_post_type()) {
            
            /* translators: used between list items, there is a space after the comma */
            $categories_list = get_the_category_list(esc_html__(' ', 'xaito'));
            if ($categories_list) {
                /* translators: 1: list of categories. */
                printf('<div class="xc-postbox__cats catscloud"><span>' . esc_html__('Categories: %1$s', 'xaito') , '</span>'. $categories_list . '</div>' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            }

            /* translators: used between list items, there is a space after the comma */
            $tags_list = get_the_tag_list('', esc_html_x(' ', 'list item separator', 'xaito'));
            if ($tags_list) {
                /* translators: 1: list of tags. */
                printf('<div class="xc-postbox__tags tagcloud"><span>' . esc_html__('Tags: %1$s', 'xaito') , '</span>' . $tags_list . '</div>' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
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
        <?php the_post_thumbnail(); ?>

        <?php else : ?>
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
<?php
        endif; // End is_singular().
    }
endif;


if (!function_exists('xaito_pagination')) {
    /**
     * Prints HTML with post pagination links.
     */
    function xaito_pagination()
    {
        global $wp_query;
        $links = paginate_links(array(
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
        ));
        echo wp_kses($links, 'xaito_allowed_tags');
    }
}

/**
 * [xaito_mean_menu description]
 * @return [type] [description]
 */
if (!function_exists('xaito_mean_menu')) {
    function xaito_mean_menu()
    {
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'menu_class'     => 'xc-menu-ul',
            'container'      => '',
            'fallback_cb'    => 'Xaito_Navwalker_Class::fallback',
            'walker'         => new Xaito_Navwalker_Class,
        ]);
    }
}

if (!function_exists('wp_body_open')) {
    /**
     * Shim for sites older than 5.2.
     *
     * @link https://core.trac.wordpress.org/ticket/12563
     */
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
