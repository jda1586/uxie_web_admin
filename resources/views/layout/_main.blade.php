<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Uxie">
    <meta name="keywords" content="uxie">
    <title>Uxie Web Admin | @yield('title') </title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    @section('_header')
        <link href="{!! asset('css/materialize.min.css') !!}" type="text/css" rel="stylesheet"
              media="screen,projection">
        <link href="{!! asset('css/style.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection">
        <!-- Custome CSS-->
        <link href="{!! asset('css/custom/custom.min.css') !!}" type="text/css" rel="stylesheet"
              media="screen,projection">

        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link href="{!! asset('js/plugins/prism/prism.css') !!}" type="text/css" rel="stylesheet"
              media="screen,projection">
        <link href="{!! asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}" type="text/css"
              rel="stylesheet" media="screen,projection">
        <link href="{!! asset('js/plugins/chartist-js/chartist.min.css') !!}" type="text/css" rel="stylesheet"
              media="screen,projection">

        <link href="{!! asset('js/plugins/sweetalert/dist/sweetalert.css') !!}" type="text/css" rel="stylesheet"
              media="screen,projection">
    @show
</head>

<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color green darken-1">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="{!! route('home') !!}" class="brand-logo darken-1">
                                <img src="{!! asset('images/uxie/uxie_web_logo.png') !!}" alt="materialize logo">
                            </a>
                            <span class="logo-text">Uxie</span>
                        </h1>
                    </li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2"
                           placeholder="Explora Uxie"/>
                </div>
                <ul class="right hide-on-med-and-down">
                    {{--<li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"
                           data-activates="translation-dropdown">
                            <img src="images/flag-icons/United-States.png" alt="USA"/>
                        </a>
                    </li>--}}
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                            <i class="mdi-action-settings-overscan"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button"
                           data-activates="notifications-dropdown">
                            <i class="mdi-social-notifications">
                                <small class="notification-badge">5</small>
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-activates="chat-out"
                           class="waves-effect waves-block waves-light chat-collapse">
                            <i class="mdi-communication-chat"></i>
                        </a>
                    </li>
                </ul>
                <!-- translation-button -->
            {{--<ul id="translation-dropdown" class="dropdown-content">
                <li>
                    <a href="#!"><img src="images/flag-icons/United-States.png" alt="English"/> <span
                                class="language-select">English</span></a>
                </li>
                <li>
                    <a href="#!"><img src="images/flag-icons/France.png" alt="French"/> <span
                                class="language-select">French</span></a>
                </li>
                <li>
                    <a href="#!"><img src="images/flag-icons/China.png" alt="Chinese"/> <span
                                class="language-select">Chinese</span></a>
                </li>
                <li>
                    <a href="#!"><img src="images/flag-icons/Germany.png" alt="German"/> <span
                                class="language-select">German</span></a>
                </li>

            </ul>--}}
            <!-- notifications-dropdown -->
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                    </li>
                    <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="{!! url('images/avatar.jpg') !!}" alt=""
                                 class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                </li>
                                <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                </li>
                                <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                </li>
                                <li>
                                    <a href="{!! route('logout') !!}">
                                        <i class="mdi-hardware-keyboard-tab"></i> Logout
                                    </a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                               data-activates="profile-dropdown">
                                {{ auth()->user()->name }} <i class="mdi-navigation-arrow-drop-down right"></i>
                            </a>
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                </li>
                <li class="bold">
                    <a href="{!! route('home') !!}" class="waves-effect waves-cyan">
                        <i class="mdi-action-dashboard"></i> Tablero
                    </a>
                </li>

                <li class="li-hover">
                    <div class="divider"></div>
                </li>

                <li class="bold">
                    <a href="#" class="waves-effect waves-cyan">
                        <i class="mdi-action-schedule"></i> Agenda
                    </a>
                </li>
                <li class="bold">
                    <a href="{!! route('home') !!}" class="waves-effect waves-cyan">
                        <i class="mdi-action-list"></i> Inventario
                    </a>
                </li>


                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-action-description"></i> Reportes
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="#">Reporte 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="li-hover">
                    <div class="divider"></div>
                </li>
                <li class="li-hover"><p class="ultra-small margin more-text">Administración</p></li>

                <li class="bold">
                    <a href="{!! route('users.index') !!}" class="waves-effect waves-cyan">
                        <i class="mdi-social-person"></i> Usuarios
                    </a>
                </li>

                <li class="bold">
                    <a href="{!! route('shops.index') !!}" class="waves-effect waves-cyan">
                        <i class="mdi-action-store"></i> Comercios
                    </a>
                </li>

                <li class="bold">
                    <a href="#" class="waves-effect waves-cyan">
                        <i class="mdi-action-settings"></i> Ajustes
                    </a>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold">
                            <a class="collapsible-header waves-effect waves-cyan">
                                <i class="mdi-action-description"></i> Reportes
                            </a>
                            <div class="collapsible-body">
                                <ul>
                                    <li>
                                        <a href="#">Reporte 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Reporte 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
            <a href="#" data-activates="slide-out"
               class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i
                        class="mdi-navigation-menu"></i></a>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">
            @yield('breadcrumb')
            @yield('content')
        </section>
        <!-- END CONTENT -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
            <ul id="chat-out" class="side-nav rightside-navigation">
                <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i
                                class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="li-hover">
                    <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active">
                                <i class="mdi-social-whatshot"></i>Recent Activity
                            </div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                                class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                                class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                                class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i
                                                class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i
                                        class="mdi-editor-attach-money"></i>Sales Repoart
                            </div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite
                                Associates
                            </div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt=""
                                                             class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
{{--<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <span>
                Copyright © 2015 <a class="grey-text text-lighten-4"
                                    href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs"
                                    target="_blank">GeeksLabs</a> All rights reserved.
            </span>
            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4"
                                                            href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
</footer>--}}
<!-- END FOOTER -->

