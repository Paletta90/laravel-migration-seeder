<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

use Carbon\Carbon;

class PageController extends Controller
{
    public function home(){

        $trains = Train::all();

        return view('home', compact('trains'));
    }

    public function today(){

        $trainsToday = Train::all() -> where('Data di partenza', Carbon::today()->toDateString());
        return view('today', compact('trainsToday'));

    }
}
