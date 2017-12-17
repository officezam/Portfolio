<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Events Management</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{ asset('vendors/font-awesome-4.2.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/styles/black.css') }}" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="{{ asset('css/panel.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/metisMenu.css') }}" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
    @yield('pagecss')
    <!--end of page level css-->



</head>

<body class="skin-josh">

<!-- top navigation -->
@include('backend.layouts.header')
<!-- /top navigation -->
<div class="wrapper row-offcanvas row-offcanvas-left">

    <!-- Sidebar navigation -->
    @include('backend.layouts.sidebar')
    <!-- /Sidebar navigation -->


    <!-- page content -->
@yield('content')
<!-- /page content -->

</div>


<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--livicons-->
<script src="{{ asset('vendors/livicons/minified/raphael-min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendors/livicons/minified/livicons-1.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/josh.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/metisMenu.js') }}" type="text/javascript"> </script>
<script src="{{ asset('vendors/holder-master/holder.js') }}" type="text/javascript"></script>
<!-- end of global js -->

<!-- begining of page level js -->
@yield('pagejs')
<!-- end of page level js -->



</body>
</html>
