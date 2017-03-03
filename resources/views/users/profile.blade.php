@extends('layout._main')
@section('title','Perfirl')
@section('breadcrumb')
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey hide-on-large-only">
            <i class="mdi-action-search active"></i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explora Uxie">
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">Usuarios</h5>
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{!! route('home') !!}">Tablero</a>
                        </li>
                        <li class="active">Perfil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div id="profile-page" class="section">
            <!-- profile-page-header -->
            <div id="profile-page-header" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                </div>
                <figure class="card-profile-image">
                    <img src="{!! url('images/avatar.jpg') !!}" alt="profile image"
                         class="circle z-depth-2 responsive-img activator">
                </figure>
                <div class="card-content">
                    <div class="row">
                        <div class="col s12 m3 offset-s2 offset-m2">
                            <div class="hide-on-med-and-up"><br><br><br></div>
                            <h4 class="card-title grey-text text-darken-4">Roger Waters</h4>
                            <p class="medium-small grey-text">Project Manager</p>
                        </div>
                        <div class="col s6 m2 center-align">
                            <h4 class="card-title grey-text text-darken-4">10+</h4>
                            <p class="medium-small grey-text">Shops</p>
                        </div>
                        <div class="col s6 m2 center-align">
                            <h4 class="card-title grey-text text-darken-4">6</h4>
                            <p class="medium-small grey-text">Visitas</p>
                        </div>
                        <div class="col s12 m2 center-align">
                            <h4 class="card-title grey-text text-darken-4">$ 1,253,000</h4>
                            <p class="medium-small grey-text">Fondos</p>
                        </div>
                        <div class="col s12 m1 right-align">
                            <a class="btn-floating activator waves-effect waves-light darken-2 right">
                                <i class="mdi-action-perm-identity"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-reveal">
                    <p>
                        <span class="card-title grey-text text-darken-4">Roger Waters <i
                                    class="mdi-navigation-close right"></i></span>
                        <span><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</span>
                    </p>

                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                        because I require little markup to use effectively.</p>

                    <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                    <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                    <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                    <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <!-- Profile About  -->
                <div class="card light-blue">
                    <div class="card-content white-text">
                        <span class="card-title">About Me!</span>
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient
                            because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <!-- Profile About  -->
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">0.0 &nbsp; Calificacion Promedio</span>
                        <div class="row">
                            <div class="col s1"><i class="mdi-action-accessibility"></i></div>
                            <div class="col s11">
                                <div class="progress">
                                    <div class="determinate" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col s1"><i class="mdi-action-face-unlock"></i></div>
                            <div class="col s11">
                                <div class="progress">
                                    <div class="determinate" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6">
                <!-- Profile About  -->
                <ul id="profile-page-about-details" class="collection z-depth-1">
                    <li class="collection-item">
                        <div class="row">
                            <div class="col s5 grey-text darken-1"><i class="mdi-action-wallet-travel"></i> Project
                            </div>
                            <div class="col s7 grey-text text-darken-4 right-align">ABC Name</div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="row">
                            <div class="col s5 grey-text darken-1"><i class="mdi-social-poll"></i> Skills</div>
                            <div class="col s7 grey-text text-darken-4 right-align">HTML, CSS</div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="row">
                            <div class="col s5 grey-text darken-1"><i class="mdi-social-domain"></i> Lives in</div>
                            <div class="col s7 grey-text text-darken-4 right-align">NY, USA</div>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="row">
                            <div class="col s5 grey-text darken-1"><i class="mdi-social-cake"></i> Birth date</div>
                            <div class="col s7 grey-text text-darken-4 right-align">18th June, 1991</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col s12 m6">
                <!-- Profile About  -->
                <div class="card">
                    <div class="card-content">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="first_name" type="text" class="validate">
                                    <label for="first_name">First Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('_footer')
    @parent
            <!-- chartjs -->
    <script type="text/javascript" src="{!! asset('js/plugins/chartjs/chart.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/chartjs/chart-script.js') !!}"></script>

    <!-- google map api -->
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/google-map/google-map-script.js') !!}"></script>
@endsection