<?php if ('layout_two' === $settings['layout_type']) : ?>
    <div class="xc-header-banner__section text-center pt-150 overflow-hidden d-fl" data-background="<?php echo esc_attr($settings['background_image']['url']) ?>">
        <?php if (!empty($settings['shape_five'])) : ?>
            <div class="xc-header-banner__two-shape">
                <?php xaito_elementor_rendered_image($settings, 'shape_five'); ?>
            </div>
        <?php endif; ?>
        <div class="xc-header-banner__two-avata">
            <?php if (!empty($settings['shape_one'])) : ?>
                <div class="avata-1">
                    <?php xaito_elementor_rendered_image($settings, 'shape_one'); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['shape_two'])) : ?>
                <div class="avata-2">
                    <?php xaito_elementor_rendered_image($settings, 'shape_two'); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['shape_three'])) : ?>
                <div class="avata-3">
                    <?php xaito_elementor_rendered_image($settings, 'shape_three'); ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($settings['shape_four'])) : ?>
                <div class="avata-4">
                    <?php xaito_elementor_rendered_image($settings, 'shape_four'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="xc-header-banner__title-wrapper wow xcfadeUp">
                    <span class="xc-header-banner__tag rgb-bg"><i class="fa-regular fa-message-lines"></i>
                        <?php echo esc_html($settings['section_subtitle']) ?></span>
                    <?php
                    if (!empty($settings['section_title'])) :
                        $this->add_inline_editing_attributes('section_title', 'none');
                        xaito_elementor_rendered_content($this, 'section_title', 'xc-header-banner__title dynamic-title', $settings['section_title_tag_']);
                    endif;
                    ?>
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
                </div>
                <?php
                if (!empty($settings['summary_two'])) :
                    $this->add_inline_editing_attributes('summary_two', 'none');
                    xaito_elementor_rendered_content($this, 'summary_two', 'xc-note wow xcfadeUp', 'p');
                endif;
                ?>
            </div>
            <div class="row">
                <div class="xc-header-banner__img style-2 w-img p-relative wow xcfadeUp">
                    <?php xaito_elementor_rendered_image($settings, 'banner_img'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- banner two end  --

<?php endif; ?>