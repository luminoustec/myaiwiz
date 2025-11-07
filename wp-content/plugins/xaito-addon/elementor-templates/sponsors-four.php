<?php if ('layout_four' == $settings['layout_type']) : ?>
    <!-- xc-sponsor-three start-->
    <div class="xc-sponsor-two__section theme-bg-5 pt-120 pb-90">
        <div class="container">
            <?php
            if (!empty($settings['section_title'])) :
                $this->add_inline_editing_attributes('section_title', 'none');
                xaito_elementor_rendered_content($this, 'section_title', 'xc-sponsor-two__title text-center', $settings['section_title_tag_']);
            endif;
            ?>
            <div class="row align-items-center">
                <?php foreach ($settings['sponsor_images'] as $index => $item) :  ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="xc-sponsor-two__item" data-tilt="">
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
    <!-- xc-sponsor-three end-->
<?php endif; ?>