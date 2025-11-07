<?php if ('layout_two' === $settings['layout_type']) : ?>

    <section class="address d-none xc-none">
        <div class="container">
            <div class="row">
                <?php foreach ($settings['cta_items'] as $item) : ?>
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="address__single">
                            <div class="address__icon">
                                <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                            </div>
                            <div class="address__content">
                                <h4 class="address__title"><?php esc_html_e($item['title']) ?></h4>
                                <div class="address__phone-email">
                                    <p><?php echo wp_kses($item['info'], 'xaito_allowed_tags'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Address Single End-->
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!--Address End-->

    <!--Contact Form Start-->
    <section class="contact-form-box d-none xc-none">
        <div class="container">
            <?php if (!empty($settings['sec_title']) || !empty($settings['sec_info'])) : ?>
                <div class="contact-form__title-box">
                    <span><?php echo wp_kses($settings['sec_info'], 'xaito_allowed_tags'); ?></span>
                    <h3><?php echo wp_kses($settings['sec_title'], 'xaito_allowed_tags'); ?></h3>

                </div>
            <?php endif; ?>
            <?php if (!empty($settings['select_wpcf7_form'])) : ?>
                <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['select_wpcf7_form'] . '" ]'))); ?>
            <?php endif; ?>
        </div>
    </section>
    <!--Contact Form End-->

    <!-- cta  one start  -->
    <section class="xc-cta-one__section pt-50 pb-50 p-relative z-index-1" data-background="assets/img/backgroud/cta-bg-1-1.jpg">
        <div class="xc-cta-one__form-bg include-bg" data-background="assets/img/backgroud/cta-bg-1-2.jpg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <?php if (!empty($settings['sec_title']) || !empty($settings['sec_info'])) : ?>
                        <div class="xc-section__title-wrapper mb-30">
                            <<?php echo esc_attr($settings['section_title_tag_']) ?> class="xc-section__title"><?php echo wp_kses($settings['sec_title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_tag_']) ?>>

                            <p class="mt-25"><?php echo wp_kses($settings['sec_info'], 'xaito_allowed_tags'); ?>
                            </p>
                        </div>
                    <?php endif; ?>
                    <div class="xc-cta-one__feature d-md-flex">
                        <?php foreach ($settings['cta_items'] as $item) : ?>
                            <div class="xc-cta__feature-item d-flex align-items-center mb-30">
                                <span class="xc-icon"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
                                <p class="count-box mb-0"><span class="count-text" data-stop="<?php echo esc_attr($item['count_number']) ?>" data-speed="1500"></span><?php esc_html_e($item['count_after']) ?><span class="count-title"><?php esc_html_e($item['title']) ?></span></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="xc-cta-one__call d-md-flex">
                        <span class="xc-icon"><i class="fa-solid fa-phone"></i></span>
                        <div class="xc-cta-one__call-info">
                            <p>Have Questions? Call Us</p>
                            <a href="tel:1123456789">+1 (800) 123 456 789</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="xc-cta-one__form pt-120 pb-70 ml-100 include-bg" data-background="assets/img/backgroud/cta-bg-1-3.png">
                        <h3 class="xc-cta-one__form-title text-white mb-50">Register Now <br> for discount</h3>
                        <?php if (!empty($settings['select_wpcf7_form'])) : ?>
                            <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['select_wpcf7_form'] . '" ]'))); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta one start -->

<?php endif; ?> <!--Address Start-->