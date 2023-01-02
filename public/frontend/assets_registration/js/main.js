/*!
 
 * Licensed: Copy
 */

$(document).ready(function () {
    /* page navigation on load */

    var api;


    $.cookie("styleselected", 'style-green-light', {
        expires: 7
    });
    //$.cookie("sidebarFill", 'sidebar-fill', {
    //    expires: 7
    //});

    $.cookie("contentWidth", 'container-fluid', {
        expires: 7
    });
    
    $.cookie("fontsize", '14px', {
        expires: 7
    });
    $.cookie("wrappercorner", 'wrapper-square', {
        expires: 7
    });
    $.cookie("headerfixed", 'header-fixed-top', {
        expires: 7
    });

    //$.removeCookie("sidebarFill");
    //$('body').removeClass('sidebar-fill');


    //$.cookie("headerfillcolor", 'header-fill', {
    //    expires: 7
    //});

    //$.cookie("fullscreen", 'fullscreen', {
    //    expires: 7
    //});













    var url = window.location.href.split('#')[0];
    if ($('body').hasClass('horizontal-menu') === true) {
        var element = $('.sidebar-left #side-menu li a').filter(function () {
            return this.href == url;
        }).addClass('active').parent("li").addClass('active').closest('.nav').slideDown().parent().addClass('show').closest('.nav').slideDown().addClass('in').prev().addClass('show');

        $('.sidebar-left .nav li a').on('click', function () {
            if ($(this).hasClass('menudropdown') === true) {
                $(this).toggleClass("show").next().slideToggle().parent().addClass("in");
            }
        });
    } else {
        var element = $('.sidebar .nav .nav-link').filter(function () {
            return this.href == url;
            alert(url)
        }).addClass('active').parent(".nav-item").addClass('active').parents('.nav').slideDown().parents('.dropdown').addClass('show');
    }



    /* menu open close wrapper screen click close menu */
    $('.menu-btn').on('click', function (e) {
        e.stopPropagation();
        if ($('body').hasClass('sidemenu-open') == true) {
            $('body').removeClass('sidemenu-open');
        } else {
            $('body').addClass('sidemenu-open');
        }
    });

    if ($(document).width() <= 992) {
        $('body').removeClass('sidemenu-open');
        $('.wrapper').on('click', function () {
            if ($('body').hasClass('sidemenu-open') == true) {
                $('body').removeClass('sidemenu-open');
            }
        });
    }

    /* Sidebar navigation expand collapse */
    $('.sidebar .nav .dropdown-toggle').on('click', function () {
        if ($(this).closest('.dropdown').hasClass('show') === true) {
            $(this).next().slideToggle().closest('.dropdown').removeClass('show');
        } else {
            $(this).closest('.nav').find('.dropdown').removeClass('show').find('.nav').slideUp();
            $(this).next().slideToggle().closest('.dropdown').addClass('show');

        }

    });
    $('.nav-files .dropdown-toggle').on('click', function () {
        if ($(this).closest('.dropdown').hasClass('show') === true) {
            $(this).next().slideUp().closest('.dropdown').removeClass('show');
        } else {
            $(this).next().slideDown().closest('.dropdown').addClass('show');
        }

    });

    /* stop defualt event in card dropdown */
    $('.no-defaults').on('click', function (e) {
        e.stopPropagation();
    });

    /* select flag */
    $('.select-flag .dropdown-item').on('click', function () {
        var flagname = $(this).find('.flag-icon').attr('class');
        $(this).closest('.select-flag').find('.dropdown-toggle span').attr('class', flagname);
    });

    /* filter click open filter */
    if ($('body').hasClass('filtermenu-open') == true) {
        $('.filter-btn').find('i').html('close');
    }
    $('.filter-btn').on('click', function () {
        if ($('body').hasClass('filtermenu-open') == true) {
            $('body').removeClass('filtermenu-open');
            $(this).find('i').html('filter_list')

        } else {
            $('body').addClass('filtermenu-open');
            $(this).find('i').html('close')
        }
    });


    /* background image to cover */
    $('.background').each(function () {
        var imagewrap = $(this);
        var imagecurrent = $(this).find('img').attr('src');
        imagewrap.css('background-image', 'url("' + imagecurrent + '")');
        $(this).find('img').remove();
    });

    $('.dropdown-toggle').on('click', function () {
        var thisdd = $(this);
        thisdd.removeClass('active');
        setTimeout(function () {
            thisdd.addClass('active');
        }, 100);
        $('.dropdown').on('hidden.bs.dropdown', function () {
            var thisddopen = $(this).find('.dropdown-toggle');
            thisddopen.removeClass('active');
        });



    });

    /* chat btn floating script */
    $('.chat-btn ').on('click', function () {
        if ($(this).hasClass('active') != true) {
           
            
            var thiscb = $(this);
            thiscb.addClass('active');
            thiscb.next().addClass('active');
            setTimeout(function () {
                thiscb.next().addClass('show');
            }, 100);

            if (api != null) {
                api.dispose();
            }
            var ename = $("#user_name").text();
            var ID = $("#_urlChatID").val() + "#config.disableDeepLinking=true&config.disableAEC=true";
          
                const domain = 'meet.jit.si';
                const options = {
                   roomName: ID,
                    width: 356,
                    height: 388,
                    parentNode: document.querySelector('#_vid_chat_123'),
                    userInfo: {
                       
                        displayName: ename
                        
                    }
                    ,

                    configOverwrite: {
                        desktopSharingChromeDisabled: true,
                        desktopSharingFirefoxDisabled: true,
                        enableCalendarIntegration: false,

                        chromeExtensionBanner: {}
                    },
                    interfaceConfigOverwrite: {
                        // filmStripOnly: true,
                        // VERTICAL_FILMSTRIP: true,
                        // FILM_STRIP_MAX_HEIGHT: 300,
                        TILE_VIEW_MAX_COLUMNS: 1,
                        SHOW_JITSI_WATERMARK: false,
                        SHOW_WATERMARK_FOR_GUESTS: false,
                        startWithVideoMuted: false, 
                        SHOW_CHROME_EXTENSION_BANNER: false,
                        TOOLBAR_ALWAYS_VISIBLE: false,
                        VIDEO_LAYOUT_FIT: 'width',
                        TOOLBAR_BUTTONS: [
                             'microphone', 'camera', 'fodeviceselection', 'hangup', 'settings', 'tileview'
                        ],
                        DISABLE_FOCUS_INDICATOR: true,
                        //filmStripOnly: true,
                        MOBILE_APP_PROMO: false
                    }
                


                };
                 api = new JitsiMeetExternalAPI(domain, options);
                 api.executeCommand('toggleTileView');
                       
       

        }

    });






    $('.chat-close').on('click', function () {
        var thisccb = $(this);
        thisccb.closest('.chat-window').removeClass('show');
        if (api != null) {
            api.dispose();
        }
      //  $('#_frame_chat').attr('src', null);
        setTimeout(function () {
            thisccb.closest('.chat-window').removeClass('active');
            thisccb.closest('.chat-window').prev('.chat-btn').removeClass('active');
        }, 250);

    });



    /* footer and responive sizing */
    var footerheight = $('.footer').outerHeight();
    $('.footer').css('margin-top', -(footerheight)).prev('.content ').css('padding-bottom', footerheight);

    if ($(window).height() > 767) {
        /* mail-row height */
        $('.login-row-height').css('height', $(window).outerHeight() - $('.header').outerHeight() - $('.footer').outerHeight() - 50);
        $('.compose-row-height').css('height', $(window).outerHeight() - $('.header-container').outerHeight() - $('.footer').outerHeight() - 170);
        $('.mail-row-height').css('height', $(window).outerHeight() - $('.header-container').outerHeight() - $('.mail-header').outerHeight() - $('.footer').outerHeight() - 30);
        $('.file-row').css('min-height', $(window).outerHeight() - $('.header-container').outerHeight() - $('.mail-header').outerHeight() - $('.footer').outerHeight() - 30);
    }

    /* sidebar compact */
    if ($('body').hasClass('sidebar-compact') == true) {
        $('.sidebar').find('.dropdown').removeClass('show').find('.dropdown-toggle').next().hide();
    }

    /* sidebar small */
    if ($('body').hasClass('sidebar-icon') == true) {
        $('.sidebar').find('.dropdown').removeClass('show').find('.dropdown-toggle').next().hide();
    }
    $('.sidebar').on('mouseleave', function () {
        if ($('body').hasClass('sidebar-icon') || $('body').hasClass('sidebar-compact')) {
            $('.sidebar').find('.dropdown').removeClass('show').find('.dropdown-toggle').next().hide();
        }
    })

    /*  fixed header */
    if ($('body').hasClass('header-fixed-top') == true) {
        var headerheight = $('.header-container').outerHeight() + 15;
        $('.wrapper').css('padding-top', headerheight);
    }

    /* task dropdown action */
    $('#tasks a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    });
});



$(window).on('load', function () {
    $('.loader').fadeOut('slow');

    /* header active on scroll more than 50 px*/
    if ($(this).scrollTop() >= 30) {
        $('.header').addClass('active')
    } else {
        $('.header').removeClass('active')
    }

    $(window).on('scroll', function () {
        /* header active on scroll more than 50 px*/
        if ($(this).scrollTop() >= 30) {
            $('.header').addClass('active')
        } else {
            $('.header').removeClass('active')
        }
    });


    /* calander picker */
    //var start = moment().subtract(29, 'days');
    //var end = moment();

    //function cb(start, end) {
    //    $('#daterangeadminux span').html(start.format('MMM D, YY') + ' - ' + end.format('MMM D, YY'));
    //}

    //$('#daterangeadminux').daterangepicker({
    //    startDate: start,
    //    endDate: end,
    //    opens: 'left',
    //    ranges: {
    //        'Today': [moment(), moment()],
    //        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    //        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //        'This Month': [moment().startOf('month'), moment().endOf('month')],
    //        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //    }
    //}, cb);

    //cb(start, end);
    //$('#daterangeadminux').on('show.daterangepicker', function (ev, picker) {
    //    var thisdp = $('.daterangepicker');
    //    setTimeout(function () {
    //        thisdp.addClass('active');
    //    }, 100);
    //});
    //$('#daterangeadminux').on('hide.daterangepicker', function (ev, picker) {
    //    var thisdpc = $('.daterangepicker');
    //    thisdpc.removeClass('active');

    //});
    //var path = '../assets/img/background-part.png';
    //$('.daterangepicker').append('<div class="background" style="background-image: url(' + path + '); z-index:-1; height:80px;"><img src="../assets/img/background-part.png" alt="" style="display:none"></div>')
    ///* calander picker ends */

    ///* sidebar message close */
    //$('.close-btn').on('click', function(){
    //    $(this).closest('.card').fadeOut();
    //})
});

$(window).on('resize', function () {

    /* on resize close sidemenu */
    if ($('body').hasClass('no-sidemenu') != true) {
        if ($(document).width() <= 992) {
            $('body').removeClass('sidemenu-open');
        } else {
            $('body').addClass('sidemenu-open');
        }
    }

    /* footer and responive sizing */
    var footerheight = $('.footer').outerHeight();
    $('.footer').css('margin-top', -(footerheight)).prev('.content ').css('padding-bottom', footerheight);

    if ($(window).height() > 767) {
        /* mail-row height */
        $('.login-row-height').css('height', $(window).outerHeight() - $('.header').outerHeight() - $('.footer').outerHeight() - 50);
        $('.compose-row-height').css('height', $(window).outerHeight() - $('.header-container').outerHeight() - $('.footer').outerHeight() - 170);
        $('.mail-row-height').css('height', $(window).outerHeight() - $('.header-container').outerHeight() - $('.mail-header').outerHeight() - $('.footer').outerHeight() - 30);
        $('.file-row').css('min-height', $(window).outerHeight() - $('.header-container').outerHeight() - $('.mail-header').outerHeight() - $('.footer').outerHeight() - 30);
    }
});


$('.wrapper').on('scroll', function () {
    /*window scoll event on scroll fill header to avoid overlapping content visible */
    if ($(this).scrollTop() > 20) {
        $('.header-container').addClass('header-fill');
    } else {
        $('.header-container').removeClass('header-fill');
    }
});
