<?php if ('layout_three' == $settings['layout_type']) : ?>
    <!-- funfact one start  -->
    <div class="xc-funfact-one__section theme-bg-4 pt-120 pb-120">
        <div class="container">
            <div class="row row-cols-3 row-cols-md-4 row-cols-xl-auto justify-content-center">
                <?php foreach ($settings['sponsor_images'] as $index => $item) :  ?>
                    <div class="col" data-tilt="">
                        <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="<?php echo esc_attr($index + 1) ?>00ms">
                            <?php if (!empty($item['link']['url'])) : ?>
                                <a href="<?php echo esc_url($item['link']['url']); ?>">
                                    <?php echo wp_get_attachment_image($item['image']['id'], 'xaito_brand_logo_230X80'); ?>
                                </a>
                            <?php else : ?>
                                <?php echo wp_get_attachment_image($item['image']['id'], 'xaito_brand_logo_230X80'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="xc-section__title-wrapper text-center wow xcfadeUp">
                <?php
                if (!empty($settings['section_title'])) :
                    $this->add_inline_editing_attributes('section_title', 'none');
                    xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow', $settings['section_title_tag_']);
                endif;
                ?>
                <?php
                if (!empty($settings['section_info'])) :
                    $this->add_inline_editing_attributes('section_info', 'none');
                    xaito_elementor_rendered_content($this, 'section_info', 'mb-20', 'p');
                endif;
                ?>
                <div class="xc-funfact-btn">
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
    <!-- funfact one end  -->

<?php endif; ?>