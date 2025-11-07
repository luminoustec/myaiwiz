<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xaito
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class('xc-page__wrapper pb-50 transition-3'); ?>>
    <div class="xc-postbox__content xc-page__content">
        <div class="xc-postbox__text xc-page__text fix">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        esc_html__('Continue reading', 'xaito') . '<span class="screen-reader-text"> "%s"</span>',
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'xaito'),
                    'after'  => '</div>',
                )
            );
            ?>
        </div>
    </div>
</div>