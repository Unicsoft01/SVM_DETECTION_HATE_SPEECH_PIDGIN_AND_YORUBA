<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register |  - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('/')}}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{url('/')}}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{url('/')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{url('/')}}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{url('/')}}/assets/styles.css" rel="stylesheet" type="text/css" />

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
    
                        <h4 class="text-white text-center font-size-23"><b>Sign Up Now!</b></h4>
    
                        <div class="p-3 text-danger">
                                  <!-- Session Status -->
  
                     @if(count($errors) > 0)
                     @if($errors->get('name'))
                       <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <i class="mdi mdi-block-helper me-2"></i>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>  
                     @endif
                     @if($errors->get('email'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <i class="mdi mdi-block-helper me-2"></i>
                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>  
                     @endif
                     @if($errors->get('password'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <i class="mdi mdi-block-helper me-2"></i>
                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>  
                     @endif
                     @if($errors->get('password_confirmation'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <i class="mdi mdi-block-helper me-2"></i>
                          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                            
                     @endif
                     @endif

                


                

        <!-- Validation Errors -->

        <form method="POST" action="{{ route('register') }}">
            @csrf
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <label class="text-white">Name:</label>
                                        <input class="form-control" type="text" name="name"  required autofocus placeholder="Enter Your Fullname">
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <label class="text-white">Email:</label>
                                        <input class="form-control" type="email" type="email" name="email" :value="old('email')" required placeholder="Enter Your email address">
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <label class="text-white">State:</label>
                                        <input class="form-control" type="text" name="state" :value="kogi state" required  placeholder="Enter Your Current state">
                                    </div>
                                </div>
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <label class="text-white">Town:</label>
                                        <input class="form-control" type="text" name="town" :value="Anyigba" required  placeholder="Enter Your Current home town">
                                    </div>
                                </div>

                                <div class="form-group mb-3 row">
                                    <div class="col-12"><label class="text-white">Password:</label>
                                        <input class="form-control" id="password" type="password"
                                name="password"
                                required placeholder="Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <label class="text-white">Comfirm password:</label>
                                        <input class="form-control" id="password_confirmation" type="password"
                                name="password_confirmation"
                                required placeholder="Comfirm Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">


                                            <input type="checkbox" required class="custom-control-input" id="remember_me">
                                            <!-- <label class="form-label ms-1 text-white" for="remember_me">{{ __('I have read and agreed to the terms and conditions of this portal') }}</label>  -->
                                            <label class="form-label ms-1 text-white" for="remember_me">I have read and agreed to the terms and conditions of this portal</label> 
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                                        <!-- {{ __('Sign Up') }} -->
                                       Sign Up
                                    </button>
                                    </div>
                                </div>
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-12 mt-3">
                                        <a href="{{ route('login') }}" class="text-white"><i class="mdi mdi-account-circle text-center"></i> Already an account? Login</a>
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
            <span class="text-white text-center ml-5">
               Unicsoft Code and Research Inst. Anyigba
            </span>
            <!-- end container -->
        </div>
        <!-- end -->

        <!-- JAVASCRIPT -->
        <script src="{{url('/')}}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{url('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{url('/')}}/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{url('/')}}/assets/js/app.js"></script>

    </body>
</html>
