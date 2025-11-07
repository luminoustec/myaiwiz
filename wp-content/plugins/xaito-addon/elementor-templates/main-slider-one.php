<?php if ('layout_one' === $settings['layout_type']) : ?>
    <!--Main Slider Start-->
    <section class="main-slider clearfix overflow-hidden">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": <?php echo esc_attr($settings['items']['size']); ?>,
                "loop": <?php echo esc_attr(('yes' == $settings['loop']) ? 'true' : 'false'); ?>,
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
                "delay": <?php echo esc_attr($settings['delay']['size']); ?>
                }}'>
            <div class="swiper-wrapper">

                <?php foreach ($settings['sliders'] as $slider) : ?>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(<?php echo esc_url($slider['background_image']['url']) ?>)"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-overly-one"></div>
                        <div class="main-slider-overly-two"></div>
                        <div class="main-slider-shape-1 float-bob-x">
                            <img src="<?php echo esc_url($slider['shape_one']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($slider['shape_one']['id']) ?>">
                        </div>
                        <div class="main-slider-shape-2 float-bob-y">
                             <img src="<?php echo esc_url($slider['shape_two']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($slider['shape_two']['id']) ?>">
                        </div>
                        <div class="main-slider-shape-3 float-bob-y">
                            <img src="<?php echo esc_url($slider['shape_three']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($slider['shape_three']['id']) ?>">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10">
                                    <div class="main-slider__content">
                                        <div class="main-slider__video-link">
                                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                                <div class="main-slider__video-icon">
                                                    <span class="fa fa-play"></span>
                                                    <i class="ripple"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <?php if (!empty($slider['sub_title'])) : ?>
                                            <p class="main-slider__sub-title"><?php echo wp_kses($slider['sub_title'], 'xaito_allowed_tags'); ?></p>
                                        <?php endif; ?>
                                        <?php if (!empty($slider['title'])) : ?>
                                            <h2 class="main-slider__title"><?php echo wp_kses($slider['title'], 'xaito_allowed_tags'); ?></h2>
                                        <?php endif; ?>
                                        <?php if (!empty($slider['button_label'])) : ?>
                                            <div class="main-slider__btn-box">
                                                <a <?php echo esc_attr(!empty($slider['button_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($slider['button_url']['url']); ?>" class="thm-btn main-slider__btn"><?php echo esc_html($slider['button_label']); ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

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
            <?php endif; ?>
        </div>
    </section>
    <!--Main Slider End-->

<?php endif; ?>