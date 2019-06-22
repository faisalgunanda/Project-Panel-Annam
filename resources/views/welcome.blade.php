
<!--Design by designlayout-->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Start HTML document-->

<!DOCTYPE html>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--HTML-->
<html lang="en">

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Head-->


<!-- Mirrored from vuelayout.com/efnify/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 03:06:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Page title-->
    <title>Login - Efnify</title>

    <!--Browser navbar color (#5c6bc0: indigo lighten-1) for mobile-->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#5c6bc0">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#5c6bc0">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#5c6bc0">
    <!--Favicon icon-->
    <link href="{{asset('backend/assets/images/favicon.png') }}" type="image/png" rel="icon">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- ================================================
    CSS
    ================================================ -->

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/node_modules/materialize-css/dist/css/materialize.min.css') }}" />
    <!-- Import Efnify app css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/app.css') }}" />
    <!-- Import Efnify app helper class css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/helper.css') }}" />
    <!-- Import Efnify app responsive css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/responsive.css') }}" />
    <!-- Import Efnify app theme css -->
    <link type="text/css" rel="stylesheet" href="{{asset('backend/assets/css/theme/default.css') }}" />


</head>
<!-- End head-->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--body-->

<body>

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--Efnify body-->
    <div class="ui-app">

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Efnify body page wrapper -->
        <div class="ui-app__wrapper left-sidenav-close">

            <!-- ////////////////s//////////////////////////////////////////////////////////// -->
            <!--prepage loader-->
            <div id="prepage-loader">
                <div class="ui-app__prepage-loader spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
            <!-- End prepage loader-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- /////////////////////////////////////////////////////////////////// -->
            <!--navbar/header-->
            <nav class="ui-app__wrapper__navbar-form">
                <div class="nav-wrapper">
                    <a href="#!" class="form-brand-logo">Annam Store</a>

                    <ul class="right">
                        <li><a href="signup.html" class="waves-effect waves-light btn btn-rounded btn-depressed ui-app__wrapper__navbar-form__signup">sign up</a></li>
                    </ul>
                </div>
            </nav>
            <!--End navbar/header-->
            <!-- //////////////////////////////////////////////////////////////////// -->


            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Page Body-->
            <main>
                <!-- Page content -->
                <div class="row">
                    <!-- Page content body -->
                    <div class="col s12">
                        <div class="card ui-app__page-content ui-app__page-content--form">
                            <div class="card-content">
                                <!-- title -->
                                <div class="body-1 ui-app__page-content--title border">Welcome back!</div>

                                <!-- card body -->
                                <div class="card-body">

                                    <!-- form -->
                                    <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <div class="row m-b-5">

                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">email</i>
                                                <input id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                                                <label for="email">{{ __('E-Mail Address') }}</label>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>

                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">lock_outline</i>
                                                <input id="password" type="password" class="validate {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                                <label for="password">{{ __('Password') }}</label>
                                                 @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="col s12">
                                                <p>
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span>Keep me logged in</span>
                                                    </label>
                                                </p>
                                            </div>

                                            <div class="input-field col s12">
                                                <button class="btn btn-block waves-effect waves-light" type="submit">Sign In Your Account
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                    <!-- End form -->

                                    <!-- form footer -->
                                    <div class="center-align">
                                        Don't have an account?
                                        <a href="{{ route('register') }}">Sign up</a></div>

                                    <div class="divider-or"></div>

                                    <div class="center-align">Forgot your
                                        <a href="reset.html">password?</a></div>
                                    <!-- End form footer -->

                                </div>
                                <!-- End card body -->

                            </div>
                        </div>
                    </div>
                    <!-- End Page content body -->


                </div>
                <!--End Page content -->

            </main>
            <!--End page body-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->


            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Footer-->
            <footer class="page-footer page-footer-form">
                <ul class="center-align">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">&copy; 2018 designlayout</a></li>
                </ul>
            </footer>
            <!--End footer-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

        </div>
        <!-- End Efnify body page wrapper -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>

    <!-- End Efnify body -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->


    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!--  Scripts-->

    <!-- Import jquery -->
    <script src="{{asset('backend/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <!-- Import materialize.js') -->
    <script src="{{asset('backend/node_modules/materialize-css/dist/js/materialize.min.js')}}"></script>
    <!-- Import Efnify app.js') -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    <!-- Import Efnify search.js') (Placed in navbar) -->
    <script src="{{asset('backend/assets/js/search.js')}}"></script>

    <!--End scripts-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</body>
<!--End body-->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- Mirrored from vuelayout.com/efnify/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 03:06:51 GMT -->
</html>
<!--End HTML-->
<!-- //////////////////////////////////////////////////////////////////////////// -->