@extends('backend.layouts.app')

<!--page level css -->
@section('pagecss')
    <!--page level css -->
    <link href="{{ asset('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3.css') }}"  rel="stylesheet" media="screen"/>
    <link href="{{ asset('vendors/font-awesome-4.2.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/pages/editor.css') }}" rel="stylesheet" type="text/css"/>

    <!--end of page level css-->
@endsection
<!--end of page level css-->

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <section class="content-header">
            <h1>Manage All Services</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="backend">
                        <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                        Dashboard
                    </a>
                </li>
                <li>Services</li>
                <li class="active">Edit Service</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Service</h3>
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
                                <form action="{{route('save_service')}}" method="post" class="form-horizontal" enctype="multipart/form-data">

                                    {{ csrf_field() }}

                                    {{--Twilio Authentication Token--}}
                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="twilio_auth_token" class="col-sm-2 control-label">Service Title</label>
                                        <div class="col-sm-8">
                                            <input id="title" type="text" name="title" class="form-control" value="{{$service->title or old('title')}}">
                                            @if( $errors->has('title'))
                                                <span class="help-block m-b-none">{{ $errors->first('title') }}.</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="image" class="col-sm-2 control-label">Services Icon</label>
                                        <div class="col-sm-8">

                                            <!-- Make an div for show icon-->
                                            <div id="view-fa"></div>


                                            <div class="fac fac-checkbox fac-default ">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <input id="box-example" type="radio" name="icon" value='<i class="fa fa-4x fa-diamond text-danger mb-3 sr-icons" data-sr-id="2" ></i>' >
                                                <label for="box-example">
                                                    <i class="fa fa-4x fa-diamond text-danger mb-3 sr-icons" data-sr-id="2" ></i>
                                                </label>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <input id="box-example" type="radio" name="icon" value='<i class="fa fa-4x fa-paper-plane text-danger mb-3 sr-icons" data-sr-id="3" ></i>' >
                                                <label for="box-example">
                                                    <i class="fa fa-4x fa-paper-plane text-danger mb-3 sr-icons" data-sr-id="3" ></i>
                                                </label>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <input id="box-example" type="radio" name="icon" value='<i class="fa fa-4x fa-newspaper-o text-danger mb-3 sr-icons" data-sr-id="4" ></i>' >
                                                <label for="box-example">
                                                    <i class="fa fa-4x fa-newspaper-o text-danger mb-3 sr-icons" data-sr-id="4" ></i>
                                                </label>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <input id="box-example" type="radio" name="icon" value='<i class="fa fa-4x fa-heart text-danger mb-3 sr-icons" data-sr-id="5" ></i>' >
                                                <label for="box-example">
                                                    <i class="fa fa-4x fa-heart text-danger mb-3 sr-icons" data-sr-id="5" ></i>
                                                </label>
                                            </div>
                                            @if( $errors->has('icon'))
                                                <span class="help-block m-b-none">{{ $errors->first('icon') }}.</span>
                                            @endif
                                        </div>
                                    </div>





                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="twilio_auth_token" class="col-sm-2 control-label">Service Description</label>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="panel panel-success">
                                                    <div class="panel-heading">
                                                        <div class="text-muted bootstrap-admin-box-title editor-clr">
                                                            <i class="livicon" data-name="thermo-down" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                            CKEditor Full
                                                        </div>
                                                    </div>
                                                    <div class="bootstrap-admin-panel-content">
                                                        <textarea id="ckeditor_full" name="description">{{ $service->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
@endsection
<!-- end of page level js -->
