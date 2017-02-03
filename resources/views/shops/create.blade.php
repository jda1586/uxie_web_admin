@extends('layout._main')

@section('title','Nuevo Comercio')

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
                    <form class="col s12" action="{!! route('shops.store') !!}" method="post" id="newShop">
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-action-account-circle prefix"></i>
                                <input type="text" name="first_name">
                                <label for="first_name" class="">Nombre comercial</label>
                            </div>


                            <div class="input-field col s12 m6 l6">
                                {{--<label for="category">Materialize Select</label>--}}
                                <select id="category" name="category">
                                    <option value="" class="grey-text" disabled selected>Categoria...</option>
                                    <option value="auto">Automotriz</option>
                                    <option value="health">Salud</option>
                                    <option value="style">Belleza</option>
                                    <option value="food">Comida</option>
                                    <option value="entertainment">Entretenimiento</option>
                                    <option value="other">Varios</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-communication-email prefix"></i>
                                <input type="email" name="email">
                                <label for="email" class="">Correo</label>
                            </div>
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-action-lock-outline prefix"></i>
                                <input type="password" name="password">
                                <label for="password" class="">Contraseña</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-action-home prefix"></i>
                                <input id="" type="text">
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
                            <div class="col s12">
                                <span id="_long"></span>
                                <span id="_lat"></span>
                                <input type="hidden" name="latitude" value="">
                                <input type="hidden" name="longitiude" value="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action">
                                    Submit
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
    <script>
        var map;
        function initMap() {
            var myLatLng = {lat: 19.426594, lng: -99.1677644};
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 17
            });

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    myLatLng = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    map.setCenter(myLatLng);
                    alert(map.getCenter().toString())
                    var marker = new google.maps.Marker({
                        position: map.getCenter(),
                        map: map,
                        title: 'Hello World!',
                        draggable: true
                    });
                }, function () {
                    //handleLocationError(true, infoWindow, map.getCenter());
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

