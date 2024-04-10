<?php

namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $actualDate = Carbon::now()->toDateString();

        $trains = Train::whereDate('departure_time', $actualDate)->get();
        // dump($trains);
        return view('home', compact('trains'));
    }
}
