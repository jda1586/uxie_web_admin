@extends('layout._main')

@section('title','Nuevo Usuario')

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
                    <h5 class="breadcrumbs-title">Nuevo Usuario</h5>
                    <ol class="breadcrumbs">
                        <li>
                            <a href="{!! route('home') !!}">Tablero</a>
                        </li>
                        <li>
                            <a href="{!! route('users.index') !!}">Usuarios</a>
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
                <h4 class="header2">Ingresa los datos del nuevo usario</h4>

                <div class="row">
                    <form class="col s12" action="{!! route('users.store') !!}" method="post" id="newShop">
                        <div class="row">
                            <div class="input-field col s12 m6 l6">
                                <i class="mdi-action-account-circle prefix"></i>
                                <input type="text" name="name" autofocus>
                                <label class="">Nombre</label>
                            </div>

                            {{--<div class="input-field col s12 m3 l3">
                                --}}{{--<label for="category">Materialize Select</label>--}}{{--
                                <select name="category">
                                    <option value="" class="grey-text" disabled selected>Categoria...</option>
                                    <option value="auto">Automotriz</option>
                                    <option value="health">Salud</option>
                                    <option value="style">Belleza</option>
                                    <option value="food">Comida</option>
                                    <option value="entertainment">Entretenimiento</option>
                                    <option value="other">Varios</option>
                                </select>
                            </div>--}}
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