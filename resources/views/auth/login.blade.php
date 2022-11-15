<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login | Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/styles.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="hp_bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card op_w_03">
                    <div class="card-body">

                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <h2 class="text-white">
                                        You are welcome!
                                    </h2>
                            </div>
                        </div>

                        <h4 class="text-white text-center font-size-23"><b>Sign In</b></h4>
    
                        <div class="p-3">
                                  <!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

                <x-input-error :messages="$errors->get('email')" class="mt-2 text-center text-danger alert alert-danger alert-dismissible fade show" role="alert"/>

              <x-input-error :messages="$errors->get('password')" class="mt-2 text-center text-danger alert alert-danger alert-dismissible fade show" role="alert"/>


        <form method="POST" action="{{ route('login') }}">
            @csrf
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter Your email address">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="password" type="password"
                                name="password"
                                required autocomplete="current-password"  placeholder="Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">


                                            <input type="checkbox" class="custom-control-input" id="remember_me">
                                            <label class="form-label ms-1 text-white" for="remember_me">{{ __('Remember me') }}</label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                                        {{ __('Log in') }}
                                    </button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-sm-7 mt-3">
                                        <a  href="{{ route('password.request') }}" class="text-white"><i class="mdi mdi-lock"></i> {{ __('Forgot your password?') }}</a>
                                    </div>
                                    <div class="col-sm-5 mt-3">
                                        <a href="/register" class="text-white"><i class="mdi mdi-account-circle"></i> Create an account</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

