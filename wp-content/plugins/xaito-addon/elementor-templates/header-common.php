<?php $search_status = $settings['search_status']; ?>
<div class="xc-mobile-nav__wrapper">
    <div class="xc-mobile-nav__overlay xc-mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="xc-mobile-nav__content">
        <span class="xc-mobile-nav__close xc-mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $xaito_logo_size = get_theme_mod('header_logo_width', 133);
                $xaito_custom_logo_id = get_theme_mod('custom_logo');
                $xaito_logo = wp_get_attachment_image_src($xaito_custom_logo_id, 'full');
                if (has_custom_logo()) {
                    echo '<img width="' . esc_attr($xaito_logo_size) . '" src="' . esc_url($xaito_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                } else {
                    echo '<h1>' . esc_html(get_bloginfo('name')) . '</h1>';
                }
                ?>
            </a>
        </div>
        <!-- /.logo-box -->
        <div class="xc-mobile-nav__menu"></div>
        <!-- /.mobile-nav__container -->

        <ul class="xc-mobile-nav__contact list-unstyled">
            <?php if (!empty($settings['mobile_menu_email'])) : ?>
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo esc_attr($settings['mobile_menu_email']); ?>"><?php echo esc_html($settings['mobile_menu_email']); ?></a>
                </li>
            <?php endif; ?>
            <?php if (!empty($settings['mobile_menu_phone'])) : ?>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:<?php echo esc_attr(str_replace(' ', '', $settings['mobile_menu_phone'])); ?>"><?php echo esc_html($settings['mobile_menu_phone']); ?></a>
                </li>
            <?php endif; ?>
        </ul><!-- /.mobile-nav__contact -->
        <div class="xc-mobile-nav__top">
            <div class="xc-mobile-nav__social">
                <?php foreach ($settings['mobile_menu_social_icons'] as $social_icon) : ?>
                    <a <?php echo esc_attr(!empty($social_icon['social_url']['is_external']) ? 'target=_blank' : ' '); ?> class="icon-svg" href="<?php echo esc_url($social_icon['social_url']['url']); ?>">
                        <?php \Elementor\Icons_Manager::render_icon($social_icon['social_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'span'); ?>
                    </a>
                <?php endforeach; ?>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<?php if ('yes' == $search_status) : ?>
    <!-- search  -->
    <div class="xc-search-popup open">
        <div class="xc-search-popup__overlay"></div>
        <!-- /.search-popup__overlay -->
        <div class="xc-search-popup__content">
            <form action="<?php echo esc_url(home_url('/')); ?>">
                <input type="text" id="search" name="s" placeholder="<?php echo esc_attr_e('Search Here...', 'xaito-addon'); ?>" />
                <button type="submit" aria-label="search submit" class="xc-search-popup-btn">
                    <span><i class="fa-light fa-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

<?php endif; ?>



<?php $xaito_back_to_top_status = get_theme_mod('scroll_to_top', false); ?>
<?php if ('yes' === $xaito_back_to_top_status) : ?>
    <div class="xc-back-to-top-wrapper">
        <button id="xc_back-to-top" type="button" class="xc-back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
<?php endif; ?>