@extends('backend.layouts.app')

<!--page level css -->
@section('pagecss')
    <link rel="stylesheet" href="{{ asset('vendors/wizard/jquery-steps/css/wizard.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/wizard/jquery-steps/css/jquery.steps.css') }}">
@endsection
<!--end of page level css-->

@section('content')
    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
        <section class="content-header">
            <h1>Add New Employee</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                        Dashboard
                    </a>
                </li>
                <li>Employee</li>
                <li class="active">Add New Employee</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                Add New Employee
                            </h3>
                            <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                    <i class="fa fa-fw fa-times removepanel clickable"></i>
                                                </span>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('save-employee') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <div class="form-group pad-top40">
                                        <label for="inputUsername" class="col-md-3 control-label">
                                            First Name
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="first_name" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                <input type="text" class="form-control" placeholder="First Name" value="{{ old('first_name') }}" name="first_name">
                                            </div>
                                            @if ($errors->has('first_name'))
                                                <div class=" has-error">
                                                        <span class="control-label has-error">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group pad-top40">
                                        <label for="inputUsername" class="col-md-3 control-label">
                                            Last Name
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="last_name" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                <input type="text" class="form-control" placeholder="Last Name" value="{{ old('last_name') }}" name="last_name">
                                            </div>
                                            @if ($errors->has('first_name'))
                                                <div class=" has-error">
                                                        <span class="control-label has-error">
                                                            <strong>{{ $errors->first('first_name') }}</strong>
                                                        </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-md-3 control-label">
                                            Email
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="mail" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                <input type="text" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}"/>

                                            </div>
                                            @if ($errors->has('email'))
                                                <div class=" has-error">
                                                    <span class="control-label has-error">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputpassword" class="col-md-3 control-label">
                                            Password
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                <input type="password" placeholder="Password" name="password" class="form-control"/>
                                            </div>
                                            @if ($errors->has('password'))
                                                <div class=" has-error">
                                                        <span class="control-label has-error">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputnumber" class="col-md-3 control-label">
                                            Phone Number
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="cellphone" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                                                    </span>
                                                <input type="text" placeholder="Phone Number" name="phone" class="form-control" value="{{ old('phone') }}"/>
                                            </div>
                                            @if ($errors->has('phone'))
                                                <div class=" has-error">
                                                        <span class="control-label has-error">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Profile Image</label>
                                        <div class="col-md-9">
                                                <input type="file" required name="profile_image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress" class="col-md-3 control-label">
                                            Address
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="livicon" data-name="doc-portrait" data-c="#000" data-hc="#000" data-size="18" data-loop="true"></i>
                                                                    </span>
                                                <input type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address') }}"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-primary">Submit</button>                                        &nbsp;
                                        <input type="reset" class="btn btn-danger hidden-xs" value="Reset"></div>
                                </div>
                            </form>
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
    <script type="text/javascript" src="{{ asset('vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/wizard/jquery-steps/js/wizard.js') }}"></script>
    <script src="{{ asset('vendors/wizard/jquery-steps/js/jquery.steps.js') }}"></script>
    <script src="{{ asset('vendors/wizard/jquery-steps/js/form_wizard.js') }}"></script>
@endsection
<!-- end of page level js -->
