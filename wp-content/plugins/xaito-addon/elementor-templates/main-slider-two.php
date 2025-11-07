<?php if ('layout_two' === $settings['layout_type']) : ?>

    <!--Main Slider Start-->
    <section class="main-slider-two clearfix overflow-hidden">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": <?php echo esc_attr($settings['items']['size']); ?>,
                 "loop":  <?php echo esc_attr(('yes' == $settings['loop']) ? 'true' : 'false'); ?>,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">
                <?php foreach ($settings['layout_two_sliders'] as $slider) : ?>
                    <div class="swiper-slide">
                        <div class="image-layer-two" style="background-image: url(<?php echo esc_url($slider['background_image']['url']) ?>);"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-two-overly-one"></div>
                        <div class="main-slider-tow-overly-two"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <div class="main-slider-two__curved-circle-box">
                                            <div class="curved-circle">
                                                <span class="curved-circle--item">
                                                    <?php echo wp_kses($slider['cicle_text'], 'xaito_allowed_tags'); ?>
                                                </span>
                                            </div><!-- /.curved-circle -->
                                            <div class="main-slider-two__curved-circle-icon">
                                                <img src="<?php echo esc_url($slider['circle_img']['url']) ?>" alt="<?php echo esc_attr($slider['circle_img']['id']) ?>) ?>">
                                            </div>
                                        </div>
                                        <?php if (!empty($slider['title'])) : ?>
                                            <h2 class="main-slider-two__title"><?php echo wp_kses($slider['title'], 'xaito_allowed_tags'); ?></h2>
                                        <?php endif; ?>
                                        <?php if (!empty($slider['button_label'])) : ?>
                                            <div class="main-slider-two__btn-box">
                                                <a <?php echo esc_attr(!empty($slider['button_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($slider['button_url']['url']); ?>" class="thm-btn main-slider__btn"><?php echo esc_html($slider['button_label']); ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($slider['slider_shape']['url'])) : ?>
                                            <div class="main-slider-two-shape-1">
                                                <img src="<?php echo esc_url($slider['slider_shape']['url']) ?>" alt="<?php echo esc_attr($slider['slider_shape']['id']) ?>) ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- If we need navigation buttons -->
            <?php if ('yes' == $settings['enable_nav']) : ?>
                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="<?php echo esc_attr($settings['nav_left_icon']['value']); ?>"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="<?php echo esc_attr($settings['nav_right_icon']['value']); ?>"></i>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </section>
    <!--Main Slider End-->
<?php endif; ?>