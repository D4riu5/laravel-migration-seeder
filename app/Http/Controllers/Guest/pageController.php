<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// MODELS
use App\Models\Train;


// HELPERS

class pageController extends Controller
{
    public function index(){
        // get all trains
        // $trains = train::get();
        
        // get trains that match departure_time with today
        $trains = Train::whereDate('departure_time', '=', now()->toDateString())
                ->where('canceled', false)
                ->get();

        // dd($trains);
        return view('welcome', [
            'trains' => $trains
        ]);
    }
}
