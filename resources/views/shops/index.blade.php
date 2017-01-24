@extends('layout._main')

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
            <p class="caption">Info. de todos los comercios y buscador</p>
            <div class="divider"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </div>

    </div>
    <!--end container-->
@endsection