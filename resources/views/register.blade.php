<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <!-- End layout styles -->
    {{--<link rel="shortcut icon" href="../../assets/images/favicon.png" />--}}
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="{{ asset('public/assets/images/logo.svg') }}"/>
                        </div>
                        <h4>New here?</h4>
                        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                        <h6 class="text-warning msg-accept d-none"></h6>
                        @if(session('error'))
                            <h6 class="text-danger msg-exist">
                                {{ session('error') }}
                            </h6>
                        @endif
                        <form class="pt-3 form-register" action="{!! route('submit-register') !!}" method="POST">
                            @csrf
                            <div class="form-group">
                                <p class="text-danger msg-username d-none"></p>
                                <input type="text" class="form-control form-control-lg" name="username" value="{{ old('username') }}" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <p class="text-danger msg-mail d-none"></p>
                                <input type="email" class="form-control form-control-lg" value="{{ old('mail') }}" name="mail" id="mail" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-lg" name="sex" id="sex" style="color: black;" value="{{ old('sex') }}">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">LGBT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <p class="text-danger msg-pass d-none"></p>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control form-control-lg" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <p class="text-danger msg-re-pass d-none"></p>
                                <input type="password" name="pass-retype" value="{{ old('pass-retype') }}" class="form-control form-control-lg" id="re-password" placeholder="Type password again">
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" id="accept" class="form-check-input"> I agree to all Terms & Conditions </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" onclick="validateClientForm(event)">SIGN UP</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.html" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('public/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('public/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('public/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('public/assets/js/misc.js') }}"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
></script>

<script src="{{ asset('resources/js/validate.js') }}"></script>
<!-- endinject -->
</body>
</html>
