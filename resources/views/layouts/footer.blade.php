<!-- Large modal -->
<style>
    .nav-tabs {
        margin-bottom: 15px;
    }
    .sign-with {
        margin-top: 25px;
        padding: 20px;
    }
    div#OR {
        height: 30px;
        width: 30px;
        border: 1px solid #C2C2C2;
        border-radius: 50%;
        font-weight: bold;
        line-height: 28px;
        text-align: center;
        font-size: 12px;
        float: right;
        position: absolute;
        right: -16px;
        top: 40%;
        z-index: 1;
        background: #DFDFDF;
    }
</style>
{{--<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login modal</button>--}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> Login/Registration   </h4>
                <!-- Nav tabs -->
                <ul class="nav pull-right">
                    <li class="active" ><a href="#Login" class="btn btn-info" data-toggle="tab">Login</a></li>
                    <li><a href="#Registration" data-toggle="tab" class="btn btn-success">Registration</a></li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    {{--<div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">--}}
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                @if(\Session::has('login-error'))
                                    <p class="alert alert-danger">{{ Session::get('login-error') }}</p>
                                @endif
                                <form autocomplete="on" class="form-horizontal" method="POST" action="{{ route('frontlogin') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email1" name="email" placeholder="Enter Email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" value="" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form class="form-horizontal" method="POST" action="{{ route('save-client') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            First Name</label>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required placeholder="Enter First Name" />
                                                    @if ($errors->has('first_name'))
                                                        <div class=" has-error">
                                                        <span class="control-label has-error">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Last Name</label>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required placeholder="Enter Last Name" />
                                                    @if ($errors->has('last_name'))
                                                        <div class=" has-error">
                                                        <span class="control-label has-error" style="color:red;">
                                                            <strong>{{ $errors->first('last_name') }}</strong>
                                                        </span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">
                                            Business Name</label>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" name="business_name" value="{{ old('business_name') }}" required placeholder="Enter Business Name" />
                                                    @if ($errors->has('business_name'))
                                                        <div class=" has-error">
                                                        <span class="control-label has-error" style="color:red;">
                                                            <strong>{{ $errors->first('business_name') }}</strong>
                                                        </span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Email</label>
                                        <div class="col-sm-12">
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter Email" />
                                            @if ($errors->has('email'))
                                                <div class="has-error">
                                                        <span class="control-label has-error errors" style="color:red;">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="col-sm-2 control-label">
                                            Password</label>
                                        <div class="col-sm-12">
                                            <input type="password" class="form-control" id="mobile" name="password" value="{{ old('password') }}" required placeholder="Enter Password" />
                                            @if ($errors->has('password'))
                                                <div class="has-error">
                                                        <span class="control-label has-error" style="color:red;">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-sm">Save & Continue</button>
                                            <button type="reset" class="btn btn-default btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{--<div id="OR" class="hidden-xs">--}}
                        {{--OR</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4">--}}
                        {{--<div class="row text-center sign-with">--}}
                        {{--<div class="col-md-12">--}}
                        {{--<h3>--}}
                        {{--Sign in with</h3>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-12">--}}
                        {{--<div class="btn-group btn-group-justified">--}}
                        {{--<a href="#" class="btn btn-primary">Facebook</a>--}}
                        {{--<a href="#" class="btn btn-danger">Google</a>--}}
                        {{--<a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>--}}

                        {{--<a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>--}}

                        {{--<a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>--}}

                        {{--<a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>--}}

                        {{--<a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>--}}

                        {{--<a href="{{ url('login/bitbucket') }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>--}}

                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>