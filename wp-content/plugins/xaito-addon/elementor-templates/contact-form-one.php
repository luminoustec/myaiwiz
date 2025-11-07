<?php if ('layout_one' === $settings['layout_type']) : ?>

    <!-- cta four start -->
    <div class="xc-cta-four__section pt-150">
        <div class="container">
            <div class="row">
                <?php foreach ($settings['cta_items'] as $item) : ?>
                    <div class="col-lg-4 col-md-6 wow xcfadeUp">
                        <div class="xc-cta-four__box">
                            <div class="xc-cta-four__icon">
                                <span>
                                    <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                                </span>
                            </div>
                            <h3 class="xc-cta-four__title"><?php esc_html_e($item['title']) ?></h3>
                            <p>
                                <?php echo wp_kses($item['info'], 'xaito_allowed_tags'); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- cta four start -->


    <div class="xc-contact-page__section pt-50 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="xc-section__title-wrapper mb-30">
                        <h3 class="xc-section__title sm-title wow"><?php echo wp_kses($settings['sec_title'], 'xaito_allowed_tags'); ?></h3>
                        <div class="xc-contact-img mt-40 mb-40">
                            <?php xaito_elementor_rendered_image($settings, 'image_one'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="xc-contact-page__form">
                        <?php if (!empty($settings['select_wpcf7_form'])) : ?>
                            <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['select_wpcf7_form'] . '" ]'))); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?> <!--Address Start-->