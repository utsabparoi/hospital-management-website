/***************************************************************************************************************
||||||||||||||||||||||||||||        CUSTOM SCRIPT FOR HOSPITALS            |||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
||||||||||||||||||||||||||||              TABLE OF CONTENT                  ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************
****************************************************************************************************************
01. Revolution slider
02. Sticky header
03. Prealoader
04. Language switcher
05. prettyPhoto
06. BrandCarousel
07. Testimonial carousel
08. ScrollToTop 
09. Cart Touch Spin
10. PriceFilter
11. Cart touch spin
12. Fancybox activator
13. ContactFormValidation
14. Scoll to target
15. PrettyPhoto

****************************************************************************************************************
||||||||||||||||||||||||||||            End TABLE OF CONTENT                ||||||||||||||||||||||||||||||||||||
****************************************************************************************************************/

"use strict";

//===RevolutionSliderActiver===
function revolutionSliderActiver() {
    if (jQuery('.rev_slider_wrapper #slider1').length) {
        jQuery("#slider1").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 5000,
            startwidth: 1170,
            startheight: 750,

            navigationType: "bullet",
            navigationArrows: "0",
            navigationStyle: "preview4",

            dottedOverlay: 'yes',

            hideTimerBar: "off",
            onHoverStop: "off",
            navigation: {
                arrows: { enable: true }
            },
            gridwidth: [1170],
            gridheight: [750]
        });
    };
}



//====Main menu===
function mainmenu() {
    //Submenu Dropdown Toggle
    if (jQuery('.main-menu li.dropdown ul').length) {
        jQuery('.main-menu li.dropdown').append('<div class="dropdown-btn"></div>');

        //Dropdown Button
        jQuery('.main-menu li.dropdown .dropdown-btn').click(function () {
            jQuery(this).prev('ul').slideToggle(500);
        });
    }

}



//===Header Sticky===
function stickyHeader() {
    if (jQuery('.stricky').length) {
        var strickyScrollPos = 100;
        if (jQuery(window).scrollTop() > strickyScrollPos) {
            jQuery('.stricky').addClass('stricky-fixed');
            jQuery('.scroll-to-top').fadeIn(1500);
        } else if (jQuery(this).scrollTop() <= strickyScrollPos) {
            jQuery('.stricky').removeClass('stricky-fixed');
            jQuery('.scroll-to-top').fadeOut(1500);
        }
    };
}



//===scoll to Top===
function scrollToTop() {
    if (jQuery('.scroll-to-target').length) {
        jQuery(".scroll-to-target").click(function () {
            var target = jQuery(this).attr('data-target');
            // animate
            jQuery('html, body').animate({
                scrollTop: jQuery(target).offset().top
            }, 1000);

        });
    }
}



//=== Prealoder===
function prealoader() {
    if (jQuery('.preloader').length) {
        jQuery('.preloader').delay(100).fadeOut(100);
    }
}



//===Language switcher===
function languageSwitcher() {
    if (jQuery("#polyglot-language-options").length) {
        jQuery('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
            effect: 'slide',
            animSpeed: 500,
            testMode: true,
            onChange: function (evt) {
                alert("The selected language is: " + evt.selectedItem);
            }

        });
    };
}



// Search Toggle Btn
function search() {
    if (jQuery('.toggle-search').length) {
        jQuery('.toggle-search').on('click', function () {
            jQuery('.header-search').slideToggle(300);
        });

    }
}



//=== History Carousel ===
function madicalCarousel() {
    if (jQuery('.medical-departments-carousel').length) {
        jQuery('.medical-departments-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            autoplay: 6000,
            smartSpeed: 700,
            navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        })
    }
}






//=== Testimonial Carousel===
function testimonialCarousel() {
    if (jQuery('.testimonial-carousel').length) {
        jQuery('.testimonial-carousel').owlCarousel({
            dots: true,
            loop: true,
            margin: 30,
            nav: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: true,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 2
                },
                1100: {
                    items: 4
                },
                1200: {
                    items: 4
                }
            }
        });
    }
}



