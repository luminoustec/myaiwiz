<?php

namespace Xoomcoders\Xaito\Frontend;

/**
 * Shortcode handler class
 */
class Shortcodes
{

    /**
     * Initializes the class
     */
    function __construct()
    {
        add_shortcode('xaito-footer', [$this, 'render_footer_shortcode']);
        add_shortcode('xaito-header', [$this, 'render_header_shortcode']);
        add_shortcode('xaito-service', [$this, 'render_service_shortcode']);
        add_shortcode('xaito-service-two', [$this, 'render_service_two_shortcode']);
        add_shortcode('xaito-pricing', [$this, 'render_pricing_shortcode']);
        add_shortcode('xaito-static-footer', [$this, 'render_static_footer_shortcode']);
        add_shortcode('xaito-static-header', [$this, 'render_static_header_shortcode']);
    }

    /**
     * Shortcode handler class
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_footer_shortcode($atts, $content = '')
    {
        // the query
        $query_args = array(
            'p' => $atts['id'],
            'post_type' => 'footer',
        );
        $post_query = new \WP_Query($query_args); ?>

        <?php if ($post_query->have_posts()) : ?>
            <!-- the loop -->
            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html__('Sorry, no posts matched your criteria.', 'xaito-addon'); ?></p>
        <?php endif;
    }

    /**
     * shortcode handler for header
     * @param array $atts
     * @param string $content
     */
    public function render_header_shortcode($atts, $content = '')
    {
        // the query
        $query_args = array(
            'p' => $atts['id'],
            'post_type' => 'header',
        );
        $post_query = new \WP_Query($query_args); ?>

        <?php if ($post_query->have_posts()) : ?>
            <!-- the loop -->
            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <!-- end of the loop -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html__('Sorry, no posts matched your criteria.', 'xaito-addon'); ?></p>
        <?php endif;
    }

