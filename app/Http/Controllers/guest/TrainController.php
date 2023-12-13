<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index() 
    {
        $trains = Train::whereDate('departure_time', '=', date('2023-12-14'))->get();
        // dd($trains);

        return view('guest.index', compact('trains'));
    }
}
