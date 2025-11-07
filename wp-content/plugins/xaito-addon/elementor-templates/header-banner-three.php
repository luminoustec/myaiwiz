<?php if ('layout_three' === $settings['layout_type']) : ?>
    <!-- header start  -->
    <div class="xc-header-banner-2__section pb-120 include-bg" data-background="<?php echo esc_attr($settings['background_image']['url']) ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="xc-header-banner-2__title-wrapper mb-60 wow xcfadeUp">
                        <?php
                        if (!empty($settings['section_title'])) :
                            $this->add_inline_editing_attributes('section_title', 'none');
                            xaito_elementor_rendered_content($this, 'section_title', 'xc-header-banner-2__title', $settings['section_title_tag_']);
                        endif;
                        ?>
                        <?php if (!empty($settings['shape_one'])) : ?>
                            <div class="line-shape">
                                <?php xaito_elementor_rendered_image($settings, 'shape_one'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="xc-header-banner-2__btns mb-40 d-md-flex align-items-center wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-header-banner-2__btn-1">
                            <?php
                            if (!empty($settings['button_label'])) :
                                $this->add_inline_editing_attributes('button_label', 'none');
                                xaito_elementor_rendered_content($this, 'button_label', 'xc-btn', 'a', 'button_url');
                            endif;
                            ?>
                        </div>
                        <div class="xc-header-banner-btn-video">
                            <a class="xc-popup-video xc-video-btn" href="<?php echo esc_url($settings['video_url']['url']); ?>"><i class="fas fa-play"></i> <?php echo esc_html($settings['video_text']) ?> </a>
                        </div>
                    </div>
                    <div class="xc-header-banner-2__bottom d-md-flex align-items-center wow xcfadeUp" data-wow-delay="300ms">
                        <?php xaito_elementor_rendered_image($settings, 'banner_img_two'); ?>
                        <?php
                        if (!empty($settings['summary'])) :
                            $this->add_inline_editing_attributes('summary', 'none');
                            xaito_elementor_rendered_content($this, 'summary', 'xc-header-banner__info wow xcfadeUp', 'p');
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="xc-header-banner-2__right wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-header-banner-2__img">
                            <div data-tilt="">
                                <?php xaito_elementor_rendered_image($settings, 'banner_img'); ?>
                            </div>
                            <?php if (!empty($settings['shape_two'])) : ?>
                                <div class="dot-shape">
                                    <?php xaito_elementor_rendered_image($settings, 'shape_two'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- header end  -->

<?php endif; ?>