<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- cta one start -->
    <div class="xc-cta-one__section wow xcfadeUp">
        <div class="container">
            <div class="xc-cta-one__inner theme-bg-2 p-relative z-1">
                <div class="xc-cta-one__shape">
                    <?php xaito_elementor_rendered_image($settings, 'shape_one'); ?>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="xc-cta-one__content">
                            <div class="xc-cta-one__title-wrapper">
                                <span class="xc-cta-one__tagline"> <?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?><?php echo esc_html($settings['subtitle']); ?></span>
                                <?php
                                if (!empty($settings['title'])) :
                                    $this->add_inline_editing_attributes('title', 'none');
                                    xaito_elementor_rendered_content($this, 'title', 'xc-cta-one__title', 'h3');
                                endif;
                                ?>
                            </div>
                            <div class="xc-cta-one__checklist">
                                <?php foreach ($settings['banner_list'] as $index => $item) : ?>
                                    <span class="xc-cta-one__checklist"> <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?><?php echo esc_html($item['title']); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="xc-cta-one__btn">
                            <?php
                            if (!empty($settings['button_label'])) :
                                $this->add_inline_editing_attributes('button_label', 'none');
                                xaito_elementor_rendered_content($this, 'button_label', 'xc-btn', 'a');
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