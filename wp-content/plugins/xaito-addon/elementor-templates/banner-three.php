<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- cta one start -->
    <div class="xc-cta-two__section wow xcfadeUp">
        <div class="container">
            <div class="xc-cta-two__inner theme-bg p-relative z-1 include-bg" data-background="
            <?php echo esc_url($settings['shape_three']['url']) ?>">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="xc-cta-two__content">
                            <div class="xc-cta-two__icon">
                                <?php xaito_elementor_rendered_image($settings, 'layout_three_img'); ?>
                            </div>
                            <div class="xc-cta-two__title-wraper">
                                <?php
                                if (!empty($settings['layout_three__title'])) :
                                    $this->add_inline_editing_attributes('layout_three__title', 'none');
                                    xaito_elementor_rendered_content($this, 'layout_three__title', 'xc-cta-two__title', 'h3');
                                endif;
                                ?>
                                <?php
                                if (!empty($settings['layout_three__info'])) :
                                    $this->add_inline_editing_attributes('layout_three__info', 'none');
                                    xaito_elementor_rendered_content($this, 'layout_three__info', '', 'p');
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="xc-cta-two__btn mb-10">
                            <?php
                            if (!empty($settings['layout_thre_button_label'])) :
                                $this->add_inline_editing_attributes('layout_thre_button_label', 'none');
                                xaito_elementor_rendered_content($this, 'layout_thre_button_label', 'xc-btn xc-black-btn', 'a', 'layout_three_url');
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cta one end  -->
<?php endif; ?>