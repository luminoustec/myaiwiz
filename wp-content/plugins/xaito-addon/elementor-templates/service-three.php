<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- xc-service three start  -->
    <div class="xc-service-three__section pb-90">
        <div class="container">
            <?php $topbar_status = $settings['topbar_status']; ?>
            <?php if ('yes' == $topbar_status) : ?>
                <div class="xc-section__title-wrapper wow xcfadeUp text-center mb-60">
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
            <?php endif; ?>
            <div class="row">
                <?php foreach ($settings['service_items'] as $index => $item) : ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-service-three__item wow xcfadeUp" data-background="<?php echo get_theme_file_uri() ?>/assets/img//shapes/service-bg-3.png" data-wow-delay=".1s">
                            <div class="xc-service-three__icon">
                                <span><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
                            </div>
                            <div class="xc-service-three__content">
                                <h3 class="xc-service-three__title"><a <?php echo esc_attr(!empty($item['title_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['title_url']['url']); ?>"><?php echo wp_kses($item['title'],'xaito_allowed_tags'); ?></a></h3>

                                <p><?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php $botoom_status = $settings['bottom_status']; ?>
            <?php if ('yes' == $botoom_status) : ?>
                <div class="row">
                    <div class="xc-service-three__bottom text-center mt-30 mb-30">
                        <h5 class="xc-service-three__bottom-title mb-20 wow fadeInUp"><?php echo wp_kses($settings['section_summary'], 'xaito_allowed_tags'); ?></h5>
                        <div class="xc-service-three__btn wow fadeInUp" data-wow-delay=".3s">
                            <?php
                            if (!empty($settings['button_label'])) :
                                $this->add_inline_editing_attributes('button_label', 'none');
                                xaito_elementor_rendered_content($this, 'button_label', 'xc-btn', 'a', 'button_url');
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- xc-service three end -->


<?php endif; ?>