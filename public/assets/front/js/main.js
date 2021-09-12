/* Template Name: Aloa - Landing Page Template for Startup & Agency 
   Author: Acavo
   Version: 1.0.0
   Created: Dec 2020
   File Description: Main JS file of the template
*/


! function ($) {

    "use strict";

    /*============================================

                        ScrollUp

    ==============================================*/
    $.scrollUp({
        scrollText: '<i class="la la-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*============================================

                        Menu

    ==============================================*/

    $('.navbar-toggle').on('click', function (event) {
        $(this).toggleClass('open');
        $('#navigation').slideToggle(400);
    });

    $('.navigation-menu>li').slice(-1).addClass('last-elements');

    $('.menu-arrow,.submenu-arrow').on('click', function (e) {
        if ($(window).width() < 992) {
            e.preventDefault();
            $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
        }
    });

    $(".navigation-menu a").each(function () {
        if (this.href == window.location.href) {
            $(this).parent().addClass("active");
            $(this).parent().parent().parent().addClass("active");
            $(this).parent().parent().parent().parent().parent().addClass("active");
        }
    });

    // Clickable Menu
    $(".has-submenu a").click(function () {
        if (window.innerWidth < 992) {
            if ($(this).parent().hasClass('open')) {
                $(this).siblings('.submenu').removeClass('open');
                $(this).parent().removeClass('open');
            } else {
                $(this).siblings('.submenu').addClass('open');
                $(this).parent().addClass('open');
            }
        }
    });
    //Sticky
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $(".sticky").addClass("nav-sticky");
        } else {
            $(".sticky").removeClass("nav-sticky");
        }
    });
    /*============================================

                    Back to top

    ==============================================*/

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    $('.back-to-top').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    /*===========================================

                        Carousel

    =============================================*/



    $(".testi-carousel").owlCarousel({
        autoPlay: 3000,
        stopOnHover: true,
        navigation: false,
        paginationSpeed: 1000,
        goToFirstSpeed: 2000,
        singleItem: true,
        autoHeight: true,
    });

    /*===========================================

                    NiceSelect

    =============================================*/
    $('select').niceSelect();

    /*===========================================

                        WOW

    =============================================*/

    function wowAnimation() {
        new WOW({
            offset: 100,
            animateClass: "animated",
            mobile: true,
        }).init();
    }
    wowAnimation();

    /*===========================================

                        Preloader

    =============================================*/

    $(window).on("load", function () {
        $("#status").fadeOut();
        $("#preloader").delay(550).fadeOut("slow");
        $("body").delay(550).css({
            overflow: "visible",
        });
    });

    /*===========================================

                        Accordion Box

    =============================================*/

    if ($('.accordion-box').length) {
        $(".accordion-box").on('click', '.acc-btn', function () {

            var outerBox = $(this).parents('.accordion-box');
            var target = $(this).parents('.accordion');

            if ($(this).hasClass('active') !== true) {
                $(outerBox).find('.accordion .acc-btn').removeClass('active');
            }

            if ($(this).next('.acc-content').is(':visible')) {
                return false;
            } else {
                $(this).addClass('active');
                $(outerBox).children('.accordion').removeClass('active-block');
                $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
                target.addClass('active-block');
                $(this).next('.acc-content').slideDown(300);
            }
        });
    }

    /*===========================================

                        Magnific Popup

    =============================================*/

    $('.popup-video,.video-popup').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        preloader: false,
        removalDelay: 160,
        mainClass: 'mfp-fade',
        fixedContentPos: false
    });

    $('.mfp-image').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        }
    });
     /*===========================================

        checkout one click toggle function

    =============================================*/

    var checked = $('.sin-payment input:checked')
    if (checked) {
        $(checked).siblings('.payment-box').slideDown(900);
    };
    $('.sin-payment input').on('change', function () {
        $('.payment-box').slideUp(900);
        $(this).siblings('.payment-box').slideToggle(900);
    });
    

        /*--- checkout toggle function ----*/
        $('.checkout-click1').on('click', function (e) {
            e.preventDefault();
            $('.checkout-login-info').slideToggle(900);
        });
    
    
        /*--- checkout toggle function ----*/
        $('.checkout-click3').on('click', function (e) {
            e.preventDefault();
            $('.checkout-login-info3').slideToggle(1000);
        });
    
    /*===========================================

                  Price slider

    =============================================*/

    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
          $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
      });
      $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    /*===========================================

                  	Cart Plus Minus Button

    =============================================*/

    var CartPlusMinus = $('.cart-plus-minus');
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });

        /*===========================================

                   Prodect Slider
                       
    =============================================*/
    // Project Slider
    $('.product-slider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        rows: 2,
        prevArrow: '<button class="slick-prev"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.product-slider-five').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        rows: 2,
        prevArrow: '<button class="slick-prev"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.list-product-slider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendArrows: ".on-sale-nav",
        rows: 3,
        prevArrow: '<button class="slick-prev slick-btn"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next slick-btn"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.list-product-slider-two').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendArrows: ".latest-nav",
        rows: 3,
        prevArrow: '<button class="slick-prev slick-btn"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next slick-btn"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.list-product-slider-three').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendArrows: ".top-rated-nav",
        rows: 3,
        prevArrow: '<button class="slick-prev slick-btn"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next slick-btn"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.list-product-slider-four').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        appendArrows: ".top-rated-nav-two",
        rows: 3,
        prevArrow: '<button class="slick-prev slick-btn"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next slick-btn"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.product-slider-two').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.product-slider-three').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 1501,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    $('.countdown-product-slider').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
            breakpoint: 1501,
            settings: {
                slidesToShow: 1,
            }
        }, ]
    });

    /*===========================================

                   Single Product Slide
                       
    =============================================*/
    $('.product-details-images').each(function () {
        var $this = $(this);
        var $thumb = $this.siblings('.product-details-thumbs');
        $this.slick({
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            dots: false,
            infinite: true,
            centerMode: false,
            centerPadding: 0,
            asNavFor: $thumb,
        });
    });
    $('.product-details-thumbs').each(function () {
        var $this = $(this);
        var $details = $this.siblings('.product-details-images');
        $this.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            dots: false,
            infinite: true,
            focusOnSelect: true,
            centerMode: true,
            centerPadding: 0,
            prevArrow: '<span class="slick-prev"><i class="ri-arrow-left-s-line"></i></span>',
            nextArrow: '<span class="slick-next"><i class="ri-arrow-right-s-line"></i></span>',
            asNavFor: $details,
            responsive: [{
                    breakpoint: 1024,
                    settings: {}
                },
                {
                    breakpoint: 600,
                    settings: {}
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]

        });
    });
    /*-- Product Details 2 Images Slider --*/
    $('.product-details-images-2').each(function () {
        var $this = $(this);
        var $thumb = $this.siblings('.product-details-thumbs-2');
        $this.slick({
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            dots: false,
            infinite: true,
            centerMode: false,
            centerPadding: 0,
            asNavFor: $thumb,
        });
    });
    $('.product-details-thumbs-2').each(function () {
        var $this = $(this);
        var $details = $this.siblings('.product-details-images-2');
        $this.slick({
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            vertical: true,
            verticalSwiping: true,
            dots: false,
            infinite: true,
            focusOnSelect: true,
            centerMode: false,
            centerPadding: 0,
            prevArrow: '<span class="slick-prev"><i class="fa fa-angle-up"></i></span>',
            nextArrow: '<span class="slick-next"><i class="fa fa-angle-down"></i></span>',
            asNavFor: $details,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
    });
    $('.slider-lg-image-box').slick({
        infinite: true,
        arrows: true,
        dots: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '<button class="slick-prev"><i class="ri-arrow-left-s-line"></i></button>',
        nextArrow: '<button class="slick-next"><i class="ri-arrow-right-s-line"></i></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });


        /*===========================================

                        Hover
                       
    =============================================*/

    $.fn.mousetip = function (tip, x, y) {

        var $this = $(this);

        $this.hover(function () {

            $(tip, this).show();

        }, function () {

            $(tip, this).hide().removeAttr('style');

        }).mousemove(function (e) {

            var mouseX = e.pageX;
            var mouseY = e.pageY;

            $(tip, this).show().css({

                top: mouseY,
                left: mouseX

            });
        });
    };

        /*===========================================

                      Pro Details Carousel
                       
    =============================================*/

    $('.pro-details-active').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        margin: 0,
        navText: [""],
        nav: true,
        dots: false,
        slideBy: 1,
        items: 1,
        responsiveClass: true,
    });

        /*===========================================

                  Destination Filter

    =============================================*/


    // Destination Filter
    $('#control li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });



    /*===========================================

                 login Toggle Class

    =============================================*/


    $(".toggle-password").on('click', function () {
        $(this).toggleClass("la-eye la-low-vision");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });


    
}(jQuery)

/*=========================================*/