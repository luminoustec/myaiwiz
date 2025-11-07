<?php if ('layout_two' == $settings['layout_type']) : ?>
    <!--Newsletter one start-->
    <section class="newsletter-one">
        <div class="container">
            <div class="newsletter-one__inner">
                <div class="newsletter-one__left">
                    <?php if (!empty($settings['layout_two_title']) || !empty($settings['layout_two_content'])) : ?>
                        <div class="newsletter-one__title">
                            <?php if (!empty($settings['layout_two_title'])) : ?>
                                <<?php echo esc_attr($settings['section_title_two_tag_']) ?> class="cta-one__title"><?php echo wp_kses($settings['layout_two_title'], 'xaito_allowed_tags'); ?></<?php echo esc_attr($settings['section_title_two_tag_']) ?>>
                            <?php endif; ?>
                            <?php if (!empty($settings['layout_two_content'])) : ?>
                                <p><?php echo wp_kses($settings['layout_two_content'], 'xaito_allowed_tags'); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="newsletter-one__email-box">
                    <form class="newsletter-one__form mc-form" data-url="<?php echo esc_url($settings['mailchimp_url']); ?>">
                            <div class=" newsletter-one__form-input-box">
                            <input type="email" placeholder="<?php echo esc_attr($settings['mc_input_placeholder']); ?>" name="EMAIL">
                            <button type="submit" class="newsletter-one__newsletter-btn"><?php \Elementor\Icons_Manager::render_icon($settings['submit_icon'], ['aria-hidden' => 'true', 'class' => ' '], 'i'); ?></button>
                    </div>
                    </form>
                </div>
            </div>

            <?php if (!empty($settings['layout_two_button_label'])) : ?>
                <div class="newsletter-one__right">
                    <a <?php echo esc_attr(!empty($settings['layout_two_button_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($settings['layout_two_button_url']['url']); ?>" class="thm-btn newsletter-one__button"><?php echo esc_html($settings['layout_two_button_label']); ?></a>
                </div>
            <?php endif; ?>
        </div>
        </div>
    </section>
    <!--Newsletter one end-->

<?php endif; ?>