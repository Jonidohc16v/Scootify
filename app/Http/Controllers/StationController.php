<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public  function index(Request $request){

        $stations = Station::all();

        return view('ride', compact('stations'));
    }
    
}
