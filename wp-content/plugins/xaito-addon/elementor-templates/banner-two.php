<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- cta one start -->
    <div class="xc-cta-three__section pb-90 wow xcfadeUp">
        <div class="container">
            <div class="xc-cta-three__inner">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="xc-cta-three__img mb-30 d-flex align-items-center">
                            <div data-tilt="">
                                <?php xaito_elementor_rendered_image($settings, 'layout_two_img_one'); ?>
                            </div>
                            <div class="xc-cta-three__img-sm">
                                <?php xaito_elementor_rendered_image($settings, 'layout_two_img_two'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="xc-cta-three__content text-center mb-30">
                            <div class="xc-cta-three__title-wraper">
                                <?php
                                if (!empty($settings['layout_three_title'])) :
                                    $this->add_inline_editing_attributes('layout_three_title', 'none');
                                    xaito_elementor_rendered_content($this, 'layout_three_title', 'xc-cta-three__title', 'h2');
                                endif;
                                ?>
                                <?php
                                if (!empty($settings['layout_three_info'])) :
                                    $this->add_inline_editing_attributes('layout_three_info', 'none');
                                    xaito_elementor_rendered_content($this, 'layout_three_info', '', 'p');
                                endif;
                                ?>
                            </div>
                            <div class="xc-cta-three__btn mb-10">
                                <?php
                                if (!empty($settings['layout_two_button_label'])) :
                                    $this->add_inline_editing_attributes('layout_two_button_label', 'none');
                                    xaito_elementor_rendered_content($this, 'layout_two_button_label', 'xc-btn', 'a', 'layout_two_btn_url');
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="xc-cta-three__img-right mb-30 d-flex align-items-center">
                            <div class="xc-cta-three__img-sm-2">
                                <?php xaito_elementor_rendered_image($settings, 'layout_two_img_three'); ?>
                            </div>
                            <div data-tilt="">
                                <?php xaito_elementor_rendered_image($settings, 'layout_two_img_four'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cta one end  -->

<?php endif; ?>