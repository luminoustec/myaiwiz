<?php if ('layout_one' === $settings['layout_type']) : ?>
    <!-- header start  -->
    <div class="xc-header-banner__section text-center pt-60 pb-100">
        <div class="xc-header-banner__bg">
            <?php xaito_elementor_rendered_image($settings, 'background_image'); ?>
        </div>
        <div class="xc-header-banner__shape">
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
        </div>
        <div class="container">
            <div class="row">
                <div class="xc-header-banner__title-wrapper wow xcfadeUp">
                    <?php
                    if (!empty($settings['section_subtitle'])) :
                        $this->add_inline_editing_attributes('section_subtitle', 'none');
                        xaito_elementor_rendered_content($this, 'section_subtitle', 'xc-header-banner__tag', 'span');
                    endif;
                    ?>
                    <?php if (!empty($settings['section_title'])) : ?>
                        <<?php echo esc_attr($settings['section_title_tag_']); ?> class="xc-header-banner__title dynamic-title cd-headline clip is-full-width">
                            <?php echo wp_kses($settings['section_title'], 'xaito_allowed_tags') ?>
                            <span class="cd-words-wrapper">
                                <?php foreach ($settings['tpying_text'] as $index => $item) : ?>
                                    <?php
                                    $active_class = '';
                                    if (0 == $index) {
                                        $active_class = 'is-visible';
                                    }; ?>
                                    <b class="<?php echo esc_attr($active_class); ?>"><span class="gold-title"><?php echo esc_html($item['text']) ?></span></b>
                                <?php endforeach; ?>
                            </span>
                        </<?php echo esc_attr($settings['section_title_tag_']); ?>>
                    <?php endif; ?>
                    <?php
                    if (!empty($settings['summary'])) :
                        $this->add_inline_editing_attributes('summary', 'none');
                        xaito_elementor_rendered_content($this, 'summary', 'xc-header-banner__info wow xcfadeUp', 'p');
                    endif;
                    ?>
                </div>
                <div class="xc-header-banner__btns">
                    <?php
                    if (!empty($settings['button_label'])) :
                        $this->add_inline_editing_attributes('button_label', 'none');
                        xaito_elementor_rendered_content($this, 'button_label', 'xc-btn xc-black-btn wow xcfadeLeft', 'a', 'button_url');
                    endif;
                    ?>
                    <span class="xc-spt"><?php echo esc_attr__('OR', 'xaito-addon') ?></span>
                    <?php if (!empty($settings['button_two_label'])) : ?>
                        <a <?php echo esc_attr(!empty($settings['button_two_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($settings['button_two_url']['url']); ?>" class="xc-border-btn wow xcfadeRight"><span><?php xaito_elementor_rendered_image($settings, 'btn_shape'); ?></span>
                            <?php echo esc_html($settings['button_two_label']); ?></a>
                    <?php endif; ?>
                </div>

                <?php
                if (!empty($settings['summary_two'])) :
                    $this->add_inline_editing_attributes('summary_two', 'none');
                    xaito_elementor_rendered_content($this, 'summary_two', 'xc-note wow xcfadeUp', 'p');
                endif;
                ?>
            </div>
            <div class="row">
                <div class="xc-header-banner__img w-img p-relative wow xcfadeUp">
                    <?php xaito_elementor_rendered_image($settings, 'banner_img'); ?>
                    <div class="xc-header-banner__video xc-video-1">
                        <a class="xc-popup-video" href="<?php echo esc_url($settings['video_url']['url']); ?>"><i class="fa-solid fa-play"></i>
                            <i class="ripple"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end  -->

<?php endif; ?>