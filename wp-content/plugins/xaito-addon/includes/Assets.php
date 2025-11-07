<?php

namespace Xoomcoders\Xaito;

class Assets
{

    /**
     * Class constructor
     */
    function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'register_assets']);
        add_action('admin_enqueue_scripts', [$this, 'register_assets']);
    }

    /**
     * All available scripts
     *
     * @return array
     */
    public function get_scripts()
    {
        return [
            'bootstrap-select' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/bootstrap-select/js/bootstrap-select.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/bootstrap-select/js/bootstrap-select.min.js'),
                'deps'    => ['jquery', 'bootstrap']
            ],
            'jquery-bxslider' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/bxslider/jquery.bxslider.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/bxslider/jquery.bxslider.min.js'),
                'deps'    => ['jquery']
            ],
            'countdown' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/countdown/countdown.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/countdown/countdown.min.js'),
                'deps'    => ['jquery']
            ],
            'isotope' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/isotope/isotope.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/isotope/isotope.js'),
                'deps'    => ['jquery']
            ],
            'jarallax' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jarallax/jarallax.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jarallax/jarallax.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-ajaxchimp' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-appear' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jquery-appear/jquery.appear.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jquery-appear/jquery.appear.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-tilt' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jquery-tilt/tilt.jquery.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jquery-tilt/tilt.jquery.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-easing' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jquery-easing/jquery.easing.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jquery-easing/jquery.easing.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-circle-progress' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jquery-circle-progress/jquery.circle-progress.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js'),
                'deps'    => ['jquery']
            ],
            'jquery-magnific-popup' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js'),
                'deps'    => ['jquery']
            ],
            'odometer' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/odometer/odometer.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/odometer/odometer.min.js'),
                'deps'    => ['jquery']
            ],
            'select2' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/select2/js/select2.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/select2/js/select2.min.js'),
                'deps'    => ['jquery']
            ],
            'nice-select' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/nice-select/nice-select.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets//vendors/nice-select/nice-select.min.js'),
                'deps'    => ['jquery']
            ],
            'owl-carousel' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/owl-carousel/owl.carousel.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/owl-carousel/owl.carousel.min.js'),
                'deps'    => ['jquery']
            ],
            'swiper' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/swiper/swiper.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/swiper/swiper.min.js'),
                'deps'    => ['jquery']
            ],
            'wow' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/wow/wow.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/wow/wow.js'),
                'deps'    => ['jquery']
            ],

            'sharer' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/sharer/sharer.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/sharer/sharer.min.js'),
                'deps'    => ['jquery']
            ],

            'jquery-circletype' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/circleType/jquery.circleType.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/circleType/jquery.circleType.js'),
                'deps'    => ['jquery']
            ],

            'jquery-lettering' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/circleType/jquery.lettering.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/circleType/jquery.lettering.min.js'),
                'deps'    => ['jquery']
            ],
            'animation-headline' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/animaiton-headline/animation-headline.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/animaiton-headline/animation-headline.js'),
                'deps'    => ['jquery']
            ],
            'gsap' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/gsap/gsap.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/gsap/gsap.min.js'),
                'deps'    => ['jquery']
            ],
            'ScrollSmoother' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors//gsap/ScrollSmoother.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/gsap/ScrollSmoother.min.js'),
                'deps'    => ['jquery']
            ],
            'ScrollToPlugin' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors//gsap/ScrollToPlugin.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/gsap/ScrollToPlugin.min.js'),
                'deps'    => ['jquery']
            ],
            'ScrollTrigger' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors//gsap/ScrollTrigger.min.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/gsap/ScrollTrigger.min.js'),
                'deps'    => ['jquery']
            ],
            'xaito-addon-script' => [
                'src'     =>XAITO_ADDON_ASSETS . '/js/xaito-addon.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/js/xaito-addon.js'),
                'deps'    => ['jquery']
            ],

            'xaito-addon-customizer' => [
                'src'     =>XAITO_ADDON_ASSETS . '/js/xaito-addon-customizer.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/js/xaito-addon-customizer.js'),
                'deps'    => ['jquery', 'select2']
            ],
        ];
    }

    /**
     * All available styles
     *
     * @return array
     */
    public function get_styles()
    {
        return [
            'animate' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/animate/animate.min.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/animate/animate.min.css')
            ],
            'custom-animate' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/animate/custom-animate.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/animate/custom-animate.css')
            ],
            'bootstrap-select' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/bootstrap-select/css/bootstrap-select.min.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/bootstrap-select/css/bootstrap-select.min.css')
            ],
            'bxslider' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/bxslider/jquery.bxslider.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/bxslider/jquery.bxslider.css')
            ],
            'jarallax' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jarallax/jarallax.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jarallax/jarallax.css')
            ],
            'jquery-magnific-popup' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/jquery-magnific-popup/jquery.magnific-popup.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')
            ],
            'odometer' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/odometer/odometer.min.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/odometer/odometer.min.css')
            ],
            'owl-carousel' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/owl-carousel/owl.carousel.min.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/owl-carousel/owl.carousel.min.css')
            ],
            'owl-theme' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/owl-carousel/owl.theme.default.min.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/owl-carousel/owl.theme.default.min.css')
            ],
            'the-sayinistic-font' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/the-sayinistic-font/stylesheet.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/the-sayinistic-font/stylesheet.css')
            ],
            'reey-font' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/reey-font/stylesheet.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/reey-font/stylesheet.css')
            ],
            'swiper' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/swiper/swiper.min.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/swiper/swiper.min.css')
            ],
            'select2' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/select2/css/select2.min.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/select2/css/select2.min.css')
            ],
            'nice-select' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/nice-select/nice-select.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/nice-select/nice-select.css')
            ],
            'animation-headline' => [
                'src'     =>XAITO_ADDON_ASSETS . '/vendors/animaiton-headline/animation-headline.js',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/vendors/animaiton-headline/animation-headline.js')
            ],
            'xaito-addon-style' => [
                'src'     =>XAITO_ADDON_ASSETS . '/css/xaito-addon.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/css/xaito-addon.css')
            ],
            'xaito-addon-admin-style' => [
                'src'     =>XAITO_ADDON_ASSETS . '/css/xaito-addon-admin.css',
                'version' => filemtime(XAITO_ADDON_PATH . '/assets/css/xaito-addon-admin.css')
            ]
        ];
    }

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_assets()
    {
        $scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ($scripts as $handle => $script) {
            $deps = isset($script['deps']) ? $script['deps'] : false;

            wp_register_script($handle, $script['src'], $deps, $script['version'], true);
        }

        foreach ($styles as $handle => $style) {
            $deps = isset($style['deps']) ? $style['deps'] : false;

            wp_register_style($handle, $style['src'], $deps, $style['version']);
        }
    }
}
