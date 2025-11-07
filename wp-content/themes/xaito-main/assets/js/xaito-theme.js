(function ($) {
	"use strict";

	////////////////////////////////////////////////////

	var windowOn = $(window);

	// 01. preloader Js

	windowOn.on('load', function () {
		$(".xc-preloader").fadeOut(500);
	});

	//02. search popup js 

	$(".xc-search-icon").on("click", function () {
		$(".xc-search-popup").toggleClass("opened");
		$("body").toggleClass("locked");
	});

	$(".xc-search-popup__overlay").on("click", function () {
		$(".xc-search-popup").removeClass("opened");
		$("body").removeClass("locked");
	});

	//03. offcanvas popup js 

	$(".xc-offcanvas-open-btn").on("click", function () {
		$(".xc-mobile-nav__wrapper").toggleClass("opened");
		$("body").toggleClass("locked");
	});

	$(".xc-mobile-nav__toggler").on("click", function () {
		$(".xc-mobile-nav__wrapper").removeClass("opened");
		$("body").removeClass("locked");
	});


	////////////////////////////////////////////////////
	// 04. Mobile Menu Js

	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.xc-mobile-nav__menu',
		meanScreenWidth: "1199",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});


	$('.main-menu nav > ul > li').slice(-4).addClass('menu-last');

	// 05. Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	$("[data-width]").each(function () {
		$(this).css("width", $(this).attr("data-width"));
	});

	$("[data-bg-color]").each(function () {
		$(this).css("background-color", $(this).attr("data-bg-color"));
	});


	// 06. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = $(window).scrollTop();
		if (scroll < 100) {
			$("#xc-header-sticky").removeClass("xc-header-sticky");
		} else {
			$("#xc-header-sticky").addClass("xc-header-sticky");
		}
	});

	// 07. Back Top Top 
	var btn = $('#xc_back-to-top');
	var btn_wrapper = $('.xc-back-to-top-wrapper');

	windowOn.scroll(function () {
		if (windowOn.scrollTop() > 300) {
			btn_wrapper.addClass('xc-back-to-top-btn-show');
		} else {
			btn_wrapper.removeClass('xc-back-to-top-btn-show');
		}
	});

	btn.on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, '300');
	});



	/*08. magnificPopup img view */
	$('.xc-popup-image').magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	/*.09 magnificPopup video view */
	$(".xc-popup-video").magnificPopup({
		type: "iframe",
	});

	$("#filt-yearly").on("click", function () {
		$(".tp-price-toogle").removeClass("price-open");
	});
	$(".toggler-yearly.toggler--is-active").on("click", function () {
		$(".tp-price-toogle").removeClass("price-open");
	});
	$("#filt-monthly").on("click", function () {
		$(".tp-price-toogle").addClass("price-open");
	});
	// 01. nav-tabs
	function tabtable_active() {

		var e = document.getElementById("filt-monthly"),
			d = document.getElementById("filt-yearly"),
			t = document.getElementById("switcher"),
			m = document.getElementById("monthly"),
			y = document.getElementById("hourly");

		e.addEventListener("click", function () {
			t.checked = false;
			e.classList.add("toggler--is-active");
			d.classList.remove("toggler--is-active");
			m.classList.remove("hide");
			y.classList.add("hide");
		});

		d.addEventListener("click", function () {
			t.checked = true;
			d.classList.add("toggler--is-active");
			e.classList.remove("toggler--is-active");
			m.classList.add("hide");
			y.classList.remove("hide");
		});

		t.addEventListener("click", function () {
			d.classList.toggle("toggler--is-active");
			e.classList.toggle("toggler--is-active");
			m.classList.toggle("hide");
			y.classList.toggle("hide");
		})
	}
	if ($('#filt-monthly').length > 0) {
		tabtable_active();
	}

	////////////////////////////////////////////////////
	// 9. js - tilt

	if ($(".js-tilt").length) {
		const tilt = $('.js-tilt').tilt()
		tilt.on('change', function (e, transforms) {});
	}

	//10. Fact Counter + Text Count
	if ($(".xc-count-box").length) {
		$(".xc-count-box").appear(
			function () {
				var $t = $(this),
					n = $t.find(".xc-count-text").attr("data-stop"),
					r = parseInt($t.find(".xc-count-text").attr("data-speed"), 10);

				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".xc-count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function () {
							$t.find(".xc-count-text").text(Math.floor(this.countNum));
						},
						complete: function () {
							$t.find(".xc-count-text").text(this.countNum);
						}
					});
				}
			}, {
				accY: 0
			}
		);
	}
	//.11  Accrodion
	if ($(".xc-accrodion-grp").length) {
		var accrodionGrp = $(".xc-accrodion-grp");
		accrodionGrp.each(function () {
			var accrodionName = $(this).data("grp-name");
			var Self = $(this);
			var accordion = Self.find(".xc-accrodion");
			Self.addClass(accrodionName);
			Self.find(".xc-accrodion .xc-accrodion-content").hide();
			Self.find(".xc-accrodion.active").find(".xc-accrodion-content").show();
			accordion.each(function () {
				$(this)
					.find(".xc-accrodion-title")
					.on("click", function () {
						if ($(this).parent().hasClass("active") === false) {
							$(".xc-accrodion-grp." + accrodionName)
								.find(".xc-accrodion")
								.removeClass("active");
							$(".xc-accrodion-grp." + accrodionName)
								.find(".xc-accrodion")
								.find(".xc-accrodion-content")
								.slideUp();
							$(this).parent().addClass("active");
							$(this).parent().find(".xc-accrodion-content").slideDown();
						}
					});
			});
		});
	}


	//12. owl slider
	function thmOwlInit() {
		// owl slider

		if ($(".thm-owl__carousel").length) {
			$(".thm-owl__carousel").each(function () {
				let elm = $(this);
				let options = elm.data('owl-options');
				let thmOwlCarousel = elm.owlCarousel(options);
			});
		}

		if ($(".thm-owl__carousel--custom-nav").length) {
			$(".thm-owl__carousel--custom-nav").each(function () {
				let elm = $(this);
				let owlNavPrev = elm.data('owl-nav-prev');
				let owlNavNext = elm.data('owl-nav-next');
				$(owlNavPrev).on("click", function (e) {
					elm.trigger('prev.owl.carousel');
					e.preventDefault();
				})

				$(owlNavNext).on("click", function (e) {
					elm.trigger('next.owl.carousel');
					e.preventDefault();
				})
			});
		}


	}
	//13 swiper slider
	function thmSwiperInit() {
		// swiper slider
		if ($(".thm-swiper__slider").length) {
			$(".thm-swiper__slider").each(function () {
				let elm = $(this);
				let options = elm.data('swiper-options');
				let thmSwiperSlider = new Swiper(elm, options);
			});
		}

	}


	function loop() {
		// updateCursor();
		requestAnimationFrame(loop);

	}

	requestAnimationFrame(loop);


	////////////////////////////////////////////////////

	if ($(".main-menu").length) {
		let currentMenuItem = $(".main-menu").find("li.current-menu-item");
		let currentMenuParent = $(".main-menu").find("li.current-menu-parent");
		let currentMenuAncestor = $(".main-menu").find("li.current-menu-ancestor");
		let currentPageItem = $(".main-menu").find("li.current_page_item");
		currentMenuItem.addClass("current");
		currentMenuParent.addClass("current");
		currentMenuAncestor.addClass("current");
		currentPageItem.addClass("current");
	}
	// 14. Wow Js

	$(window).on("load", function () {
		thmSwiperInit();
	});

})(jQuery);