<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xaito
 */

?>

<section class="xc-no-results xc-not-found xc-error-page__inner-box">
    <header class="xc-not-found__page-header">
        <h2 class="xc-page-title error-page__tagline"><?php esc_html_e('Nothing Found', 'xaito'); ?></h2>
    </header><!-- .not-found__page-header -->

    <div class="xc-not-found__page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :

            printf(
                '<p class="xc-error-page__text">' . wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                    esc_html__('Ready to publish your first post? ', 'xaito') . '<a href="%1$s">' .  esc_html__('Get started here', 'xaito') . '</a>.',
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );

        elseif (is_search()) : ?>

            <p class="xc-error-page__text"><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'xaito'); ?></p>
            <div class="xc-error-page__search">
                <div class="xc-error-page__search-form">
                    <div class="xc-error-page__form-input">
                        <?php echo get_search_form(); ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p class="xc-error-page__text"><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'xaito'); ?></p>
            <div class="xc-error-page__search">
                <div class="xc-error-page__search-form">
                    <div class="xc-error-page__form-input">
                        <?php echo get_search_form(); ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
