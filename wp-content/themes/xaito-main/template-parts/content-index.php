<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xaito
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('xc-postbox__item mb-50') ?>>
    <?php if (!empty(get_the_post_thumbnail())) : ?>
        <div class="xc-postbox__thumb mb-20 p-relative">
            <a href="<?php the_permalink() ?>">
                <?php xaito_post_thumbnail(); ?>
            </a>
            <?php $categories = get_the_terms($post->ID, 'category'); ?>
            <?php if (!empty($categories[0]->name)) : ?>
                <div class="xc-postbox__cat">
                    <a href="<?php echo esc_url(get_tag_link($categories[0]->term_id)); ?>"><?php echo esc_html($categories[0]->name); ?></a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="xc-postbox__content">
        <div class="xc-postbox__meta">
            <span>
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><i class="fa-light fa-user"></i><?php echo get_the_author(); ?></a>
            </span>
            <span><a href="<?php the_permalink() ?>"><i class="fa-light fa-calendar"></i><?php echo get_the_date(); ?></a></span>
            <span>
                <a href="<?php comments_link(); ?>"><i class="fa-light fa-comment"></i><?php comments_number(); ?></a>
            </span>
        </div>
        <h3 class="xc-postbox__title">
            <a href="<?php the_permalink() ?>"><?php echo the_title(); ?></a>
        </h3>
        <div class="xc-postbox__read-more">
            <a href="<?php the_permalink() ?>" class="xc-more-btn"><?php esc_html_e("Read More", 'xaito')   ?><i class="fa-light fa-arrow-right-long"></i></a>
        </div>
    </div>
</article>