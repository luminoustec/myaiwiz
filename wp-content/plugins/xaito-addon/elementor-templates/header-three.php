<?php $search_status = $settings['search_status']; ?>
<?php $topbar_status = $settings['topbar_status']; ?>
<?php $dark_status = $settings['dark_status']; ?>
<?php $one_page_class = 'yes' == $settings['one_page_status'] ? 'one-page-scroll-menu' : ' '; ?>
<?php if ('layout_three' === $settings['layout_type']) : ?>

	<!-- xc-header-one area start -->
	<header>
		<div class="xc-header-one__header xc-header-transparen xc-white">
			<!-- main header start  -->
			<div class="xc-header-one__main" id="xc-header-sticky">
				<div class="container">
					<div class="xc-header-one__main-wrapper">
						<div class="xc-header-one__left">
							<div class="xc-header-one__logo xc-disabled-dark">
								<a href="<?php echo esc_url(home_url('/')); ?>"><img width="<?php echo esc_attr($settings['logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['logo_dimension']['height']); ?>" src="<?php echo esc_attr($settings['logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
							</div>
							<div class="xc-header-one__logo xc-enable-dark">
								<a href="<?php echo esc_url(home_url('/')); ?>"><img width="<?php echo esc_attr($settings['light_logo_dimension']['width']); ?>" height="<?php echo esc_attr($settings['light_logo_dimension']['height']); ?>" src="<?php echo esc_attr($settings['light-logo']['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
							</div>
						</div>
						<div class="xc-header-one__right">
							<div class="xc-header-one__right-menu d-flex flex-wrap justify-content-between align-items-center">
								<div class="main-menu d-none d-xl-block">
									<nav id="mobile-menu">
										<?php
										wp_nav_menu(
											array(
												'menu' => $settings['nav_menu'],
												'menu_class' => 'xc-wp-menu ul-0' . $one_page_class,
												'walker'         => class_exists('\Xoomcoders\Xaito\Megamenu\Walker_Nav_Menu') ? new \Xoomcoders\Xaito\Megamenu\Walker_Nav_Menu : '',
											)
										);
										?>
									</nav>
								</div>

								<div class="xc-header-one__right-btn d-none d-md-flex">
									<?php if ('yes' == $dark_status) : ?>
										<button class="xc-dark-swich">
											<i class="moon fa-light fa-moon"></i>
											<i class="sun fa-light fa-sun-bright"></i>
										</button>
									<?php endif; ?>
									<?php if (!empty($settings['button_label'])) : ?>
										<div class="xc-header-bnt-1">
											<a <?php echo esc_attr(!empty($settings['button_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($settings['button_url']['url']); ?>" class="xc-border-btn"><?php echo esc_html($settings['button_label']); ?></a>
										</div>
									<?php endif; ?>
									<?php if (!empty($settings['button_two_label'])) : ?>
										<div class="xc-header-bnt-2">
											<a <?php echo esc_attr(!empty($settings['button_two_url']['is_external']) ? 'target=_blank' : ' '); ?> href="<?php echo esc_url($settings['button_two_url']['url']); ?>" class="xc-btn"><?php echo esc_html($settings['button_two_label']); ?></a>
										</div>
									<?php endif; ?>
								</div>

								<!-- mobile drawer  -->
								<div class="xc-header-one__hamburger ml-50 d-xl-none">
									<button type="button" class="xc-hamburger-btn xc-offcanvas-open-btn">
										<span></span>
										<span></span>
										<span></span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--main-header end  -->
		</div>
	</header>

<?php endif; ?>