<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>QUIZ || @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontEndAsset') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('frontEndAsset') }}/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset') }}/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset') }}/css/owl.css">
    <link rel="stylesheet" href="{{asset('frontEndAsset') }}/css/lightbox.css">
    <!--

    TemplateMo 557 Grad School

    https://templatemo.com/tm-557-grad-school

    -->
</head>

<body>


<!--header-->
@include('frontEnd.include.header')
@yield('content')
@include('frontEnd.include.footer')

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('frontEndAsset') }}/js/isotope.min.js"></script>
<script src="{{asset('frontEndAsset') }}/js/owl-carousel.js"></script>
<script src="{{asset('frontEndAsset') }}/js/lightbox.js"></script>
<script src="{{asset('frontEndAsset') }}/js/tabs.js"></script>
<script src="{{asset('frontEndAsset') }}/js/video.js"></script>
<script src="{{asset('frontEndAsset') }}/js/slick-slider.js"></script>
<script src="{{asset('frontEndAsset') }}/js/custom.js"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
        var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
            $('body, html').animate({
                    scrollTop: reqSectionPos },
                800);
        } else {
            $('body, html').scrollTop(reqSectionPos);
        }

    };

    var checkSection = function checkSection() {
        $('.section').each(function () {
            var
                $this = $(this),
                topEdge = $this.offset().top - 80,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                    currentId = $this.data('section'),
                    reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
        });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
        if($(e.target).hasClass('external')) {
            return;
        }
        e.preventDefault();
        $('#menu').removeClass('active');
        showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
        checkSection();
    });
</script>
</body>
</html>

