<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="footer-widget__latest-post">
        <?php if (!empty($settings['sec_title'])) : ?>
            <h4 class="footer-widget__tag"><?php echo wp_kses($settings['sec_title'], 'xaito_allowed_tags'); ?></h4>
        <?php endif; ?>
        <ul class="footer-widget__content list-unstyled ml-0">
            <?php
            $blog_post_one_query_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if (!empty($settings['select_category'])) :
                $blog_post_one_query_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => true,
                    'orderby' => 'date',
                    'order'   => $settings['query_order'],
                    'posts_per_page' => $settings['post_count']['size'],
                    'paged'          => $blog_post_one_query_paged,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $settings['select_category']
                        )
                    )
                );
            else :
                $blog_post_one_query_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'ignore_sticky_posts' => true,
                    'orderby' => 'date',
                    'paged'          => $blog_post_one_query_paged,
                    'order'   => $settings['query_order'],
                    'posts_per_page' => $settings['post_count']['size']
                );

            endif;
            $blog_post_one_query = new \WP_Query($blog_post_one_query_args);
            $i = 1;
            ?>


            <?php while ($blog_post_one_query->have_posts()) :
                $blog_post_one_query->the_post();



                $excerpt = get_the_excerpt();

                $excerpt = substr($excerpt, 0, 80);
                $content = substr($excerpt, 0, strrpos($excerpt, ' '));
            ?>
                <li>
                    <span><?php echo get_the_date(); ?></span>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                </li>
            <?php $i++;
            endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
<?php endif; ?>