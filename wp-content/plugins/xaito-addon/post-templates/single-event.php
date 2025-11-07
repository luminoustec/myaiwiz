<?php
get_header(); ?>
<?php
$date = get_post_meta(get_the_ID(), 'xaito_event_date', true);
$date = date_create($date);
$xaito_event_category =  get_the_terms(get_the_ID(), 'event_cat');
?>

<!--Event Details Start-->
<section class="event-details">
    <div class="container">
        <?php if (has_post_thumbnail()) : ?>
            <div class="row">
                <div class="event-details__img">
                    <?php the_post_thumbnail('xaito_event_1170X510'); ?>
                    <div class="event-details__date">
                        <p><?php echo esc_html(date_format($date, "d M, Y")); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="event-details__bottom">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="event-details__left">
                        <div class="event-details__content-one">
                            <h3 class="event-details__content-one-title"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <div class="event-details__btn-box">
                                <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'xaito_event_btn_url', true)); ?>" class="thm-btn event-details__btn">
                                    <?php echo esc_html(get_post_meta(get_the_ID(), 'xaito_event_btn_label', true)); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="event-details__sidebar">
                        <div class="event-details__details-box">
                            <h5 class="event-details__details-box-title"><?php esc_html_e('Event Details', 'xaito-addon'); ?></h5>
                            <ul class="list-unstyled event-details__details-box-list ml-0">
                                <li>
                                    <div class="left">
                                        <p><?php esc_html_e('Starting Time', 'xaito-addon'); ?>:</p>
                                    </div>
                                    <div class="right">
                                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'xaito_event_starting_time', true)); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p><?php esc_html_e('Date', 'xaito-addon'); ?>:</p>
                                    </div>
                                    <div class="right">
                                        <p><?php echo esc_html(date_format($date, "d M, Y")); ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p><?php esc_html_e('Category', 'xaito-addon'); ?>:</p>
                                    </div>
                                    <div class="right">
                                        <p class="event-category">
                                            <?php
                                            if (is_array($xaito_event_category)) :
                                                foreach ($xaito_event_category as $cat) {
                                                    echo '<span>' . esc_attr($cat->name) . '</span>';
                                                }
                                            endif;
                                            ?>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p><?php esc_html_e('Phone', 'xaito-addon'); ?>:</p>
                                    </div>
                                    <div class="right">
                                        <p><a href="tel:<?php echo esc_attr(str_replace(' ', '-', get_post_meta(get_the_ID(), 'xaito_event_phone', true))); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), 'xaito_event_phone', true)); ?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p><?php esc_html_e('Website', 'xaito-addon'); ?>:</p>
                                    </div>
                                    <div class="right">
                                        <p><a class="clr-primary" href="mailto:<?php echo esc_attr(get_post_meta(get_the_ID(), 'xaito_event_email', true)); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), 'xaito_event_email', true)); ?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p><?php esc_html_e('Location', 'xaito-addon'); ?>:</p>
                                    </div>
                                    <div class="right">
                                        <p class="clr-base"><?php echo wp_kses(get_post_meta(get_the_ID(), 'xaito_event_location', true), 'xaito_allowed_tags'); ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="event-details__map">
                            <?php
                            $url = 'https://maps.google.com/maps?q=%1$s&amp;t=m&amp;z=%2$d&amp;output=embed&amp;iwloc=near';
                            $params = [
                                rawurlencode(get_post_meta(get_the_ID(), 'xaito_event_map', true)),
                                absint(get_post_meta(get_the_ID(), 'xaito_event_zoom', true)),
                            ];
                            ?>
                            <iframe src="<?php echo esc_url(vsprintf($url, $params)); ?>"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Event Details End-->

<?php
get_footer();
