<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- service one start  -->
    <section class="xc-service-one__section">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-120  wow xcfadeUp">
                <?php
                if (!empty($settings['section_subtitle'])) :
                    $this->add_inline_editing_attributes('section_subtitle', 'none');
                    xaito_elementor_rendered_content($this, 'section_subtitle', 'xc-section__subtitle', 'span');
                endif;
                ?>
                <?php
                if (!empty($settings['section_title'])) :
                    $this->add_inline_editing_attributes('section_title', 'none');
                    xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow', $settings['section_title_tag_']);
                endif;
                ?>
            </div>
            <div class="xc-service-one__wrapper">
                <div class="row">
                    <?php foreach ($settings['service_items'] as $index => $item) : ?>
                        <?php $feature = $item['feature_status'] == "yes" ? " xc-featured" : '';
                        ?>
                        <div class="col-lg-4 col-md-6 wow xcfadeUp" data-wow-delay=".<?php echo esc_attr($index + 1) ?>s">
                            <div class="xc-service-one__box <?php echo esc_attr($feature) ?>">
                                <?php if ("yes" == $item['feature_status']) : ?>
                                    <div class="xc-shape-1"><img src="<?php echo get_theme_file_uri() ?>/assets/img/shapes/sv-8-blur.png" alt="<?php echo esc_attr("shape") ?>"></div>
                                    <div class="xc-shape-2 wow xcfadeUp"><img src="<?php echo get_theme_file_uri() ?>/assets/img/shapes/sv-8-1.png" alt="<?php echo esc_attr("shape") ?>">
                                    </div>
                                    <div class="xc-shape-3 wow xcfadeUp"><img src="<?php echo get_theme_file_uri() ?>/assets/img/shapes/sv-8-1.png" alt="<?php echo esc_attr("shape") ?>">
                                    </div>
                                <?php endif; ?>
                                <div class="xc-service-one__icon">
                                    <span>
                                        <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?>
                                        <?php xaito_elementor_rendered_image($item, 'icon_image'); ?>
                                    </span>
                                </div>
                                <h3 class="xc-service-one__title"><a <?php echo esc_attr(!empty($item['title_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['title_url']['url']); ?>"><?php echo esc_html($item['title']); ?></a>
                                </h3>
                                <p><?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?> </p>
                                <?php if ("no" == $item['feature_status']) : ?>
                                    <a class="xc-service-one__btn mb-10" <?php echo esc_attr(!empty($item['btn_one_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['btn_one_url']['url']); ?> "><?php echo esc_html($item['btn_one_text']); ?>
                                        <i class="fa-regular fa-arrow-right"></i> </a>
                                    <a class="xc-service-one__btn" <?php echo esc_attr(!empty($item['btn_two_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['btn_two_url']['url']); ?>"><?php echo esc_html($item['btn_two_text']); ?><i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ("yes" == $item['feature_status']) : ?>
                                    <a class="xc-service-one__btn xc-btn" <?php echo esc_attr(!empty($item['btn_one_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['btn_one_url']['url']); ?>"><?php echo esc_html($item['btn_one_text']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- service one end  -->

<?php endif; ?>