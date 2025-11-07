<?php if ('layout_four' === $settings['layout_type']) : ?>
    
    <!-- banner area start -->
    <div class="xc-header-banner-three__section fix">
        <div class="xc-header-banner-three__shapes">
            <?php if (!empty($settings['shape_one'])) : ?>
                <div class="shape-1">
                    <?php xaito_elementor_rendered_image($settings, 'shape_one'); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['shape_two'])) : ?>
                <div class="shape-2">
                    <?php xaito_elementor_rendered_image($settings, 'shape_two'); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['shape_three'])) : ?>
                <div class="shape-3">
                    <?php xaito_elementor_rendered_image($settings, 'shape_three'); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['shape_four'])) : ?>
                <div class="shape-4">
                    <?php xaito_elementor_rendered_image($settings, 'shape_four'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="xc-about-one__right ">
                        <div class="xc-section__title-wrapper">
                            <?php
                            if (!empty($settings['section_subtitle'])) :
                                $this->add_inline_editing_attributes('section_subtitle', 'none');
                                xaito_elementor_rendered_content($this, 'section_subtitle', 'xc-section__subtitle wow xcfadeUp', 'span');
                            endif;
                            ?>
                            <?php
                            if (!empty($settings['section_title'])) :
                                $this->add_inline_editing_attributes('section_title', 'none');
                                xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow xcfadeUp', $settings['section_title_tag_']);
                            endif;
                            ?>
                        </div>
                        <div class="xc-about-one__feature">
                            <ul class="xc-about-one__feature-list list-unstyled wow xcfadeUp">
                                <?php foreach ($settings['check_list'] as $index => $item) : ?>
                                    <li>
                                        <p><span class="xc-icon"><i class="fa-solid fa-check"></i></span><?php echo esc_html($item['title']) ?></p>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="xc-about-one__btn mt-40 wow xcfadeUp">
                            <?php
                            if (!empty($settings['button_label'])) :
                                $this->add_inline_editing_attributes('button_label', 'none');
                                xaito_elementor_rendered_content($this, 'button_label', 'xc-btn', 'a', 'button_url');
                            endif;
                            ?>
                            <p class="mt-10"><?php echo esc_html($settings['summary']) ?></p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="xc-header-banner-three__right">
                        <div class="xc-header-banner-three__img">
                            <?php xaito_elementor_rendered_image($settings, 'banner_img'); ?>
                            <div class="xc-header-banner-three__video xc-video-1">
                                <a class="xc-popup-video" href="<?php echo esc_url($settings['video_url']['url']) ?>"><i class="fa-solid fa-play"></i> </a>
                                <p><?php echo esc_html($settings['video_text']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

<?php endif; ?>