<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function home(){

        $trains = Train::all();

        return view('home', compact('trains'));
    }

    public function today(){

        $trainsToday = Train::where('Data di partenza', '2022-05-26');
        return view('today', compact('trainsToday'));

    }
}
