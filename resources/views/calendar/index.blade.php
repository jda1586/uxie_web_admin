@extends('layout._main')

{{--@section('title','Agenda')--}}
<link href="{!! asset('js/plugins/fullcalendar/css/fullcalendar.min.css')!!}" type="text/css" rel="stylesheet"
      media="screen,projection">


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
                    <h5 class="breadcrumbs-title">Agenda </h5>
                    <ol class="breadcrumbs">
                        {{--<li>
                            <a href="{!! route('home') !!}">Tablero</a>
                        </li>
                        <li>
                            <a href="{!! route('shops.index') !!}">Comercios</a>
                        </li>--}}
                        {{--<li class="active">Agenda</li>--}}
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="divider"></div>
    <div id="full-calendar">
        <div class="row">
            <div class="col s12 m4 l3">
                <div id='external-events'>
                    <h4 class="header">Draggable Events</h4>
                    <div class='fc-event cyan'>March Invoices</div>
                    <div class='fc-event teal'>Call Emy</div>
                    <div class='fc-event cyan darken-1'>Dinner with Team</div>
                    <div class='fc-event cyan accent-4'>Meeting with Support Team</div>
                    <div class='fc-event teal accent-4'>Meeting with Sales Team</div>
                    <div class='fc-event light-blue accent-3'>Design an iOS App</div>
                    <div class='fc-event light-blue accent-4'>Company Party</div>
                    <p>
                        <input type='checkbox' id='drop-remove' />
                        <label for='drop-remove'>remove after drop</label>
                    </p>
                </div>
            </div>
            <div class="col s12 m8 l9">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
@endsection

@section('_footer')
    @parent

    {{--<script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/lib/jquery.min.js') !!}"></script>--}}
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/lib/jquery-ui.custom.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/lib/moment.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/js/fullcalendar.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/fullcalendar-script.js') !!}"></script>

@endsection