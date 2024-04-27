<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PageController extends Controller
{
    public function index()
    {
        $trainsOfTheDay = Train::whereDate('departure_time', date('Y-m-d') /* '2024-04-26' */)->get();
        //dd($trainsOfTheDay);
        return view('welcome', compact('trainsOfTheDay'));
    }
}
