<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="service-details__brochures-box project-details__sidebar-single">
        <h3 class="service-details__service-title"><?php esc_html_e($settings['sidebar-title'], 'xaito-addon') ?></h3>
        <ul class="service-details__brochures-list list-unstyled ml-0">
        <?php foreach ($settings['download-list'] as $item) : ?>
            <li><a <?php echo esc_attr(!empty($item['file-link']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($item['file-link']['url']); ?>"><?php esc_html_e($item['file-name']) ?> <i><?php esc_html_e($item['file-size']) ?></i> <?php \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?></a></li>
        <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>