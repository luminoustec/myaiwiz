<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!--Start Support One-->
    <!--Cta One start-->
    <div class="cta-one">
        <div class="cta-one__bg-img" style="background-image: url(<?php echo esc_url($settings['background_image']['url']) ?>);">
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__left">
                    <div class="cta-one__img-box">
                        <img src="<?php echo esc_url($settings['image_one']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($settings['image_one']['id']); ?>">

                    </div>
                    <div class="cta-one__content">
                        <?php if (!empty($settings['title'])) : ?>
                            <<?php echo esc_attr($settings['section_title_tag_']) ?> class="cta-one__title"><?php echo wp_kses($settings['title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_tag_']) ?>>
                        <?php endif; ?>
                        <?php if (!empty($settings['layout_one_info'])) : ?>
                            <p class="cta-one__text"><?php echo wp_kses($settings['layout_one_info'], 'xaito_allowed_tags'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="cta-one__right">
                    <div class="cta-one__right-count">
                        <div class="cta-one__right-count-box">
                            <?php \Elementor\Icons_Manager::render_icon($settings['right_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                            <div class="count-box">
                                <h3 class="count-text" data-stop="<?php esc_attr_e($settings['right_count']) ?>" data-speed="1500">00</h3>
                            </div>
                            <span class="cta-one__right-expert-plus"><?php esc_attr_e($settings['right_count_before']) ?></span>
                        </div>
                        <p class="cta-one__right-text"><?php esc_html_e($settings['right_title']); ?></p>
                    </div>
                    <?php if (!empty($settings['button_label'])) : ?>
                        <div class="cta-one__right-button">
                            <a <?php echo esc_attr(!empty($settings['button_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($settings['button_url']['url']); ?>" class="thm-btn cta-one__right-btn"><?php echo esc_html($settings['button_label']); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!--Cta One end-->

<?php endif; ?>