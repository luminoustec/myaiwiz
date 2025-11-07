<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="sidebar__call-box project-details__sidebar-single">
        <div class="sidebar__call-bg" style="background-image: url(<?php echo esc_attr($settings['image']['url']) ?>);">
        </div>
        <div class="sideber__call-content">
            <h3 class="sideber__call-title"><?php echo wp_kses($settings['title'], 'xaito_allowed_tags'); ?>
            </h3>
            <div class="sideber__call-number">
                <p><?php echo wp_kses($settings['info_text'], 'xaito_allowed_tags'); ?></p>
                <h3><?php echo wp_kses($settings['info_text_two'], 'xaito_allowed_tags'); ?></h3>
            </div>
            <?php if (!empty($settings['button_label'])) : ?>
                <div class="sideber__call-button">
                    <div class="sideber__call-button-shape"></div>
                    <a <?php echo esc_attr(!empty($settings['button_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($settings['button_url']['url']); ?>"><i class="icon-right-arrow1"></i><?php echo esc_html($settings['button_label']); ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php endif; ?>