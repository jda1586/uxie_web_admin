@extends('layout._main')

@section('title','Nuevo Comercio')

@section('_header')
    @parent
    <link href="{!! asset('js/plugins/dropify/css/dropify.min.css')!!}" type="text/css" rel="stylesheet"
          media="screen,projection">
@endsection

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
                    <h5 class="breadcrumbs-title">Nuevo Comercio</h5>
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{!! route('home') !!}">Tablero</a>
                        </li>
                        <li>
                            <a href="{!! route('shops.index') !!}">Comercios</a>
                        </li>
                        <li class="active">Nuevo</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card-panel">
                <h4 class="header2">Ingresa los datos del nuevo comercio</h4>

                <div class="row">
                    <form class="col s12 dropzone" action="{!! route('shops.store') !!}" method="post" id="newShop">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-action-account-circle prefix"></i>
                                <input type="text" name="name">
                                <label class="">Nombre comercial</label>
                            </div>

                            <div class="input-field col s12 m3 l3">
                                {{--<label for="category">Materialize Select</label>--}}
                                <select name="category">
                                    <option value="" class="grey-text" disabled selected>Categoria...</option>
                                    @foreach($categories as $catId => $catName)
                                        <option value="{!! $catId !!}">{{ $catName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-field col s12 m3 l3">
                                {{--<i class="mdi-action-account-circle prefix"></i>--}}
                                <input type="text" name="owner" value="{!! $email !!}" readonly>
                                <label class="">Administrador</label>
                            </div>
                        </div>

                        {{--<div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-communication-email prefix"></i>
                                <input type="email" name="email">
                                <label class="">Correo</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-action-lock-outline prefix"></i>
                                <input type="password" name="password">
                                <label for="password" class="">Contraseña</label>
                            </div>
                        </div>--}}

                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-action-home prefix"></i>
                                <input type="text" name="street">
                                <label for="" class="">Calle</label>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                {{--<i class="mdi-editor-format-list-numbered prefix"></i>--}}
                                <input type="text" name="outside_number">
                                <label for="outside_number" class="">No. Interior</label>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                {{--<i class="mdi-action-lock-outline prefix"></i>--}}
                                <input type="text" name="inside_number">
                                <label for="inside_number" class="">No. Exterior</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="mdi-communication-phone prefix"></i>
                                <input type="text" name="phone">
                                <label for="phone" class="">Telefono</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m3 l3">
                                <input type="text" name="country" value="Mexico" readonly>
                                <label for="" class="">Pais</label>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                {{--<i class="mdi-maps-terrain prefix"></i>--}}
                                <input type="text" name="state">
                                <label for="" class="">Estado</label>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                {{--<i class="mdi-maps-terrain prefix"></i>--}}
                                <input type="text" name="city">
                                <label for="" class="">Ciudad</label>
                            </div>
                            <div class="input-field col s12 m3 l3">
                                {{--<i class="mdi-maps-terrain prefix"></i>--}}
                                <input type="text" name="postal_code">
                                <label for="" class="">Codigo portal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div id="map" style="height: 350px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <input type="text" name="latitude" value="0" readonly>
                                <label for="" class="">Latitud</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <input type="text" name="longitude" value="0" readonly>
                                <label for="" class="">Longitud</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12" style="text-align: center !important;">
                                <input type="file" id="input-file-max-fs" class="dropify"
                                       data-max-file-size="2M" name="image"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                    Crear
                                    <i class="mdi-content-send right"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('_footer')
    @parent
    <!-- dropify -->
    <script type="text/javascript" src="{!! asset('js/plugins/dropify/js/dropify.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            // Basic
//            $('.dropify').dropify();

            // Translated
            $('.dropify').dropify({
                messages: {
                    default: 'Click o arrastra y suelta una foto ',
                    replace: 'Click o arrastra y suelta una foto para cambiarla',
                    remove: 'quitar foto',
                    error: 'archivo exede los 2mg'
                }
            });

            // Used events
            var drEvent = $('.dropify-event').dropify();

            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.filename + "\" ?");
            });

            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
        });

        var map;
        function initMap() {
            var myLatLng = {lat: 19.426594, lng: -99.1677644};
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 17
            });
            $('input[name=latitude]').val(myLatLng.lat);
            $('input[name=longitude]').val(myLatLng.lng);

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    myLatLng = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(myLatLng);
                    $('input[name=latitude]').val(position.coords.latitude);
                    $('input[name=longitude]').val(position.coords.longitude);
                    var marker = new google.maps.Marker({
                        position: map.getCenter(),
                        map: map,
                        title: 'Aqui!',
                        draggable: true
                    });
                    marker.addListener('dragend', function (event) {
                        $('input[name=latitude]').val(event.latLng.lat());
                        $('input[name=longitude]').val(event.latLng.lng());
                    });
                }, function () {
                    //handleLocationError(true, infoWindow, map.getCenter());
                    map.setCenter(myLatLng);
                });
            } else {
                // Browser doesn't support Geolocation
                //handleLocationError(false, infoWindow, map.getCenter());
                alert('Tu mavegador no soporta geolocalizacion');
                map.setCenter(myLatLng);
            }

        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9XvVN3TY3CXzNfANcsVJZE74aTLxt0nQ&callback=initMap"></script>
@endsection

