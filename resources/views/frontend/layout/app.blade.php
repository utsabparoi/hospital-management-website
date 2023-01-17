<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hospital project</title>

    <!-- Stylesheets -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/menu-style.css') }}">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <!--Color Themes-->
    <!--<link id="theme-color-file" href="css/color-themes/tealblue.css" rel="stylesheet">-->

    <!--Color Switcher Mockup-->
    <link href="{{ asset('frontend/css/color-switcher-design.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('frontend/images/logo/title-logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/images/logo/title-logo.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
@yield("content")






<!-- all js link -->
<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/s/popper.min.js') }}j"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/jquery.fancybox.js') }}js/"></script>
<script src="{{ asset('frontend/js/jquery.modal.min.js') }}"></script>
<script src="{{ asset('frontend/js/mmenu.polyfills.js') }}"></script>
<script src="{{ asset('frontend/js/mmenu.js') }}"></script>
<script src="{{ asset('frontend/js/appear.js') }}"></script>
<script src="{{ asset('frontend/js/mixitup.js') }}"></script>
<script src="{{ asset('frontend/js/owl.js') }}"></script>
<script src="{{ asset('frontend/js/wow.js') }}"></script>
<script src="{{ asset('frontend/js/menu-script.js') }}"></script>
<!-- <script src="js/owl.carousel.min.js"></script> -->
<script src="{{ asset('frontend/js/script.js') }}"></script>

<!--Scroll to top-->


<!-- main jQuery -->
<script src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>
<!-- Wow Script -->

<!-- bootstrap -->
<!-- <script src="js/bootstrap.min.js"></script> -->

<!-- owl carousel -->
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

<!-- jQuery ui js -->
<script src="{{ asset('frontend/assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>

<!-- thm custom script -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<!-- Mega Menu Js -->
<script src="{{ asset('frontend/js/menu-custom.js') }}"></script>
<!-- Lord Icon -->
{{--<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>--}}
<script src="{{ asset('frontend/js/lord-icon-2.1.0.js') }}"></script>

<!--banner-->
{{--<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>--}}
<script src="{{ asset('frontend/js/lottie-player.js') }}"></script>

<script>
    jQuery(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).fadeIn("fast");
            },
            function() {
                $('.dropdown-menu', this).fadeOut("fast");
            });
    });
</script>

<script>
    $('#show-search-box').click(function() {
        $("#hidden-search-box").toggle();
    });
</script>

<!-- banner box -->

<script>
    var div_top = $('.top-features').offset().top;

    $(window).scroll(function() {
        var window_top = $(window).scrollTop() - 0;
        if (window_top > div_top) {
            if (!$('.top-features').is('.sticky')) {
                $('.top-features').addClass('sticky');
            }
        } else {
            $('.top-features').removeClass('sticky');
        }
    });
</script>
<script src="{{ asset('frontend/js/jquery.youtube-background.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('[data-youtube], [data-vbg]').youtube_background();
    });

    document.querySelector('#ytbg2').addEventListener('video-background-pause', function() {
        console.log(arguments);
    });
</script>
</body>

</html>
