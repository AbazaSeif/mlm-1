
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{url('public')}}/assets/images/favicon_1.ico">

        <title>Super-Admin::Login</title>

        <link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public')}}/assets/css/responsive.css" rel="stylesheet" type="text/css" />


        <script src="{{url('public')}}/assets/js/modernizr.min.js"></script>

        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> Sign In to <strong class="text-custom">MLM</strong></h3>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="{{url('checkLogin')}}" method="post">
   {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="email" name="email" value="{{ old('email') }}">
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"
                                        type="submit">Log In
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                                    your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
   
            
        </div>
        
        

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
        <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{url('public')}}/assets/js/detect.js"></script>
        <script src="{{url('public')}}/assets/js/fastclick.js"></script>
        <script src="{{url('public')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{url('public')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{url('public')}}/assets/js/waves.js"></script>
        <script src="{{url('public')}}/assets/js/wow.min.js"></script>
        <script src="{{url('public')}}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{url('public')}}/assets/js/jquery.scrollTo.min.js"></script>


        <script src="{{url('public')}}/assets/js/jquery.core.js"></script>
        <script src="{{url('public')}}/assets/js/jquery.app.js"></script>
	
	</body>


</html>