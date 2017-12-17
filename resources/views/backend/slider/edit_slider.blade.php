@extends('backend.layouts.app')

<!--page level css -->
@section('pagecss')

@endsection
<!--end of page level css-->

@section('content')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <section class="content-header">
            <h1>Manage All Slides</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="backend">
                        <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                        Dashboard
                    </a>
                </li>
                <li>Sliders</li>
                <li class="active">Edit Slide</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update Slider</h3>
                            <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form action="{{route('update_slider')}}" method="post" class="form-horizontal" enctype="multipart/form-data">

                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $slider->id }}">
                                    <input type="hidden" name="old_image" value="{{ $slider->image }}">
                                    {{--Twilio Authentication Token--}}
                                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                        <label for="twilio_auth_token" class="col-sm-2 control-label">Slider Title</label>
                                        <div class="col-sm-8">
                                            <input id="title" type="text" name="title" class="form-control" value="{{$slider->title or old('title')}}">
                                            @if( $errors->has('title'))
                                                <span class="help-block m-b-none">{{ $errors->first('title') }}.</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>


                                    {{--Twilio Account SSID--}}
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="twilio_account_sid" class="col-sm-2 control-label">Slider Short Description</label>
                                        <div class="col-sm-8">
                                            <textarea id="description" name="description" class="form-control">{{$slider->description or old('description')}}</textarea>
                                            @if( $errors->has('description'))
                                                <span class="help-block m-b-none">{{ $errors->first('description') }}.</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    {{--Twilio Primary Number--}}
                                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                        <label for="image" class="col-sm-2 control-label">Slider New Image</label>
                                        <div class="col-sm-8">
                                            <input id="image" type="file" name="image" class="form-control" value="{{$slider->image or old('image')}}">
                                            <label for="image" class="alert-danger">Image Size Must be (1900 x 1267) & Transparent</label>

                                            @if( $errors->has('image'))
                                                <span class="help-block m-b-none">{{ $errors->first('image') }}.</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label for="portfolio image" class="col-sm-2 control-label">Old Image</label>
                                        <div class="col-sm-8">
                                            <img src="{{ asset('slider/'.$slider->image) }}" style="width:100%">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
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


@endsection
<!-- end of page level js -->