//=== History Carousel ===
function facilitiesCarousel() {
    if (jQuery('.facilities-carousel').length) {
        jQuery('.facilities-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            autoplay: 6000,
            smartSpeed: 700,
            navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1100: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }
}



//===Achivement Carousel===
function serviceCarousel() {
    if (jQuery('.servicecarousel').length) {
        jQuery('.servicecarousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplayHoverPause: false,
            autoplay: 10000,
            smartSpeed: 700,
            navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    }
}



//=== History Carousel ===
function certificatesCarousel() {
    if (jQuery('.certificates').length) {
        jQuery('.certificates').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 700,
            navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    }
}



//===Prettyphoto Lightbox===
function prettyPhoto() {
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        slideshow: 3000,
        autoplay_slideshow: false,
        fullscreen: true,
        social_tools: false
    });
}



// ===Project===
function projectMasonaryLayout() {
    if (jQuery('.masonary-layout').length) {
        jQuery('.masonary-layout').isotope({
            layoutMode: 'masonry'
        });
    }

    if (jQuery('.post-filter').length) {
        jQuery('.post-filter li').children('span').click(function () {
            var Self = jQuery(this);
            var selector = Self.parent().attr('data-filter');
            jQuery('.post-filter li').children('span').parent().removeClass('active');
            Self.parent().addClass('active');


            jQuery('.filter-layout').isotope({
                filter: selector,
                animationOptions: {
                    duration: 500,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }

    if (jQuery('.post-filter.has-dynamic-filter-counter').length) {
        // var allItem = jQuery('.single-filter-item').length;

        var activeFilterItem = jQuery('.post-filter.has-dynamic-filter-counter').find('li');

        activeFilterItem.each(function () {
            var filterElement = jQuery(this).data('filter');
            console.log(filterElement);
            var count = jQuery('.gallery-content').find(filterElement).length;

            jQuery(this).children('span').append('<span class="count"><b>' + count + '</b></span>');
        });
    };
}



//===Brand Carousel===
function brandCarousel() {
    if (jQuery('.brand').length) {
        jQuery('.brand').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1100: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    }
}



//===Event Carousel===
function eventCarousel() {
    if (jQuery('.event-carousel').length) {
        jQuery('.event-carousel').owlCarousel({
            dots: false,
            loop: true,
            margin: 30,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: false,
            autoplay: 6000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1100: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    }
}



//=== Fact counter ===
function CounterNumberChanger() {
    var timer = jQuery('.timer');
    if (timer.length) {
        timer.appear(function () {
            timer.countTo();
        })
    }

}



//=== Tool tip ===
function tooltip() {
    if (jQuery('.tool_tip').length) {
        jQuery('.tool_tip').tooltip();
    };
    jQuery
}



//=== Accordion ===
function accordion() {
    if (jQuery('.accordion-box').length) {
        jQuery('.accordion-box .accord-btn').click(function () {
            if (jQuery(this).hasClass('active') !== true) {
                jQuery('.accordion-box .accord-btn').removeClass('active');
            }

            if (jQuery(this).next('.accord-content').is(':visible')) {
                jQuery(this).removeClass('active');
                jQuery(this).next('.accord-content').slideUp(500);
            }

            else {
                jQuery(this).addClass('active');
                jQuery('.accordion-box .accord-content').slideUp(500);
                jQuery(this).next('.accord-content').slideDown(500);
            }
        });
    }
}



//=== Cart Touch Spin ===
function cartTouchSpin() {
    if (jQuery('.quantity-spinner').length) {
        jQuery("input.quantity-spinner").TouchSpin({
            verticalbuttons: true
        });
    }
}



// Select menu 
function selectDropdown() {
    if (jQuery(".selectmenu").length) {
        jQuery(".selectmenu").selectmenu();

        var changeSelectMenu = function (event, item) {
            jQuery(this).trigger('change', item);
        };
        jQuery(".selectmenu").selectmenu({ change: changeSelectMenu });
    };
}



//  Price Filter
function priceFilter() {
    if (jQuery('.price-ranger').length) {
        jQuery('.price-ranger #slider-range').slider({
            range: true,
            min: 10,
            max: 200,
            values: [11, 99],
            slide: function (event, ui) {
                jQuery('.price-ranger .ranger-min-max-block .min').val('jQuery' + ui.values[0]);
                jQuery('.price-ranger .ranger-min-max-block .max').val('jQuery' + ui.values[1]);
            }
        });
        jQuery('.price-ranger .ranger-min-max-block .min').val('jQuery' + jQuery('.price-ranger #slider-range').slider('values', 0));
        jQuery('.price-ranger .ranger-min-max-block .max').val('jQuery' + jQuery('.price-ranger #slider-range').slider('values', 1));
    };
}



// ===Date picker ===
function datepicker() {
    if (jQuery('#datepicker').length) {
        jQuery('#datepicker').datepicker();
    };
}



//=== Time picker===
function timepicker() {
    jQuery('input[name="time"]').ptTimeSelect();
}



//=== CountDownTimer===
function countDownTimer() {
    if (jQuery('.time-countdown').length) {
        jQuery('.time-countdown').each(function () {
            var Self = jQuery(this);
            var countDate = Self.data('countdown-time'); // getting date

            Self.countdown(countDate, function (event) {
                jQuery(this).html('<h2>' + event.strftime('%D : %H : %M : %S') + '</h2>');
            });
        });
    };
    if (jQuery('.time-countdown-two').length) {
        jQuery('.time-countdown-two').each(function () {
            var Self = jQuery(this);
            var countDate = Self.data('countdown-time'); // getting date

            Self.countdown(countDate, function (event) {
                jQuery(this).html('<li> <div class="box"> <span class="days">' + event.strftime('%D') + '</span> <span class="timeRef">days</span> </div> </li> <li> <div class="box"> <span class="hours">' + event.strftime('%H') + '</span> <span class="timeRef">hours</span> </div> </li> <li> <div class="box"> <span class="minutes">' + event.strftime('%M') + '</span> <span class="timeRef">minutes</span> </div> </li> <li> <div class="box"> <span class="seconds">' + event.strftime('%S') + '</span> <span class="timeRef">seconds</span> </div> </li>');
            });
        });
    };
}



//=== Contact Form Validation ===
if (jQuery("#contact-form").length) {
    jQuery("#contact-form").validate({
        submitHandler: function (form) {
            var form_btn = jQuery(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            jQuery(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            jQuery(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        jQuery(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    jQuery(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () { jQuery(form_result_div).fadeOut('slow') }, 6000);
                }
            });
        }
    });
}



//=== Add comment Form Validation ===
if (jQuery("#add-comment-form").length) {
    jQuery("#add-comment-form").validate({
        submitHandler: function (form) {
            var form_btn = jQuery(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            jQuery(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            jQuery(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        jQuery(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    jQuery(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () { jQuery(form_result_div).fadeOut('slow') }, 6000);
                }
            });
        }
    });
}



//=== Review Form Validation ===
if (jQuery("#consultation-form").length) {
    jQuery("#consultation-form").validate({
        submitHandler: function (form) {
            var form_btn = jQuery(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            jQuery(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            jQuery(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        jQuery(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    jQuery(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () { jQuery(form_result_div).fadeOut('slow') }, 6000);
                }
            });
        }
    });
}



//=== Review Form Validation ===
if (jQuery("#review-form").length) {
    jQuery("#review-form").validate({
        submitHandler: function (form) {
            var form_btn = jQuery(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            jQuery(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            jQuery(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        jQuery(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    jQuery(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () { jQuery(form_result_div).fadeOut('slow') }, 6000);
                }
            });
        }
    });
}



//=== Review Form Validation ===
if (jQuery("#request-form").length) {
    jQuery("#request-form").validate({
        submitHandler: function (form) {
            var form_btn = jQuery(form).find('button[type="submit"]');
            var form_result_div = '#form-result';
            jQuery(form_result_div).remove();
            form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
            var form_btn_old_msg = form_btn.html();
            form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
            jQuery(form).ajaxSubmit({
                dataType: 'json',
                success: function (data) {
                    if (data.status == 'true') {
                        jQuery(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    jQuery(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function () { jQuery(form_result_div).fadeOut('slow') }, 6000);
                }
            });
        }
    });
}



// Elements Animation
if (jQuery('.wow').length) {
    var wow = new WOW({
        mobile: false
    });
    wow.init();
}



// Dom Ready Function
jQuery(document).ready(function () {
    (function (jQuery) {
        // add your functions
        revolutionSliderActiver();
        mainmenu();
        scrollToTop();
        search();
        languageSwitcher();
        selectDropdown();
        CounterNumberChanger();
        accordion();
        datepicker();
        projectMasonaryLayout();
        priceFilter();
        countDownTimer();
        madicalCarousel();
        cartTouchSpin();
        facilitiesCarousel();
        testimonialCarousel();
        serviceCarousel();
        brandCarousel();
        //prettyPhoto();
        //timepicker();
        tooltip();
        certificatesCarousel();
        eventCarousel()


    })(jQuery);
});



// Scroll Function
jQuery(window).scroll(function () {
    (function (jQuery) {
        stickyHeader()

    })(jQuery);
});
