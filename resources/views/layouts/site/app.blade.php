<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SimpleOne - A Responsive Html5 Ecommerce Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=100">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link href="{{ asset('themes/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/css/bootstrap-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/css/flexslider.css') }}" type="text/css" media="screen" rel="stylesheet"/>
    <link href="{{ asset('themes/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/css/cloud-zoom.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/css/portfolio.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('themes/css/font-awesome.min.css') }}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{ asset('themes/http://html5shim.googlecode.com/svn/trunk/html5.js') }}"></script>
    <![endif]-->
    <!-- fav -->
    <link rel="shortcut icon" href="{{ asset('themes/assets/ico/favicon.ico') }}">
</head>
<body>
<!-- Header Start -->
@include('layouts.site.header')
<!-- Header End -->
<div id="maincontainer">
    @yield('content')
</div>
<!-- /maincontainer -->
<!-- Footer -->
@include('layouts.site.footer')
<!-- Footer End -->
<!-- javascript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('themes/js/jquery.js') }}"></script>
<script src="{{ asset('themes/js/bootstrap.js') }}"></script>
<script src="{{ asset('themes/js/respond.min.js') }}"></script>
<script src="{{ asset('themes/js/application.js') }}"></script>
<script src="{{ asset('themes/js/bootstrap-tooltip.js') }}"></script>
<script defer src="{{ asset('themes/js/jquery.fancybox.js') }}"></script>
<script defer src="{{ asset('themes/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('themes/js/cloud-zoom.1.0.2.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/jquery.carouFredSel-6.1.0-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/jquery.mousewheel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/jquery.touchSwipe.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/js/jquery.ba-throttle-debounce.min.js') }}"></script>
<script src="{{ asset('themes/js/jquery.isotope.min.js') }}"></script>
<script defer src="{{ asset('themes/js/custom.js') }}"></script>
</body>
</html>