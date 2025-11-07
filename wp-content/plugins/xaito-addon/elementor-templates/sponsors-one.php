<?php if ('layout_one' == $settings['layout_type']) : ?>
    <!-- brand one start  -->
    <div class="xc-brand-one__section mb-90">
        <div class="container">
            <div class="xc-brand-one__title-wrapper text-center mb-60">
                <h3 class="xc-brand-one__count xc-count-box">
                    <span class="xc-count-text" data-speed="1500" data-stop="<?php echo esc_attr($settings['counter']); ?>"></span><?php echo esc_attr($settings['counter_after']); ?>
                </h3>
                <?php
                if (!empty($settings['section_title'])) :
                    $this->add_inline_editing_attributes('section_title', 'none');
                    xaito_elementor_rendered_content($this, 'section_title', 'xc-brand-one__title wow xcfadeUp', $settings['section_title_tag_']);
                endif;
                ?>
            </div>
            <div class="xc-brand-one__wrapper">
                <div class="row col-cols-2 row-cols-md-3 row-cols-lg-5 row-cols-xl-5">
                    <?php foreach ($settings['sponsor_images'] as $item) :  ?>
                        <div class="col">
                            <div class="xc-brand-one__item">
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
            </div>
        </div>
    </div>
    <!-- brand one end  -->

<?php endif; ?>