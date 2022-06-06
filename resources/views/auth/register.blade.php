<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    @include('template.auth')
</head>


<body>
    <!-- Start wrapper-->
    <div id="wrapper">
        <div
            class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="{{ asset('images/logo-icon.png') }}">
                    </div>
                    <div class="card-title text-uppercase text-center py-5">Sign In</div>

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="post" action="{{ route('postRegister') }}">
                        @csrf
                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputUsername" class="sr-only">Username</label>
                                <input type="text" id="exampleInputUsername" name="name"
                                    class="form-control form-control-rounded" placeholder="Username">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputUsername" class="sr-only">Email</label>
                                <input type="text" id="exampleInputUsername" name="email"
                                    class="form-control form-control-rounded" placeholder="Email">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="position-relative has-icon-right">
                                <label for="exampleInputPassword" class="sr-only">Password</label>
                                <input type="password" id="exampleInputPassword" name="password"
                                    class="form-control form-control-rounded" placeholder="Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <select class="form-control text-muted input-select select" style="border-radius: 100px;" id="basic-select" name="gender">
                                    <option selected>Gender</option>
                                    @foreach ($gender as $item)
                                        <option value="{{ $item->id }}">{{ $item->gender }}</option>
                                    @endforeach
                                </select>
                                <div class="form-control-position mr-3">
                                
                                </div>
                            </div>
                        </div>
                        

                        <div class="container mr-0 ml-0">
                            <div class="d-flex justify-content-between mb-4">
                                <div class="">
                                    <a href="authentication-reset-password.html">Reset Password</a>
                                </div>
                                <div class="">
                                    <a href="{{ route('login') }}">Login</a>
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
