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
                    <h2 class="my-4">
                        Trains leaving today:
                    </h2>

                    @foreach ($trains as $train)
                    <div class="col-6">
                        <div class="card my-3 p-1">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    {{  $train->train_full_name }}
                                </li>
                                <li class="list-group-item">
                                    From {{ $train->departure_station }} 
                                </li>
                                <li class="list-group-item">
                                    Departure at {{ date('H:i:s', strtotime($train->departure_time)) }}
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route("trainInfo", $train->id) }}">
                                        <button>
                                            More info
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </main>

    </body>
</html>