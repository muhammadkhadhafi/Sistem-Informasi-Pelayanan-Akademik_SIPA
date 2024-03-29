<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIPA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ url('/') }}/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form action="{{ url('/login') }}" method="post" class="login100-form validate-form">
                    <span class="login100-form-title p-b-43">
                        Sistem Informasi Pelayanan Akademik
                    </span>
                    <div class="row">
                        <div class="col-md-12">
                            <x-utils.notif />
                        </div>
                    </div>
                    @if (isset($message))
                        <div class="alert alert-danger">{{ $message }}</div>
                    @endif
                    @csrf
                    <div class="wrap-input100 validate-input" data-validate="Diperlukan User ID yang valid">
                        <input class="input100" type="text" name="userid">
                        <span class="focus-input100"></span>
                        <span class="label-input100">User ID</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Diperlukan Password">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>
                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="remember" type="checkbox" name="remember">
                            <label class="label-checkbox100" for="remember">
                                Remember me
                            </label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            Belum punya akun?
                        </span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="{{ url('/register') }}" class="btn btn-dark">Register Akun</a>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('public/app/images/imagelogin/sipa.jpg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="{{ url('/') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('/') }}/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('/') }}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ url('/') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('/') }}/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('/') }}/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ url('/') }}/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('/') }}/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{ url('/') }}/js/main.js"></script>

</body>

</html>
