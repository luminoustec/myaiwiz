<?php if ('layout_three' === $settings['layout_type']) : ?>

    <!--Main Slider Start-->
    <section class="main-slider-three clearfix overflow-hidden">
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
                <?php foreach ($settings['layout_three_sliders'] as $slider) : ?>
                    <div class="swiper-slide">
                        <div class="image-layer-three" style="background-image: url(<?php echo esc_url($slider['background_image']['url']) ?>);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider-three__content">
                                        <?php if (!empty($slider['title'])) : ?>
                                            <h2 class="main-slider-three__title"><?php echo wp_kses($slider['title'], 'xaito_allowed_tags'); ?></h2>
                                        <?php endif; ?>

                                        <?php if (!empty($slider['button_label'])) : ?>
                                            <div class="main-slider-three__btn-box">
                                                <a <?php echo esc_attr(!empty($slider['button_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($slider['button_url']['url']); ?>" class="thm-btn main-slider-three__btn"> <?php echo esc_html($slider['button_label']); ?></a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($slider['background_image_shape_one']['url'])) : ?>
                                            <div class="main-slider-three-shape-1 float-bob-y">
                                                <img src="<?php echo esc_url($slider['background_image_shape_one']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($slider['background_image_shape_one']['id']) ?>" />
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($slider['background_image_shape_two']['url'])) : ?>
                                            <div class="main-slider-three-shape-2 float-bob-y">
                                                <img src="<?php echo esc_url($slider['background_image_shape_one']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($slider['background_image_shape_two']['id']) ?>" />
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($slider['background_image_shape_three']['url'])) : ?>
                                            <div class="main-slider-three-shape-3 float-bob-x">
                                                <img src="<?php echo esc_url($slider['background_image_shape_three']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($slider['background_image_shape_three']['id']) ?>" />
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="main-slider-three__right">
                                        <div class="main-slider-two__curved-circle-box">
                                            <div class="curved-circle">
                                                <span class="curved-circle--item">
                                                    <?php echo wp_kses($slider['cicle_text'], 'xaito_allowed_tags'); ?>
                                                </span>
                                            </div><!-- /.curved-circle -->
                                            <?php if (!empty($slider['layout_three_circle_icon']['url'])) : ?>
                                                <div class="main-slider-two__curved-circle-icon">
                                                    <img src="<?php echo esc_url($slider['layout_three_circle_icon']['url']) ?>" alt="<?php echo xaito_get_thumbnail_alt($slider['layout_three_circle_icon']['id']) ?>" />
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-pagination" id="main-slider-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="main-slider-three__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-up-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-up-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

<?php endif; ?>