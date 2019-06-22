<aside class="ui-app__left-sidenav sidenav sidenav-fixed" id="ui-app__left-sidenav-slide-out">

                <!-- sidenav menu list -->
                <ul class="no-margin">
                    <!-- dashboard menu -->
                    <li>
                        <a href="{{route('home')}}" class="waves-effect waves-light btn btn-rounded btn-dashboard"><i class="material-icons left">dashboard</i>Dashboard</a>
                    </li>
                    <!--end  dashboard menu -->

                    <!-- sidenav main menu list -->
                    <li>
                        <ul class="ui-app__left-sidenav__menu collapsible collapsible-accordion ui-app__scrollbar">
                            <li>

                                <a class="collapsible-header waves-effect waves-default"><i class="material-icons left">reorder</i>Menu Order<i class="material-icons right">arrow_drop_down</i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="{{route('order.index')}}" class="waves-effect waves-default">Daftar Orderan</a></li>
                                        <li><a href="{{route('order.create')}}" class="waves-effect waves-default">Tambah Orderan</a></li>

                                        </ul>
                                </div>
                            </li>
                                
                        </ul>
            
                    </li>
                    <!--end sidenav main menu list -->

                    <!-- sidenav quick/sub main menu list -->
                    <li class="ui-app__left-sidenav__collapsible-quick-menu-name">
                        Quick Link
                    </li>
                    <li>
                        <ul class="ui-app__left-sidenav__collapsible-quick-menu ui-app__scrollbar">
                            <li><a href="#!"><i class="material-icons">help</i>Help</a></li>
                            <li><a href="#!"><i class="material-icons">phone</i>Contact Support</a></li>
                            <li><a href="#!"><i class="material-icons">email</i>Email Support</a></li>
                            <li><a href="#!"><i class="material-icons">code</i>API Documentation</a></li>
                        </ul>
                    </li>
                    <!-- end sidenav quick/sub main menu list -->
                </ul>
                <!-- end sidenav menu list -->
            </aside>