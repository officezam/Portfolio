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







                            <form id="logout-form" action="http://just430.com/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="fqcqg5BaKYsxuuVXJd7z7jBTTDW8fMxbwymQEBMl">
                            </form>
                            </li>
                            </ul>
                        </div>
                    </div>
                    </nav>
                </div>






                <section id="qes" class="timeline gray-section">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="navy-line"></div>
                                <h1>amir</h1>
                                <p>Amir</p>
                            </div>
                        </div>
                        <div class="wrapper wrapper-content animated fadeInRight">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flash-message">
                                    </div> <!-- end .flash-message -->                        <div class="ibox float-e-margins">
                                        <div class="ibox-title">
                                            <h5>Pleasure you will gain:</h5>
                                            <br>
                                            <p>What is the Pleasure you will gain by making this change? Come up with as many answers as you can! Think of all the great things that will happen in your life as a result of successfully making this change, and dig deep within yourself for the emotional reasons too! There are 25 fields below so enter one idea in each field - you MUST think of at least five!'<br> </p>
                                        </div>
                                        <div class="ibox-content">
                                            <form action="http://just430.com/questions?goal=19" method="post" class="form-horizontal">

                                                <input type="hidden" name="_token" value="fqcqg5BaKYsxuuVXJd7z7jBTTDW8fMxbwymQEBMl">
                                                <input type="hidden" name="goal_id" value="19">







                                                <div class="form-group">
                                                    <label for="a1" class="col-sm-2 control-label">A:1</label>

                                                    <div class="col-sm-6">
                                                        <input id="a1" type="text" name="form_a[]" class="form-control"
                                                               placeholder="Required"
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="hr-line-dashed"></div>


                                                <div class="form-group">
                                                    <label for="a1" class="col-sm-2 control-label">A:2</label>

                                                    <div class="col-sm-6">
                                                        <input id="a1" type="text" name="form_a[]" class="form-control"
                                                               placeholder="Required"
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="hr-line-dashed"></div>



                                                <div class="form-group">
                                                    <label for="a1" class="col-sm-2 control-label">A:3</label>

                                                    <div class="col-sm-6">
                                                        <input id="a1" type="text" name="form_a[]" class="form-control"
                                                               placeholder="Required"
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="hr-line-dashed"></div>



                                                <div class="form-group">
                                                    <label for="a1" class="col-sm-2 control-label">A:4</label>

                                                    <div class="col-sm-6">
                                                        <input id="a1" type="text" name="form_a[]" class="form-control"
                                                               placeholder="Required"
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="hr-line-dashed"></div>


                                                <div class="form-group">
                                                    <label for="a1" class="col-sm-2 control-label">A:5</label>

                                                    <div class="col-sm-6">
                                                        <input id="a1" type="text" name="form_a[]" class="form-control"
                                                               placeholder="Required"
                                                               value="">
                                                    </div>
                                                </div>


                                                <div class="form-group" id="addMoreFields">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <button class="btn btn-info" onclick="addMoreAnsFields();" type="button">Add
                                                            Answer
                                                        </button>

                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-sm-8 col-sm-offset-4">

                                                        <button class="btn btn-white" type="reset">Cancel</button>
                                                        <button class="btn btn-primary" type="submit">Save & Proceed</button>
                                                    </div>
                                                </div>
                                            </form>
                                            ;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </section>







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


    <script>

        var totalFields = 5;
        function addMoreAnsFields() {

            totalFields++;
            fieldName = 'A:' + totalFields;
            if (totalFields > 25) {
                alert('you can only add 25 answer fields in each group');
                return false;
            }
            var inputField = getAnsFieldHTML(fieldName , totalFields);
            $(inputField).insertBefore("#addMoreFields");
        }

        function removeFields() {
            $(".remove"+totalFields).remove();
            totalFields--;
        }

        function getAnsFieldHTML(fieldName) {

            var html = '';
            html += '<div class="remove'+totalFields+'">';
            html += '<div class="hr-line-dashed"></div>';
            html += '<div class="form-group">';
            html += '<label for="a1" class="col-sm-2 control-label">' + fieldName + '</label>';
            html += '<div class="col-sm-6">';
            html += '<input type="text" name="form_a[]" class="form-control"';
            html += 'placeholder="Required"';
            html += '</div>';
            html += '</div>';
            html += '<i class="fa fa-minus-square-o" style="font-size:35px;color:red" onclick="removeFields()"></i>';
            html += '</div>';

            return html;
        }


    </script>

@endsection
<!-- end of page level js -->