    /**
     * Shortcode for service post one
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_service_shortcode($atts, $content = '')
    {
        ob_start(); ?>

        <?php
        $post_query = new \WP_Query(array(
            'post_type' => 'service',
            'posts_per_page' => $atts['post_count'],
            'tax_query' => array(
                array(
                    'taxonomy' => 'service_cat',
                    'field' => 'term_id',
                    'terms' => $atts['select_category']
                )
            )
        ));
        while ($post_query->have_posts()) :
            $post_query->the_post(); ?>
            <!--Service Block-->
            <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="bottom-curve"></div>
                    <?php
                    $xaito_service_fontawesome = '';
                    if ('yes' == get_post_meta(get_the_ID(), 'xaito_is_fontawesome', true)) {
                        $xaito_service_fontawesome = get_post_meta(get_the_ID(), 'xaito_fontawesome_type', true);
                    }
                    ?>
                    <div class="icon-box"><span class="<?php echo esc_attr(get_post_meta(get_the_iD(), 'xaito_select_service_icon', true) . ' ' . $xaito_service_fontawesome); ?>"></span></div>
                    <h6><a href="<?php the_permalink(); ?>"><?php echo wp_kses(get_the_title(), 'xaito_allowed_tags'); ?></a></h6>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();

        return ob_get_clean();
    }

    /**
     * Shortcode for service post two
     *
     * @param  array $atts
     * @param  string $content
     *
     * @return string
     */
    public function render_service_two_shortcode($atts, $content = '')
    {
        ob_start();
        $post_query = new \WP_Query(array(
            'post_type' => 'service',
            'posts_per_page' => $atts['post_count'],
            'tax_query' => array(
                array(
                    'taxonomy' => 'service_cat',
                    'field' => 'term_id',
                    'terms' => $atts['select_category']
                )
            )
        ));
        while ($post_query->have_posts()) :
            $post_query->the_post(); ?>
            <!--Service Block-->
            <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="bottom-curve"></div>
                    <?php
                    $xaito_service_fontawesome = '';
                    if ('yes' == get_post_meta(get_the_ID(), 'xaito_is_fontawesome', true)) {
                        $xaito_service_fontawesome = get_post_meta(get_the_ID(), 'xaito_fontawesome_type', true);
                    }
                    ?>
                    <div class="icon-box"><span class="<?php echo esc_attr(get_post_meta(get_the_iD(), 'xaito_select_service_icon', true) . ' ' . $xaito_service_fontawesome); ?>"></span></div>
                    <h5><a href="<?php the_permalink(); ?>"><?php echo wp_kses(get_the_title(), 'xaito_allowed_tags'); ?></a></h5>
                    <div class="text"><?php echo wp_kses(xaito_excerpt(10), 'xaito_allowed_tags'); ?></div>
                    <div class="link-box"><a href="<?php the_permalink(); ?>"><span class="fa fa-angle-right"></span></a></div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
        return ob_get_clean();
    }
    /**
     * Shortcode For pricing post one
     *
     * @param array $atts
     * @param string $content
     *
     * @return string
     **/
    public function render_pricing_shortcode($atts, $content = "")
    {
        ob_start();

        $post_query = new \WP_Query(array(
            'post_type' => 'pricing',
            'posts_per_page' => $atts['post_count'],
            'tax_query' => array(
                array(
                    'taxonomy' => 'pricing_cat',
                    'field' => 'term_id',
                    'terms' => $atts['select_category']
                )
            )
        ));
        while ($post_query->have_posts()) :
            $post_query->the_post(); ?>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="pricing-card">
                    <div class="pricing-card__icon">
                        <?php
                        $xaito_pricing_fontawesome = '';
                        if ('yes' == get_post_meta(get_the_ID(), 'xaito_is_fontawesome', true)) {
                            $xaito_pricing_fontawesome = get_post_meta(get_the_ID(), 'xaito_fontawesome_type', true);
                        }
                        ?>
                        <i class="<?php echo esc_attr(get_post_meta(get_the_ID(), "xaito_pricing_icon", true) . ' ' . $xaito_pricing_fontawesome); ?>"></i>
                    </div><!-- /.pricing-card__icon -->
                    <p class="pricing-card__name"><?php the_title(); ?></p>
                    <h3 class="pricing-card__amount">
                        <?php echo esc_html(get_post_meta(get_the_ID(), "xaito_pricing_currency", true)); ?>
                        <?php echo esc_html(get_post_meta(get_the_ID(), "xaito_pricing_renewal_fee", true)); ?>
                    </h3><!-- /.pricing-card__amount -->
                    <div class="pricing-card__bottom">
                        <?php $pricing_feature = get_post_meta(get_the_ID(), 'xaito_plan_options', true); ?>
                        <ul class="list-unstyled pricing-card__list">
                            <?php foreach ($pricing_feature as $feature) : ?>
                                <li>
                                    <?php $feature_tick_icon =  !empty($feature['xaito_feature_status']) && 'on' == $feature['xaito_feature_status'] ? "flaticon-check" : "flaticon-delete unavailable" ?>
                                    <i class="<?php echo esc_attr($feature_tick_icon); ?>"></i>
                                    <?php echo esc_html($feature['xaito_feature_name']); ?>

                                </li>
                            <?php endforeach; ?>
                        </ul><!-- /.list-unstyled pricing-card__list -->
                        <a class="theme-btn btn-style-one" href="<?php echo esc_url(get_post_meta(get_the_ID(), 'xaito_pricing_btn_url', true)); ?>">
                            <i class="btn-curve"></i>
                            <span class="btn-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'xaito_pricing_btn_label', true)); ?></span>
                        </a>
                    </div><!-- /.pricing-card__bottom -->
                </div><!-- /.pricing-card -->
            </div><!-- /.col-sm-12 col-md-12 col-lg-4 -->

        <?php endwhile;
        wp_reset_postdata();

        return ob_get_clean();
    }

