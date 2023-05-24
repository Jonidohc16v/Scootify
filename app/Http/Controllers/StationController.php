<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Escooter;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function index(Request $request)
    {
        $stations = Station::all();
        $station = $stations->first(); // Assuming you want to pass the first station to the view
    
        return view('ride', compact('stations', 'station'));
    }

    public function show($stationId)
    {
        $station = Station::find($stationId);
        $escooters = $station->escooters;
    
        return view('station.show', compact('station', 'escooters'));
    }
}