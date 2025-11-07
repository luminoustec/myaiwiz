<?php if ('layout_one' == $settings['layout_type']) : ?>


	<!-- cta one start -->
	<div class="xc-cta-one__section wow xcfadeUp">
		<div class="container">
			<div class="xc-cta-one__inner theme-bg-2 p-relative z-1">
				<div class="xc-cta-one__shape">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img//shapes/cta-shape-1.png" alt="shape-1">
				</div>
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="xc-cta-one__content">
							<div class="xc-cta-one__title-wrapper">
								<span class="xc-cta-one__tagline"><i class="fa-solid fa-bolt-lightning"></i>Unlock the
									power</span>
								<h3 class="xc-cta-one__title">Stop wasting time <br>
									& money on content</h3>
							</div>
							<div class="xc-cta-one__checklist">
								<span><i class="fa-solid fa-check"></i>No Credit Card Required</span>
								<span><i class="fa-solid fa-check"></i>2,000 free words per month</span>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="xc-cta-one__btn">
							<a href="<?php echo esc_url(home_url('/')); ?>contact" class="xc-btn">Get Started Free</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- cta one end  -->
	<!-- footer start  -->
	<footer class="xc-footer-one__section pt-100">
		<div class="container">
			<div class="xc-footer-one__top pb-60">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div class="xc-footer__widget mb-30">
							<div class="xc-footer__widget-about">
								<div class="xc-footer__widget-logo xc-disabled-dark">
									<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/black-logo.png" alt=""></a>
								</div>
								<div class="xc-footer__widget-logo xc-enable-dark">
									<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/white-logo.png" alt=""></a>
								</div>
								<div class="xc-footer__widget-social">
									<a href="https://www.facebook.com/"><span><i class="fab fa-facebook-f"></i></span></a>
									<a href="https://www.twitter.com/"><span><i class="fab fa-twitter"></i></span></a>
									<a href="https://www.linkedin.com/"><span><i class="fab fa-linkedin-in"></i></span></a>
									<a href="https://www.youtube.com/"><span><i class="fab fa-youtube"></i></span></a>
								</div>
								<p class="xc-footer__widget-info">© Xaito 2023. All Rights <br> Reserved.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="xc-footer__widget mb-30">
							<h3 class="xc-footer__widget-title">Product</h3>
							<div class="xc-footer__widget-nav">
								<ul>
									<li><a href="<?php echo esc_url(home_url('/')); ?>">AI Copywritting</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>ai-chatbot/">AI Chatbot</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>ai-image/">AI Research</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>ai-video">AI video</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="xc-footer__widget mb-30">
							<h3 class="xc-footer__widget-title">Company</h3>
							<div class="xc-footer__widget-nav">
								<ul>
									<li><a href="<?php echo esc_url(home_url('/')); ?>about">About Us</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>team">Our Team</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>contact">Career</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>contact">Community</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6">
						<div class="xc-footer__widget mb-30">
							<h3 class="xc-footer__widget-title">Support</h3>
							<div class="xc-footer__widget-nav">
								<ul>
									<li><a href="<?php echo esc_url(home_url('/')); ?>contact">Help Center</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>about">Submit Feedback</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>contact">Contact Us</a></li>
									<li><a href="<?php echo esc_url(home_url('/')); ?>about">Request Quote</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="xc-footer-one__copyright theme-bg-2 has-border">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="xc-footer-one__copyright-text text-center">© Copyrights 2023 Xaito All rights
							reserved. </p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end  -->
<?php endif; ?>