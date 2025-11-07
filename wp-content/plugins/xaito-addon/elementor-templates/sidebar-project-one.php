<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="xc-service-details__right">
        <div class="xc-service-details__right-content">
            <h3 class="xc-service-details__sidebar-title"><?php echo wp_kses($settings['sec-title'], 'xaito_allowed_tags'); ?></h3>
            <p><?php echo wp_kses($settings['sec-info'], 'xaito_allowed_tags'); ?></p>
        </div>
        <div class="xc-service-details__meta flex-wrap mb-40">
            <?php foreach ($settings['tab_items'] as $item) : ?>
                <div class="xc-service-details__meta-item d-flex align-items-start">
                    <div class="xc-service-details__meta-icon">
                        <span class="xc-icon">
                            <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                        </span>
                    </div>
                    <div class="xc-service-details__meta-content">
                        <h5><?php echo esc_html__($item['title'], 'xaito-addmon'); ?></h5>
                        <span><?php echo wp_kses($item['info'], 'xaito_allowed_tags'); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="xc-service-details__info-btn">
            <a href="https://xoomcoders.com/wp/xaito/contact" class="xc-btn w-100 text-center">Contact Us</a>
        </div>
    </div>
<?php endif ?>