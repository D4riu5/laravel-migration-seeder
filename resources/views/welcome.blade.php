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


            <div class="container m-5">
                <div class="row">
                    <h2>Trains leaving today:</h2>
                    @foreach ($trains as $train)
                    <div class="col-3">
                        <div class="card text-dark p-2">
                            <h4>
                               {{  $train->train_full_name }}
                            </h4>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </main>

    </body>
</html>