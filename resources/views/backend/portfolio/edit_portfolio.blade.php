@extends('backend.layouts.app')

<!--page level css -->
@section('pagecss')
    <!--page level css -->
    <link href="{{ asset('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css') }}"  rel="stylesheet" media="screen"/>
    <link href="{{ asset('vendors/font-awesome-4.2.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
        <section class="content-header">
            <h1>Manage All Portfolio</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="backend">
                        <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                        Dashboard
                    </a>
                </li>
                <li>Portfolio</li>
                <li class="active">Update Portfolio</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Portfolio</h3>
                            <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('alert-success'))
                                <div class="col-xs-12">
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        {!! Session::get('alert-success') !!}</div>
                                </div>
                            @endif

                            <div class="row">
                                <form action="{{route('update_portfolio')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="icon_old" value="{{$portfolio->icon}}">
                                    <input type="hidden" name="id" value="{{$portfolio->id}}">
                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="twilio_auth_token" class="col-sm-2 control-label">Portfolio Title</label>
                                        <div class="col-sm-8">
                                            <input id="title" type="text" name="title" class="form-control" placeholder="Enter Portfolio Title" value="{{$portfolio->title or old('title')}}">
                                            @if( $errors->has('title'))
                                                <span class="help-block m-b-none">{{ $errors->first('title') }}.</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
                                        <label for="portfolio image" class="col-sm-2 control-label">Old Image</label>
                                        <div class="col-sm-8">
                                            <img src="{{ asset('portfolio/fullsize/'.$portfolio->icon) }}"  >
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
                                        <label for="twilio_auth_token" class="col-sm-2 control-label">New Portfolio Image</label>
                                        <div class="col-sm-8">
                                            <input id="title" type="file" name="icon" class="form-control" placeholder="Choose Image" value="{{$portfolio->icon or old('icon')}}">
                                            @if( $errors->has('icon'))
                                                <span class="help-block m-b-none">{{ $errors->first('icon') }}.</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group{{ $errors->has('short_desc') ? ' has-error' : '' }}">
                                        <label for="twilio_auth_token" class="col-sm-2 control-label">Portfolio  Short Description</label>
                                        <div class="col-sm-8">
                                            <textarea style="height: 300px" class="form-control" placeholder="Enter Portfolio Short Description" name="short_desc" rows="3">{{$portfolio->short_desc or old('short_desc')}}</textarea>
                                            @if( $errors->has('short_desc'))
                                                <span class="help-block m-b-none">{{ $errors->first('short_desc') }}.</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="row pd-15">
                                        <div class='col-lg-12'>
                                            <!-- /.box -->
                                            <div class='box well well-sm'>
                                                <div class='box-header'>
                                                    <h3 class='box-title text-info'>
                                                        Portfolio Detail Description
                                                        <small>For detailed page</small>
                                                    </h3>
                                                    <!-- tools box -->
                                                    <div class="pull-right box-tools"></div>
                                                    <!-- /. tools -->
                                                </div>
                                                <!-- /.box-header -->
                                                <div class='box-body pad'>
                                                        <textarea class="textarea editor-cls" name="description" placeholder="Write Portfolio Detail">{{ $portfolio->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col-->
                                    </div>
                                    {{--<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">--}}
                                        {{--<label for="twilio_auth_token" class="col-sm-2 control-label">Portfolio Description</label>--}}
                                        {{--<div class="col-sm-12">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="panel panel-success">--}}
                                                    {{--<div class="panel-heading">--}}
                                                        {{--<div class="text-muted bootstrap-admin-box-title editor-clr">--}}
                                                            {{--<i class="livicon" data-name="thermo-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>--}}
                                                            {{--CKEditor Full--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="bootstrap-admin-panel-content">--}}
                                                        {{--<textarea id="ckeditor_full" name="description"></textarea>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <button class="btn btn-white" type="reset">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row end-->
        </section>
    </aside>
@endsection
<!-- begining of page level js -->
@section('pagejs')

    <!-- Bootstrap WYSIHTML5 -->
    <script  src="{{ asset('vendors/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('vendors/ckeditor/adapters/jquery.js')}}" type="text/javascript" ></script>
    <script  src="{{ asset('vendors/tinymce/js/tinymce/tinymce.min.js')}}" type="text/javascript" ></script>
    <script  src="{{ asset('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3.js')}}" type="text/javascript"></script>
    <script  src="{{ asset('js/pages/editor.js')}}" type="text/javascript"></script>

    {{--<script src="//code.jquery.com/jquery-2.2.1.min.js"></script>--}}
    {{--<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}



@endsection
<!-- end of page level js -->
