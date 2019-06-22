
<!--Design by designlayout-->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Start HTML document-->

<!DOCTYPE html>

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--HTML-->
<html lang="en">

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!--Head-->


<!-- Mirrored from vuelayout.com/efnify/html/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 03:04:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8')}}" /><!-- /Added by HTTrack -->
<head>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Page title-->
    <title>Dashboard - Efnify</title>

    <!--Browser navbar color (#5c6bc0: indigo lighten-1) for mobile-->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#5c6bc0">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#5c6bc0">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#5c6bc0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Favicon icon-->
    <link href="{{asset('backend/assets/images/favicon.png')}}" type="image/png" rel="icon">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- ================================================
    CSS
    ================================================ -->

    @yield('css')


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
        <div class="ui-app__wrapper" id="app-layout-control">

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
           @include('partials.header')
            <!--End navbar/header-->
            <!-- //////////////////////////////////////////////////////////////////// -->


            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Left sidenav/sidebar-->
            @include('partials.sidebar')
            <!--End Left sidenav/sidebar-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Right sidenav/sidebar-->
            <aside class="ui-app__right-sidenav sidenav ui-app__scrollbar" id="ui-app__right-sidenav-slide-out">

                <!-- Layout options -->
                <ul class="ui-app__right-sidenav__layout">
                    <li>
                        <h6 class="settings-content-title">Layout Options</h6>
                    </li>
                    <li>
                        <label>
                            <input class="with-gap" name="layout" type="radio" value="fixed-header-sidenav" checked />
                            <span>Fixed Header and sidenav(Default)</span>
                        </label>
                    </li>

                    <li>
                        <label>
                            <input class="with-gap" name="layout" type="radio" value="fixed-header-unfixed-sidenav"/>
                            <span>Fixed Header Unfixed sidenav</span>
                        </label>
                    </li>


                    <li>
                        <label>
                            <input class="with-gap" name="layout" type="radio" value="unfixed-header-sidenav"/>
                            <span>Unfixed Header and sidenav</span>
                        </label>
                    </li>
                </ul>
                <!-- End Layout options -->

                <!-- color options -->
                <ul class="ui-app__right-sidenav__layout">
                    <li>
                        <h6 class="settings-content-title">Color Options</h6>
                    </li>
                    <li>
                        <div class="ui-app__right-sidenav__layout__color-body active" data-color="default">
                            <div class="ui-app__right-sidenav__layout__color-body__header indigo">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="pink">
                            <div class="ui-app__right-sidenav__layout__color-body__header pink">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="purple">
                            <div class="ui-app__right-sidenav__layout__color-body__header purple">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>


                        <div class="ui-app__right-sidenav__layout__color-body" data-color="blue">
                            <div class="ui-app__right-sidenav__layout__color-body__header blue">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="cyan">
                            <div class="ui-app__right-sidenav__layout__color-body__header cyan">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>

                        <div class="ui-app__right-sidenav__layout__color-body" data-color="teal">
                            <div class="ui-app__right-sidenav__layout__color-body__header teal">
                            </div>
                            <div class="ui-app__right-sidenav__layout__color-body__sidebar">
                            </div>
                        </div>



                </ul>
                <!--end  color options -->
            </aside>

            <!-- Right sidenav toggle (show and hide right sidenav on click button) -->
            <a href="#" data-target="ui-app__right-sidenav-slide-out" class="ui-app__right-sidenav-toggle sidenav-trigger btn-floating waves-effect waves-light" id="right-sidenav-toggle"><i class="material-icons ">settings</i></a>

            <!--End Right sidenav/sidebar-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!--Page Body-->
            <main>

                <!-- Page content -->
               @yield('content')
                <!--End Page content -->

            </main>
            
            <!--Footer-->
            @include('partials.footer')
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

@yield('js')

    <!-- charts script (Only use for demo purpose) -->
    <script>
        
    </script>

    <!--End scripts-->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
</body>
<!--End body-->
<!-- //////////////////////////////////////////////////////////////////////////// -->


<!-- Mirrored from vuelayout.com/efnify/html/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Feb 2019 03:06:09 GMT -->
</html>
<!--End HTML-->
<!-- //////////////////////////////////////////////////////////////////////////// --