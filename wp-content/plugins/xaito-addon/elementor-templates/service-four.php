<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!--Services Page V 2 Start-->
    <section class="services-page-v-2">
        <div class="container">
            <?php if (!empty($settings['sec_title_four']) || !empty($settings['sec_sub_title_four'])) : ?>
                <div class="services-page-v-2__top text-center">
                    <div class="section-title">
                        <?php if (!empty($settings['sec_sub_title_four'])) : ?>
                            <span class="section-title__tagline"><?php echo wp_kses($settings['sec_sub_title_four'], 'xaito_allowed_tags'); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($settings['sec_title_four'])) : ?>
                            <<?php echo esc_attr($settings['section_title_four_tag_']) ?> class="section-title__title"><?php echo wp_kses($settings['sec_title_four'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_four_tag_']) ?>>
                        <?php endif; ?>
                    </div>
                    <p class="section-title__text"><?php echo wp_kses($settings['description_four'], 'xaito_allowed_tags'); ?>
                    </p>
                </div>
            <?php endif; ?>
            <div class="row">
                <?php foreach ($settings['layout_four_service_items'] as $index => $item) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <?php if (!empty($item['image']['url'])) : ?>
                                <div class="services-one__img">
                                    <img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($item['image']['id']); ?>">
                                </div>
                            <?php endif; ?>

                            <div class="services-one__content">
                                <div class="services-one__icon">
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </div>
                                <h3 class="services-one__title"><a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>"><?php echo esc_html($item['title']); ?></a></h3>

                                <p class="services-one__text"><?php echo esc_html($item['content']); ?></p>
                                <?php if (!empty($item['url'])) : ?>
                                    <div class="services-one__arrow">
                                        <a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>">
                                            <?php \Elementor\Icons_Manager::render_icon($item['btn-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--Services Page V 2 End-->
<?php endif; ?>