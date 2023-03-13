<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- assets from directive @vite  --}}
        @vite('resources/js/app.js')
    </head>
    <body class="bg-dark text-white">

        <main>
            <div class="container">
                <div class="row my-5">           
                    <h2>
                        Train {{ $train->train_full_name }}
                    </h2>       
                    <div class="col-12">
                        <div class="card my-3 p-1">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    {{ $train->company }}
                                </li>
                                <li class="list-group-item">
                                    From {{ $train->departure_station }}
                                </li>
                                <li class="list-group-item">
                                    To {{ $train->arrival_station }}
                                </li>
                                <li class="list-group-item">
                                    Departure date: {{ $train->departure_time }}
                                </li>
                                <li class="list-group-item">
                                    Arrival presumed at: {{ $train->arrival_time }}
                                </li>
                                <li class="list-group-item">
                                    Train code: {{ $train->train_code }}
                                </li>
                                <li class="list-group-item">
                                    Number of carriages: {{ $train->number_of_carriages }}
                                </li>
                                <li class="list-group-item">
                                    @if ($train->on_time == 0)
                                        DELAYED
                                    @else
                                        NOT DELAYED
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('home') }}">
                        <button>
                            Return to HomePage
                        </button>
                    </a>
                </div>
            </div>
        </main>

    </body>
</html>