$(function () {
    "use strict";
    $(window).on("load", function (a) {
        $(".preloader").delay(500).fadeOut(500);
    }),
        $(window).on("scroll", function (a) {
            $(window).scrollTop() < 20
                ? ($(".navbar-area").removeClass("sticky"),
                  $(".navbar-area img").attr("src", "assets/images/logo.svg"))
                : ($(".navbar-area").addClass("sticky"),
                  $(".navbar-area img").attr(
                      "src",
                      "assets/images/logo-2.svg"
                  ));
        });
    var a = $(".page-scroll");
    $(window).scroll(function () {
        var e = $(this).scrollTop();
        a.each(function () {
            $(this.hash).offset().top - 73 <= e &&
                ($(this).parent().addClass("active"),
                $(this).parent().siblings().removeClass("active"));
        });
    }),
        $(".navbar-nav a").on("click", function () {
            $(".navbar-collapse").removeClass("show");
        }),
        $(".navbar-toggler").on("click", function () {
            $(this).toggleClass("active");
        }),
        $(".navbar-nav a").on("click", function () {
            $(".navbar-toggler").removeClass("active");
        }),
        $('[href="#side-menu-left"], .overlay-left').on("click", function (a) {
            $(".sidebar-left, .overlay-left").addClass("open");
        }),
        $('[href="#close"], .overlay-left').on("click", function (a) {
            $(".sidebar-left, .overlay-left").removeClass("open");
        }),
        $(".slider-items-active").slick({
            infinite: !0,
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 800,
            arrows: !0,
            prevArrow:
                '<span class="prev"><i class="lni lni-arrow-left"></i></span>',
            nextArrow:
                '<span class="next"><i class="lni lni-arrow-right"></i></span>',
            dots: !0,
            autoplay: !0,
            autoplaySpeed: 5e3,
            responsive: [
                { breakpoint: 1200, settings: { slidesToShow: 3 } },
                { breakpoint: 992, settings: { slidesToShow: 2 } },
                { breakpoint: 768, settings: { slidesToShow: 2 } },
                { breakpoint: 576, settings: { slidesToShow: 1, arrows: !1 } },
            ],
        }),
        $(".container").imagesLoaded(function () {
            var a = $(".grid").isotope({ transitionDuration: "1s" });
            $(".portfolio-menu ul").on("click", "li", function () {
                var e = $(this).attr("data-filter");
                a.isotope({ filter: e });
            }),
                $(".portfolio-menu ul li").on("click", function (a) {
                    $(this).siblings(".active").removeClass("active"),
                        $(this).addClass("active"),
                        a.preventDefault();
                });
        }),
        $(".testimonial-active").slick({
            dots: !1,
            arrows: !0,
            prevArrow:
                '<span class="prev"><i class="lni lni-arrow-left"></i></span>',
            nextArrow:
                '<span class="next"><i class="lni lni-arrow-right"></i></span>',
            infinite: !0,
            autoplay: !0,
            autoplaySpeed: 5e3,
            speed: 800,
            slidesToShow: 1,
        }),
        $(".video-popup").magnificPopup({ type: "iframe" }),
        $(".image-popup").magnificPopup({
            type: "image",
            gallery: { enabled: !0 },
        }),
        $(window).on("scroll", function (a) {
            $(this).scrollTop() > 600
                ? $(".back-to-top").fadeIn(200)
                : $(".back-to-top").fadeOut(200);
        }),
        $(".back-to-top").on("click", function (a) {
            a.preventDefault(), $("html, body").animate({ scrollTop: 0 }, 1500);
        });
});