    public function render_static_footer_shortcode($atts, $content = '')
    {
        ob_start();
        ?>
        <!--Start Site Footer-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(<?php echoXAITO_ADDON_URL; ?>/markup-assets/images/backgrounds/footer-v1-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="<?php site_url(); ?>"><img src="<?php echoXAITO_ADDON_URL; ?>/markup-assets/images/resources/footer-logo.png" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">Counselling psychologists work with clients to
                                        help them improve their mental health and emotional
                                        wellbeing we are here</p>
                                </div>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Contact</h3>
                                </div>
                                <ul class="footer-widget__contact-list ml-0 list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-email-1"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:helpus24@gmail.com">helpus24@gmail.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:0881122334455">+088 11 22 33 44 55</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"></span>
                                        </div>
                                        <div class="text">
                                            <p>Aski RA4, Suite 14545 <br> Melbourne Australia</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="footer-widget__contact-social-link ml-0">
                                    <li>
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="fab fa-pinterest-p"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-2 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="footer-widget__column footer-widget__service clearfix">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Services</h3>
                                </div>
                                <ul class="footer-widget__service-list list-unstyled ml-0 clearfix">
                                    <li><a href="#">Personal Meeting</a></li>
                                    <li><a href="#">Anxiety Disorder</a></li>
                                    <li><a href="#">Couple Problems</a></li>
                                    <li><a href="#">Depression therapy</a></li>
                                    <li><a href="#">Individual therapy</a></li>
                                    <li><a href="#">Family case</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Footer Widget Column-->

                        <!--Start Footer Widget Column-->
                        <div class="col-xl-4 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                            <div class="footer-widget__column footer-widget__newsletter clearfix">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                </div>
                                <p class="footer-widget__newsletter-text">Subscribe us & get news, articles to your
                                    inbox.</p>
                                <form class="footer-widget__subscribe-box mc-form" data-url="#">
                                    <div class="footer-widget__subscribe-input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                        <button type="submit" class="footer-widget__subscribe-btn"><i class="icon-send"></i></button>
                                    </div>
                                </form>
                                <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            </div>
                        </div>
                        <!--End Footer Widget Column-->
                    </div>
                </div>
            </div>

            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© 2023 <a href="<?php site_url(); ?>">Xaito WordPress Theme</a>
                                    All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Site Footer-->
    <?php return ob_get_clean();
    }

    public function render_static_header_shortcode($atts, $content = '')
    {
        ob_start();
    ?>
        <header class="main-header main-header--three clearfix">
            <div class="main-header--three__top">
                <div class="container">
                    <div class="main-header--three__top-inner">
                        <div class="main-header--three__top-left">
                            <div class="main-header--three__top-left__date">
                                <p><span class="icon-clock-1"></span> Mon - Fri 8:00 - 6:30</p>
                            </div>
                            <ul class="social-link list-unstyled">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            </ul>
                        </div>

                        <div class="main-header--three__top-right">
                            <a href="<?php site_url(); ?>/contact/" class="thm-btn">Request Book</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header__top main-header--three__middle">
                <div class="container">
                    <div class="main-header__top-inner clearfix">
                        <div class="main-header__top-left">
                            <div class="main-header__top-logo">
                                <a href="<?php site_url(); ?>"><img src="<?php echoXAITO_ADDON_URL; ?>/markup-assets/images/resources/logo-1.png" alt=""></a>
                            </div>
                        </div>

                        <div class="main-header__top-right">
                            <ul class="list-unstyled main-header__top-contact">
                                <li>
                                    <div class="icon">
                                        <span class="icon-email-1"></span>
                                    </div>
                                    <div class="content">
                                        <p>Quick Email Now!</p>
                                        <h5><a href="mailto:helpus24@gmail.com">helpus24@gmail.com</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <div class="content">
                                        <p>Company Location</p>
                                        <h5>Melbourne, Australia</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="content">
                                        <p>Phone Number</p>
                                        <h5><a href="tel:8800115244">(88) 00-11-52 -44</a></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="main-menu clearfix">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">

                            <div class="main-menu__left">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <?php echo xaito_get_static_menu(get_site_url()); ?>
                                </div>
                            </div>

                            <div class="main-menu__right">
                                <div class="main-menu__search-box">
                                    <a href="#" class="main-menu__search search-toggler icon-search"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->




        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="<?php site_url(); ?>" aria-label="logo image"><img src="<?php echoXAITO_ADDON_URL; ?>/markup-assets/images/resources/footer-logo.png" width="143" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@packageName__.com">needhelp@xaito.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:666-888-0000">666 888 0000</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
                <div class="mobile-nav__top">
                    <div class="mobile-nav__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.mobile-nav__social -->
                </div><!-- /.mobile-nav__top -->



            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-search"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->
<?php return ob_get_clean();
    }
}
