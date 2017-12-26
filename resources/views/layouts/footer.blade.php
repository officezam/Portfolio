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
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Login modal</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    Login/Registration - <a href="http://www.jquery2dotnet.com">jquery2dotnet.com</a>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email1" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Submit</button>
                                            <a href="javascript:;">Forgot your password?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Name</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <select class="form-control">
                                                        <option>Mr.</option>
                                                        <option>Ms.</option>
                                                        <option>Mrs.</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="Name" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">
                                            Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="col-sm-2 control-label">
                                            Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-2 control-label">
                                            Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" placeholder="Password" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">
                                        </div>
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary btn-sm">
                                                Save & Continue</button>
                                            <button type="button" class="btn btn-default btn-sm">
                                                Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a>
                                    <a href="#" class="btn btn-danger">Google</a>
                                    <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>

                                    <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>

                                    <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>

                                    <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>

                                    <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>

                                    <a href="{{ url('login/bitbucket') }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#myModal').modal('show');
</script>