@extends('layout._main')
@section('title','Usuarios')

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
                    <h5 class="breadcrumbs-title">Usiarios</h5>
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{!! route('home') !!}">Tablero</a>
                        </li>
                        <li class="active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('content')
            <!--start container-->
    <div class="container">
        <div class="section">
            {{--<p class="caption">Info. de todos los comercios y buscador</p>
            <div class="divider"></div>--}}
            <div id="card-stats" class="seaction">
                <div class="row">
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title">
                                    <i class="mdi-social-person"></i> Activos
                                </p>
                                <h4 class="card-stats-number">{{ number_format($active,0,'.',',') }}</h4>
                                <p class="card-stats-compare">
                                    <i class="mdi-hardware-keyboard-arrow-up"></i> 0%
                                    <span class="green-text text-lighten-5">*</span>
                                </p>
                            </div>
                            <div class="card-action  green darken-2">
                                <div id="clients-bar" class="center-align">
                                    <canvas width="227" height="25" style="display: inline-block;
                                    width: 227px; height: 25px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title">
                                    <i class="mdi-social-person"></i> Visitas promedio
                                </p>
                                <h4 class="card-stats-number">0</h4>
                                <p class="card-stats-compare">
                                    <i class="mdi-hardware-keyboard-arrow-up"></i> 0%
                                    <span class="green-text text-lighten-5">*</span>
                                </p>
                            </div>
                            <div class="card-action  green darken-2">
                                <div id="clients-bar2" class="center-align">
                                    <canvas width="227" height="25"
                                            style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-content  green white-text">
                                <p class="card-stats-title">
                                    <i class="mdi-social-person"></i> ---
                                </p>
                                <h4 class="card-stats-number">0</h4>
                                <p class="card-stats-compare">
                                    <i class="mdi-hardware-keyboard-arrow-up"></i> 15%
                                    <span class="green-text text-lighten-5">*</span>
                                </p>
                            </div>
                            <div class="card-action  green darken-2">
                                <div id="clients-bar2" class="center-align">
                                    <canvas width="227" height="25"
                                            style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l6">
                        <ul id="projects-collection" class="collection">
                            <li class="collection-item avatar">
                                <i class="mdi-file-folder circle light-blue darken-2"></i>
                                <span class="collection-header">Projects</span>
                                <p>Your Favorites</p>
                                <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s6">
                                        <p class="collections-title">Web App</p>
                                        <p class="collections-content">AEC Company</p>
                                    </div>
                                    <div class="col s3">
                                        <span class="task-cat cyan">Development</span>
                                    </div>
                                    <div class="col s3">
                                        <div id="project-line-1">
                                            <canvas width="172" height="30"
                                                    style="display: inline-block; width: 172px; height: 30px; vertical-align: top;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s6">
                                        <p class="collections-title">Mobile App for Social</p>
                                        <p class="collections-content">iSocial App</p>
                                    </div>
                                    <div class="col s3">
                                        <span class="task-cat grey darken-3">UI/UX</span>
                                    </div>
                                    <div class="col s3">
                                        <div id="project-line-2">
                                            <canvas width="172" height="30"
                                                    style="display: inline-block; width: 172px; height: 30px; vertical-align: top;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s6">
                                        <p class="collections-title">Website</p>
                                        <p class="collections-content">MediTab</p>
                                    </div>
                                    <div class="col s3">
                                        <span class="task-cat teal">Marketing</span>
                                    </div>
                                    <div class="col s3">
                                        <div id="project-line-3">
                                            <canvas width="172" height="30"
                                                    style="display: inline-block; width: 172px; height: 30px; vertical-align: top;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="collection-item">
                                <div class="row">
                                    <div class="col s6">
                                        <p class="collections-title">AdWord campaign</p>
                                        <p class="collections-content">True Line</p>
                                    </div>
                                    <div class="col s3">
                                        <span class="task-cat green">SEO</span>
                                    </div>
                                    <div class="col s3">
                                        <div id="project-line-4">
                                            <canvas width="172" height="30"
                                                    style="display: inline-block; width: 172px; height: 30px; vertical-align: top;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col s12 m6 l6"></div>
                </div>
            </div>


        </div>

    </div>
    <!--end container-->
    @endsection

    @section('_footer')
    @parent
            <!-- chartjs -->
    <script type="text/javascript" src="{!! asset('js/plugins/chartjs/chart.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/chartjs/chart-script.js') !!}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{!! asset('js/plugins/sparkline/jquery.sparkline.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/sparkline/sparkline-script.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $("#clients-bar").sparkline([0, 0, 0, 0], {
                type: 'bar',
                height: '25',
                barWidth: 7,
                barSpacing: 4,
                barColor: '#C7FCC9',
                negBarColor: '#81d4fa',
                zeroColor: '#81d4fa',
            });


            $("#clients-bar2").sparkline([0, 0, 0, 0], { //necesita 21 datos
                type: 'bar',
                height: '25',
                barWidth: 7,
                barSpacing: 4,
                barColor: '#C7FCC9',
                negBarColor: '#81d4fa',
                zeroColor: '#81d4fa',
            });
        });
    </script>
@endsection