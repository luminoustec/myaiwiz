<?php if ('layout_one' == $settings['layout_type']) : ?>
    <div class="service-details__sidebar-single service-details__service-list-box">
        <?php if (!empty($settings['sidebar-title'])) : ?>
            <h3 class="service-details__service-title"><?php esc_html_e($settings['sidebar-title'], 'xaito-addon') ?></h3>
        <?php endif; ?>
        <?php foreach ($settings['nav_menus'] as $nav_menu) : ?>
            <?php wp_nav_menu(array(
                'menu' => $nav_menu['nav_menu'],
                'menu_class' => 'service-details__service-list list-unstyled ml-0',
                'container'  => '',
                'link_before'      => '<span class="icon-right-arrow1"></span>'
            )); ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>