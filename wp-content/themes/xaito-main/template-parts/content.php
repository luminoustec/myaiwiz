<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xaito
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('xc-postbox__item format-image xc-postbox__single pb-50 transition-3'); ?>>
    <?php if (!empty(get_the_post_thumbnail())) : ?>
        <div class="xc-postbox__thumb mb-20">
            <?php xaito_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <div class="xc-postbox__content">
        <div class="xc-postbox__meta">
            <span><i class="fal fa-calendar-check"></i> <?php echo get_the_date(); ?> </span>
            <span><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="fa-light fa-user"></i><?php echo get_the_author(); ?></a></span>
            <?php if (comments_open()) : ?>
                <span><a href="<?php comments_link(); ?>"><i class="fa-light fa-comment"></i> <?php comments_number(); ?></a></span>
            <?php endif; ?>
        </div>
        <div class="xc-postbox__text fix">
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

        <div class="xc-postbox-tag__wrapper">
            <?php xaito_cats_and_tags(); ?>
        </div>
    </div>
</article>