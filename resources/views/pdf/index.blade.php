<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Frontpage - Start Bootstrap Template</title>

    {{--<!-- Bootstrap core CSS -->--}}
{{--    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">--}}

    {{--<!-- Custom styles for this template -->--}}
    {{--<link href="{{ asset('css/business-frontpage.css')}}" rel="stylesheet">--}}


  </head>

  <body>


    <!-- Header with Background Image -->
    {{--<header class="business-header">--}}
      {{--<div class="container">--}}
        {{--<div class="row">--}}
          {{--<div class="col-lg-12">--}}
            {{--<h1 class="display-3 text-center text-white mt-4">Business Name or Tagline</h1>--}}
          {{--</div>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</header>--}}

    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-sm-12">
          {!!  $portfolioDetail->description !!}
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    {{--<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>--}}
    {{--<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}'"></script>--}}

  </body>

</html>
