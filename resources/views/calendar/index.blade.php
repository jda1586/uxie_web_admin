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
            <div id="full-calendar">
                <div class="row">
                    <div class="col s12 m8 l9">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
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