<!-- Floating Action Button -->
<div class="fixed-action-btn" style="bottom: 20px; right: 20px;">
    <a class="btn-floating btn-large blue">
        <i class="mdi-editor-format-list-bulleted"></i>
    </a>
    <ul>
        <li>
            <a href="#" class="tooltipped btn-floating red" data-position="left" data-delay="20"
               data-tooltip="Ayuda">
                <i class="large mdi-communication-live-help"></i>
            </a>
        </li>
        <li id="_newShop">
            <a href="#" class="tooltipped btn-floating green" data-position="left"
               data-delay="20" data-tooltip="Nuevo Comercio">
                <i class="large mdi-action-store"></i>
            </a>
        </li>
        <li>
            <a href="{!! route('users.create') !!}" class="tooltipped btn-floating green" data-position="left"
               data-delay="20" data-tooltip="Nuevo Usuario">
                <i class="large mdi-social-person-add"></i>
            </a>
        </li>
        {{--<li>
            <a href="#" class="btn-floating blue">
                <i class="large mdi-communication-email"></i>
            </a>
        </li>
        <li>
            <a href="#" class="btn-floating blue">
                <i class="large mdi-communication-email"></i>
            </a>
        </li>--}}
    </ul>
</div>
<!-- Floating Action Button -->

<!-- ================================================
Scripts
================================================ -->
@section('_footer')
    <!-- jQuery Library -->
    <script type="text/javascript" src="{!! asset('js/plugins/jquery-1.11.2.min.js') !!}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{!! asset('js/materialize.min.js') !!}"></script>
    <!--prism -->
    <script type="text/javascript" src="{!! asset('js/prism/prism.js') !!}"></script>
    <!--scrollbar-->
    <script type="text/javascript"
            src="{!! asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{!! asset('js/plugins/chartist-js/chartist.min.js') !!}"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{!! asset('js/plugins.min.js') !!}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{!! asset('js/custom-script.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/sweetalert/dist/sweetalert.min.js') !!}"></script>
    <script>
        function _createUser() {
            swal({
                    title: "Uxie | nuevo comercio",
                    text: "Correo de un usuario activo para administrar este comercio:",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Crear',
                    confirmButtonColor: 'green',
                    showLoaderOnConfirm: true,
                    animation: "slide-from-top",
                    inputPlaceholder: "Correo"
                },
                function (inputValue) {
                    if (inputValue === false) return false;
                    if (inputValue === "") {
                        swal.showInputError("Debe ser un correo valio y registrado en Uxie");
                        return false
                    }
                    $.post('{!! route('api.users.exists') !!}', {email: inputValue})
                        .done(function (resp) {
                            if (resp.ok) {
                                swal({
                                        title: "Are you sure?",
                                        text: "You will not be able to recover this imaginary file!",
                                        type: "warning",
                                            /*showCancelButton: true,*/
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, delete it!",
                                        closeOnConfirm: false
                                    },
                                    function () {
                                        swal("Deleted!", "Your imaginary file has been deleted.", "success");
                                    });
                                swal("Correcto!", "El usuario: " + inputValue + " sera el administrador del nuevo comercio.", "success");
                            } else {
                                _createUserError(resp);
                            }
                        });
                    /*swal("Nice!", "You wrote: " + inputValue, "success");*/
                });
        }
        function _createUserError(resp) {
            console.log(resp);
            swal({
                    title: "Informacion incorrecta?",
                    text: resp.error.email[0],
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "green",
                    confirmButtonText: "Crear usuario",
                    cancelButtonText: "Volver",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        window.location.href = '{!! route('users.create') !!}';
                    }
                    else {
                        _createUser();
                    }
                });
        }
        $(document).ready(function () {
            $('.tooltipped').tooltip({delay: 50});
            $('#_newShop').click(function () {
                _createUser();
            });
        });
    </script>
@show
</body>

</html>