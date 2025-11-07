<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!-- service two start  -->
    <div class="xc-service-two__section" data-background="<?php echo esc_url($settings['bg_shape']['url']); ?>">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
                <?php
                if (!empty($settings['section_subtitle'])) :
                    $this->add_inline_editing_attributes('section_subtitle', 'none');
                    xaito_elementor_rendered_content($this, 'section_subtitle', 'xc-section__subtitle style-2', 'span');
                endif;
                ?>
                <?php
                if (!empty($settings['section_title'])) :
                    $this->add_inline_editing_attributes('section_title', 'none');
                    xaito_elementor_rendered_content($this, 'section_title', 'xc-section__title wow', $settings['section_title_tag_']);
                endif;
                ?>
                <?php
                if (!empty($settings['section_summary'])) :
                    $this->add_inline_editing_attributes('section_summary', 'none');
                    xaito_elementor_rendered_content($this, 'section_summary', 'mb-20', 'p');
                endif;
                ?>
            </div>
            <div class="row gx-0">
                <?php foreach ($settings['service_items'] as $index => $item) : ?>
                    <div class="col-lg-4">
                        <div class="xc-service-two__item">
                            <span class="xc-service-two__icon item-<?php echo esc_html($index) ?>" data-background="<?php echo get_theme_file_uri() ?>/assets/img/shapes/service-icon-shape.png"><?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></span>
                            <h3 class="xc-service-two__title"><a <?php echo esc_attr(!empty($item['title_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['title_url']['url']); ?>"><?php echo esc_html($item['title']); ?></h3>
                            <p><?php echo wp_kses($item['content'], 'xaito_allowed_tags'); ?> </p>
                            <a class="xc-service-two__btn mb-10" <?php echo esc_attr(!empty($item['btn_one_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['btn_one_url']['url']); ?> "><?php echo esc_html($item['btn_one_text']); ?>
                                <i class="fa-regular fa-arrow-right"></i> </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="xc-service-two__bottom text-center mt-40 mb-40">
                <p><?php echo wp_kses($settings['content_two'], 'xaito_allowed_tags'); ?> </p>
            </div>
        </div>
    </div>
    <!-- service two end  -->

<?php endif; ?>