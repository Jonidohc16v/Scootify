<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Escooter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;





class RideController extends Controller
{
    public function showRidePage()
    {
        $stations = Station::all();
        $escooters = Escooter::where('status', 1)->get();

        return view('ride.page', compact('stations', 'escooters'));
    }
    public function pickup(Request $request)
    {
        $stationId = $request->input('station');
        $escooterId = $request->input('escooter');

        // Update the number of available e-scooters in the stations table
        Station::where('id', $stationId)->decrement('capacity');

        // Show a message to the user with the assigned e-scooter ID
        $message = 'You can take e-scooter ID: ' . $escooterId;

        return redirect()->back()->with('message', $message);
    }

    public function dropoff(Request $request)
    {
        $stationId = $request->input('station');
        $escooterId = $request->input('escooter');

        // Update the number of available e-scooters in the stations table
        Station::where('id', $stationId)->increment('capacity');

        // Show a message to the user indicating the end of the ride
        $message = 'Your ride is over. Thank you for using our service!';

        return redirect()->back()->with('message', $message);
    }

}
