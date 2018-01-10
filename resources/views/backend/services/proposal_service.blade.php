@extends('backend.layouts.app')

<!--page level css -->
@section('pagecss')
    <!--page level css -->
    {{--    <link href="{{ asset('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css') }}"  rel="stylesheet" media="screen"/>--}}
    {{--    <link href="{{ asset('vendors/font-awesome-4.2.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />--}}
    {{--<link href="{{ asset('css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>--}}

    {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    {{--    <link href="{{ asset('dist/css/fontawesome-iconpicker.min.css')}}" rel="stylesheet">--}}
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9] -->
    {{--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>--}}
    <!--end of page level css-->
@endsection
<!--end of page level css-->

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Editors</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true" id="livicon-45" style="width: 14px; height: 14px;"><svg height="14" version="1.1" width="14" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.0625px;" id="canvas-for-livicon-45"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#333333" stroke="none" d="M29.719,15.469L24,9.751V5H21V6.752L17.414,3.167L16.424000000000003,2.1769999999999996C16.19,1.9429999999999996,15.810000000000002,1.9429999999999996,15.575000000000003,2.1769999999999996L14.585000000000003,3.167L2.282,15.469C2.048,15.703,2.048,16.083,2.282,16.317999999999998L2.847,16.883999999999997C3.081,17.116999999999997,3.461,17.118,3.6959999999999997,16.883999999999997L16,4.58L28.304000000000002,16.884C28.537000000000003,17.117,28.918000000000003,17.118000000000002,29.153000000000002,16.884L29.718000000000004,16.318C29.952,16.083,29.952,15.704,29.719,15.469ZM16,6.701L6,16.701V30H12V19.6C12,19.269000000000002,12.269,19,12.6,19H19.4C19.730999999999998,19,20,19.269,20,19.6V30H26V16.701L16,6.701ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5ZM16,15.5L16,15.5L16,15.5L16,15.5L16,15.5Z" stroke-width="0" transform="matrix(0.4375,0,0,0.4375,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#333333" stroke="none" d="M18.4,20H13.599999999999998C13.267999999999997,20,12.999999999999998,20.269,12.999999999999998,20.6V30H19V20.6C19,20.269,18.731,20,18.4,20Z" transform="matrix(0.4375,0,0,0.4375,0,0)" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">Proposal</a>
                </li>
                <li class="active">Generator</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content paddingleft_right15">
            <b>Short Code (This Short code Use For user name,Business Name and Email)</b><p style="color: white; background-color: black">@{{clientName}} &nbsp;&nbsp; @{{BussinesName}} &nbsp;&nbsp; @{{Email}}</p>
            <!--main content-->
            <form action="{{route('update_service_proposal')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id" value='{{ $service->id }}' >

                <div class="row">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="text-muted bootstrap-admin-box-title editor-clr">
                                <i class="livicon" data-name="thermo-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white" id="livicon-47" style="width: 16px; height: 16px;"><svg height="16" version="1.1" width="16" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" id="canvas-for-livicon-47"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="#ffffff" stroke="none" d="M22,19.125V6C22,3.238,19.762,1,17,1S12,3.238,12,6V19.125C10.77,20.387,10,22.1,10,24C10,27.865000000000002,13.135,31,17,31S24,27.865000000000002,24,24C24,22.1,23.23,20.387,22,19.125ZM17,29C14.238,29,12,26.762,12,24C12,22.363,12.785,20.912,14,20V6C14,4.343,15.344,3,17,3S20,4.343,20,6V20H20.004V20.002C21.217,20.914,22,22.365,22,24C22,26.762,19.762,29,17,29Z" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="#ffffff" stroke="none" d="M19,20.555V14H15V20.555C13.809,21.246,13,22.524,13,24C13,26.207,14.789,28,17,28C19.209,28,21,26.207,21,24C21,22.523,20.191,21.246,19,20.555Z" stroke-width="0" transform="matrix(0.5,0,0,0.5,0,0)" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path></svg></i>
                                Proposal Generator
                            </div>
                        </div>
                        <div class="bootstrap-admin-panel-content">
                            <textarea id="ckeditor_full" name="description" style="visibility: hidden; display: none;">{{ $service->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-4">
                        <button class="btn btn-primary" type="submit">Save Propsal</button>
                    </div>
                </div>
            </form>
            <!--main content ends-->
        </section>
        <!-- content -->
    </aside>
@endsection
<!-- begining of page level js -->
@section('pagejs')

    <!-- Bootstrap WYSIHTML5 -->
    <script  src="{{ asset('vendors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('vendors/ckeditor/adapters/jquery.js')}}" type="text/javascript" ></script>
    {{--    <script  src="{{ asset('vendors/tinymce/js/tinymce/tinymce.min.js')}}" type="text/javascript" ></script>--}}
    {{--    <script  src="{{ asset('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js')}}" type="text/javascript"></script>--}}
    <script  src="{{ asset('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('js/pages/editor.js')}}" type="text/javascript"></script>

@endsection
<!-- end of page level js -->
