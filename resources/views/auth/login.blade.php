<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    @include('template.auth')
</head>


<body>
    <!-- Start wrapper-->
    @include('sweetalert::alert')

    @if ( session()->has('error') )
                    <div class="alert alert-danger alert-dismissible alert-round" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <div class="alert-icon">
                            <i class="icon-close"></i>
                        </div>
                        <div class="alert-message">
                            <span><strong>Gagal!</strong> {{ session('error') }}</span>
                        </div>
                    </div>
                    @endif

    <div id="wrapper">
        <div
            class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="{{ asset('images/logo-icon.png') }}">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Sign In</div>

                    <form method="post" action="{{ route('postLogin') }}">
                        @csrf
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputUsername" class="sr-only">Username</label>
                                <input type="text" id="exampleInputUsername" name="email"
                                    class="form-control form-control-rounded @error('email')is-invalid @enderror" placeholder="Email" >
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <input type="password" id="exampleInputPassword" name="password"
                                    class="form-control form-control-rounded @error('password')is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="container mr-0 ml-0">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="">
                                    <a href="authentication-reset-password.html">Reset Password</a>
                                </div>
                                <div class="">
                                    <a href="{{ route('register') }}">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign
                            In</button>
                    </form>
                </div>
            </div>
        </div>

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->

    <!-- Mirrored from codervent.com/rocker/color-version/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->

</html>
