<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Smart-Solution">
    <meta name="author" content="iwthemes.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Theme CSS -->
    <link type="text/css" media="screen" rel="stylesheet" href="{{ asset('/assets/') }}/css/style.css"/>
    <!-- Responsive CSS -->
    <link type="text/css" media="screen" rel="stylesheet" href="{{ asset('/assets/') }}/css/theme-responsive.css"/>
    <!-- Skins Theme -->
    <link type="text/css" media="screen" rel="stylesheet" href="#" class="skin_color"/>

    <!-- Head Libs -->
    <script src="{{ asset('/assets/') }}/js/modernizr.js"></script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('/assets/') }}/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="{{ asset('/assets/') }}/img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/assets/') }}/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/assets/') }}/img/icons/apple-touch-icon-114x114.png">

{{--    <!-- styles for IE -->--}}
{{--    <!--[if lte IE 8]>--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/') }}/css/ie/ie.css" media="screen" />--}}
{{--    <![endif]-->--}}


{{--    <!--[if lte IE 8]>--}}
{{--    <script src="js/responsive/html5shiv.js"></script>--}}
{{--    <script src="js/responsive/respond.js"></script>--}}
{{--    <![endif]-->--}}
</head>
<body>

<!--Preloader-->
<div class="preloader">
    <div class="status">&nbsp;</div>
</div>
<!--End Preloader-->

<!-- Theme-options -->
<!-- End Theme-options -->

<!-- layout-->
<div id="layout" class="layout-wide">
    <!-- Login Client -->
    <div class="jBar">
        <div class="container">
            <div class="row padding-top-mini">
                <!-- Item service-->
                <div class="col-md-3">
                    <div class="item-service border-right">
                        <div class="row head-service">
                            <div class="col-md-2">
                                <i class="fa fa-check-square"></i>
                            </div>
                            <div class="col-md-10">
                                <h5>Login or create new account.</h5>
                            </div>
                        </div>
                        <p>Pellentesque habitant morbi fames ac turpis egestas. Vestibulum tortor quam. Pellentesque habitant</p>
                    </div>
                </div>
                <!-- End Item service-->

                <!-- Item service-->
                <div class="col-md-3"></div>
                <!-- End Item service-->

                <!-- Item service-->
                <div class="col-md-3"></div>
                <!-- End Item service-->

                <!-- Login-->
                <div class="col-md-3">
                    <h4>Admin Login</h4>
                    <form>
                        <input type="email" placeholder="Username" required>
                        <input type="password" placeholder="Password" required>
                        <input type="submit" class="btn btn-primary" value="sign in">
                        <span>Or</span>
                        <input type="submit" class="btn btn-primary" value="Register">
                    </form>
                </div>
                <!-- ENd Login-->

                <span class="jTrigger downarrow" style="background-color: #00A8FF;"><i class="fa fa-minus"></i></span>
            </div>
        </div>
    </div>
    <span class="jRibbon jTrigger up" title="Login" style="background-color: #00A8FF;"><i class="fa fa-plus"></i></span>
    <div class="line" style="background-color: #00A8FF;"></div>
    <!-- End Login Client -->

    @include('front.header.header')

    <!-- Slide Section-->
    @yield('slider')
    <!-- End Slide Section-->

    <!-- box-action -->
    @yield('content')
    <!-- End post-testimonials -->

    <!-- Boxes Info -->
    <!-- End Boxes Info -->

    <!-- Important Info -->
    <!-- End Important Info -->

    <!-- footer top-->
    @include('front.footer.footer')
    <!-- End footer bottom-->
</div>
<!-- End layout-->

<!-- ======================= JQuery libs =========================== -->
<!-- jQuery local-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/jquery.js"></script>
<!--Nav-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/nav/tinynav.js"></script>
<script type="text/javascript" src="{{ asset('/assets/') }}/js/nav/superfish.js"></script>
<script type="text/javascript" src="{{ asset('/assets/') }}/js/nav/hoverIntent.js"></script>
<script src="{{ asset('/assets/') }}/js/nav/jquery.sticky.js" type="text/javascript"></script>
<!--Totop-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/totop/jquery.ui.totop.js" ></script>
<!--Slide Revolution-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/rs-plugin/js/jquery.themepunch.tools.min.js" ></script>
<script type='text/javascript' src='{{ asset('/assets/') }}/js/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
<!--Ligbox-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/fancybox/jquery.fancybox.js"></script>
<!-- carousel.js-->
<script src="{{ asset('/assets/') }}/js/carousel/carousel.js"></script>
<!-- Twitter Feed-->
<script src="{{ asset('/assets/') }}/js/twitter/jquery.tweet.js"></script>
<!-- flickr Feed-->
<script src="{{ asset('/assets/') }}/js/flickr/jflickrfeed.min.js"></script>
<!--Scroll-->
<script src="{{ asset('/assets/') }}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Maps -->
<script src="{{ asset('/assets/') }}/js/maps/gmap3.js"></script>
<!-- Filter -->
<script src="{{ asset('/assets/') }}/js/filters/jquery.isotope.js" type="text/javascript"></script>
<!-- Parallax-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/parallax/jquery.inview.js"></script>
<script type="text/javascript" src="{{ asset('/assets/') }}/js/parallax/nbw-parallax.js"></script>
<!--Theme Options-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/theme-options/theme-options.js"></script>
<script type="text/javascript" src="{{ asset('/assets/') }}/js/theme-options/jquery.cookies.js"></script>
<!-- Bootstrap.js-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/bootstrap/bootstrap.js"></script>
<!--MAIN FUNCTIONS-->
<script type="text/javascript" src="{{ asset('/assets/') }}/js/main.js"></script>
<!-- ======================= End JQuery libs =========================== -->

<!--Slider Function-->
<script type="text/javascript">
    var revapi;
    jQuery(document).ready(function() {
        revapi = jQuery('.tp-banner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:580,
                spinner:"spinner4",
                hideThumbs:10,
                fullWidth:"on",
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",
                forceFullWidth:"on"
            });
    });
</script>
<!--End Slider Function-->

</body>
</html>
