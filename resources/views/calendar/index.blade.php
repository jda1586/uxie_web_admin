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
                        <li>
                            <a href="{!! route('home') !!}">Tablero</a>
                        </li>
                        {{--<li>
                            <a href="{!! route('shops.index') !!}">Comercios</a>
                        </li>--}}
                        <li class="active">Agenda</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="divider"></div>
    <div class="container">
        <div class="section">
            {{--<p class="caption">Info. de todos los comercios y buscador</p>
            <div class="divider"></div>--}}
            <div class="col s12 m3 l3 " style="display: inline-flex">
                {{--<p><a class="btn btn-large waves-effect waves-light red darken-4">button</a></p>
                <p><a class="btn btn-large waves-effect waves-light light-green darken-4">button</a></p>--}}
                {{--<p style="margin: 5px"><a class="waves-effect waves-light btn modal-trigger  teal " href="#modal3">Agregar cita</a></p>--}}
                <p style="margin: 5px"><a class="btn btn-large waves-effect waves-light lime darken-4"  >agregar cita</a></p>
                {{--<p style="margin: 5px"><a class="btn btn-large waves-effect waves-light lime darken-4">button</a></p>--}}
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!" class="-text">one<span class="badge">1</span></a>
                    </li>
                    <li><a href="#!" class="-text">two<span class="new badge ">2</span></a>
                    </li>
                    <li><a href="#!" class="-text">three</a>
                    </li>
                </ul>
                <a class="btn dropdown-button waves-effect waves-light " href="#!" data-activates="dropdown1">seleccionar empresa<i class="mdi-navigation-arrow-drop-down right"></i></a>
            </div>
            <div id="full-calendar">
                <div class="row">
                    <div class="col s12 m8 l9">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div id="modal3" class="modal">
        <div class="modal-content teal white-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
        <div class="modal-footer  teal lighten-4">
            <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Disagree</a>
            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
        </div>
    </div>

@endsection

@section('_footer')
    @parent

    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/new/moment2.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/new/fullcalendar.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/new/locale-all.js') !!}"></script>
    <script>
        $(document).ready(function () {
            // Materialize Parallax
            $('.parallax').parallax();
            // Materialize Modal
            $('.modal-trigger').leanModal({
                dismissible: true, // Modal can be dismissed by clicking outside of the modal
                opacity: .5, // Opacity of modal background
                in_duration: 300, // Transition in duration
                out_duration: 200, // Transition out duration
                ready: function() {
                    //alert('Ready');
                }, // Callback for Modal open
                complete: function() {
                    //alert('Closed');
                } // Callback for Modal close
            });

            var initialLocaleCode = 'es';

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },
                defaultDate: '2017-02-12',
                locale: initialLocaleCode,
                buttonIcons: false, // show the prev/next text
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2017-02-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2017-02-07',
                        end: '2017-02-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-02-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-02-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2017-02-11',
                        end: '2017-02-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-02-12T10:30:00',
                        end: '2017-02-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2017-02-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-02-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2017-02-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2017-02-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2017-02-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2017-02-28'
                    }
                ]
            });

            // build the locale selector's options
            $.each($.fullCalendar.locales, function (localeCode) {
                $('#locale-selector').append(
                    $('<option/>')
                        .attr('value', localeCode)
                        .prop('selected', localeCode == initialLocaleCode)
                        .text(localeCode)
                );
            });

            // when the selected option changes, dynamically change the calendar option
            $('#locale-selector').on('change', function () {
                if (this.value) {
                    $('#calendar').fullCalendar('option', 'locale', this.value);
                }
            });
        });

    </script>
    {{--<script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/lib/jquery-ui.custom.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/lib/moment.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/js/fullcalendar.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/plugins/fullcalendar/fullcalendar-script.js') !!}"></script>--}}

@endsection