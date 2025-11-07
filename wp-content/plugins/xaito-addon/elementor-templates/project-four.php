<?php if ('layout_four' == $settings['layout_type']) : ?>
       <!--Project Page V 1 Start-->
        <section class="project-page-v-1">
            <div class="project-page-v-1-bg" style="background-image: url(<?php echo esc_url($settings['layout_four_bg_image']['url'])?>)"></div>
            <div class="container">
                <div class="row">
                    <!--Project Two Single Start-->
                    <?php foreach ($settings['layout_four_service_items'] as $index => $item) : ?>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php esc_attr_e($index+1)?>00ms">
                            <div class="project-two__single">
                                <div class="project-two__img-box">
                                    <?php if (!empty($item['image']['url'])) : ?>
                                        <div class="project-two__img">
                                            <img src="<?php echo esc_url($item['image']['url']); ?>" alt="<?php echo xaito_get_thumbnail_alt($item['image']['id']); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="project-two__content">
                                        <div class="project-two__content-left">
                                            <div class="project-two__title-box">
                                                <p class="project-two__subtitle"><?php echo esc_html($item['subtitle']); ?></p>
                                                <h4 class="project-two__title"><a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>"><?php echo esc_html($item['title']); ?></a></h4>
                                            </div>
                                        </div>
                                        <div class="project-two__details">
                                            <?php if (!empty($item['button_label'])) : ?>
                                                <p><?php echo esc_html($item['button_label']); ?></p>
                                            <?php endif; ?>
                                            <div class="project-two__details-box">
                                                <a <?php echo esc_attr(!empty($item['url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['url']['url']); ?>" class="project-two__icon-2"><?php \Elementor\Icons_Manager::render_icon($item['arrow-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a>
                                                <a href="<?php echo esc_url($item['image']['url']); ?>" class="project-two__icon-2">
                                                    <?php \Elementor\Icons_Manager::render_icon($item['zoom-icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!--Project Two Single End-->
                </div>
            </div>
        </section>
        <!--Services Page V 2 End-->
<?php endif; ?>