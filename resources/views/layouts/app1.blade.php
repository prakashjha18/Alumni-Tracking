<!DOCTYPE html>
<html class="no-js" lang="zxx">
@include('includes.head')
<body>
<!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

    <!--== Header Area Start ==-->
@include('includes.header')
<!--== Header Area End ==-->
@yield('content')
<!--== Footer Area Start ==-->
@include('includes.footer')
<!--== Footer Area End ==-->

<!--== Scroll Top ==-->
<a href="#" class="scroll-top">
    <i class="fa fa-angle-up"></i>
</a>
<!--== Scroll Top ==-->

<!-- SITE SCRIPT  -->

<!-- Jquery JS  -->
<script src="{{asset('assets\vendor\jquery\jquery-3.3.1.min.js')}}"></script>

<!-- POPPER JS -->
<script src="{{asset('assets\vendor\bootstrap\js\popper.min.js')}}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{asset('assets\vendor\bootstrap\js\bootstrap.min.js')}}"></script>
<script src="{{asset('assets\vendor\navbar\bootstrap-4-navbar.js')}}"></script>

<!--owl-->
<script src="{{asset('assets\vendor\owl-carousel\owl.carousel.min.js')}}"></script>

<!--Waypoint-->
<script src="{{asset('assets\vendor\waypoint\waypoints.min.js')}}"></script>

<!--CounterUp-->
<script src="{{asset('assets\vendor\counterup\jquery.counterup.min.js')}}"></script>

<!--isotope-->
<script src="{{asset('assets\vendor\isotope\isotope.pkgd.min.js')}}"></script>

<!--magnific-->
<script src="{{asset('assets\vendor\magnific\jquery.magnific-popup.min.js')}}"></script>

<!--Smooth Scroll-->
<script src="{{asset('assets\vendor\smooth-scroll\jquery.smooth-scroll.min.js')}}"></script>

<!--Jquery Easing-->
<script src="{{asset('assets\vendor\jquery-easing\jquery.easing.1.3.min.js')}}"></script>

<!--Nice Select -->

<script src="{{asset('assets\vendor\nice-select\jquery.nice-select.js')}}"></script>

<!--Jquery Valadation -->
<script src="{{asset('assets\vendor\validation\jquery.validate.min.js')}}"></script>
<script src="{{asset('assets\vendor\validation\additional-methods.min.js')}}"></script>

<!--off-canvas js -->
<script src="{{asset('assets\vendor\js-offcanvas\js\js-offcanvas.pkgd.min.js')}}"></script>

<!-- Countdown -->
<script src="{{asset('assets\vendor\jquery.countdown\jquery.countdown.min.js')}}"></script>

<!-- custom js: main custom theme js file  -->
<script src="{{asset('assets\js\theme.min.js')}}"></script>

<!-- custom js: custom js file is added for easy custom js code  -->
<script src="{{asset('assets\js\custom.js')}}"></script>



</body>
</html>
