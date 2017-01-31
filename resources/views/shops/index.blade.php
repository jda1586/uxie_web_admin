@extends('layout._main')

@section('title','Comercios')

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
                    <h5 class="breadcrumbs-title">Comercios</h5>
                    <ol class="breadcrumbs">
                        <li>
                            <a href="#">Tablero</a>
                        </li>
                        <li class="active">Comercios</li>
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
                                    <i class="mdi-action-store"></i> Activos
                                </p>
                                <h4 class="card-stats-number">566</h4>
                                <p class="card-stats-compare">
                                    <i class="mdi-hardware-keyboard-arrow-up"></i> 15%
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
                                    <i class="mdi-action-store"></i> Vistas promedio
                                </p>
                                <h4 class="card-stats-number">18</h4>
                                <p class="card-stats-compare">
                                    <i class="mdi-hardware-keyboard-arrow-up"></i> 5%
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
                                    <i class="mdi-action-store"></i> ---
                                </p>
                                <h4 class="card-stats-number">478</h4>
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
            $("#clients-bar").sparkline([70, 80, 65, 78, 58, 80, 78, 80, 70, 50, 75, 65, 80, 70, 65, 90, 65, 80, 70, 65, 90], {
                type: 'bar',
                height: '25',
                barWidth: 7,
                barSpacing: 4,
                barColor: '#C7FCC9',
                negBarColor: '#81d4fa',
                zeroColor: '#81d4fa',
            });

            $("#clients-bar2").sparkline([70, 80, 65, 78, 58, 80, 78, 80, 70, 50, 75, 65, 80, 70, 65, 90, 65, 80, 70, 65, 90], {
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