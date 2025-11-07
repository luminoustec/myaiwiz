<?php if ('layout_five' == $settings['layout_type']) : ?>

    <!--Project Page V 1 Start-->
    <section class="project-page-v-2">
        <div class="project-page-v-2-bg" style="background-image: url(<?php echo esc_url($settings['layout_five_bg_image']['url'])?>);"></div>
        <div class="container">
            <div class="project-page-v-2__top">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <?php if (!empty($settings['layout_five_title']) || !empty($settings['layout_five_sub_title'])) : ?>
                            <div class="project-page-v-2__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline"><?php echo wp_kses($settings['layout_five_sub_title'], 'xaito_allowed_tags'); ?></span>
                                    <<?php echo esc_attr($settings['section_title_five_tag_']) ?> class="section-title__title"><?php echo wp_kses($settings['layout_five_title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_five_tag_']) ?>>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="project-page-v-2__top-right">
                            <p class="project-page-v-2__top-text"><?php echo wp_kses($settings['layout_five_description'], 'xaito_allowed_tags'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-page-v-2__bottom">
                <div class="row">
                    <?php foreach ($settings['layout_five_service_items'] as $index => $item) : ?>
                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php esc_attr_e($index + 1) ?>00ms">
                            <div class="project-one__single">
                                <?php if (!empty($item['image']['url'])) : ?>
                                    <div class="project-one__img">
                                        <img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($item['image']['id']); ?>">
                                    </div>
                                <?php endif; ?>

                                <div class="project-one__content">
                                    <div class="project-one__content-left">
                                        <div class="project-one__content-arrow-box">
                                            <div class="project-one__content-arrow-box-inner">
                                                <?php if (!empty($item['button_label'])) : ?>
                                                    <p class="project-one__content-arrow-text"><?php echo esc_html($item['button_label']); ?></p>
                                                <?php endif; ?>
                                                <a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>" class="project-one__content-arrow"><span class="icon-fast-forward-thin-double-arrows"></span></a>
                                            </div>
                                        </div>
                                        <div class="project-one__content-title-box">
                                            <p class="project-one__content-title-sub-title"><?php echo esc_html($item['subtitle']); ?></p>
                                            <h3 class="project-one__content-title"><a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>"><?php echo esc_html($item['title']); ?></a></h3>
                                        </div>
                                    </div>
                                    <div class="project-one__content-right">
                                        <ul class="list-unstyled project-one__content-icon-box ml-0">
                                            <li>
                                                <div class="project-one__content-icon">
                                                    <?php \Elementor\Icons_Manager::render_icon($item['love-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="project-one__content-icon">
                                                    <a href="<?php echo esc_url($item['image']['url']); ?>">
                                                        <?php \Elementor\Icons_Manager::render_icon($item['link-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!--Services Page V 2 End-->

<?php endif; ?>