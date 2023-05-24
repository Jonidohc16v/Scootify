<?php 

namespace App\Http\Controllers;

use App\Models\Escooter;
use Illuminate\Http\Request;


class RideController extends Controller
{
   
    public function pickup(Request $request)
    {
        $stationId = $request->input('station');
        $escooterId = $request->input('escooter');

        // Update the number of available e-scooters in the stations table
        Escooter::where('id', $escooterId)->count('station_id');
        // remove the escooter id that been selected from the available e-scooters table 
        Escooter::where('id', $escooterId)->update(['station_id' => null]);



        // Show a message to the user with the assigned e-scooter ID
        $message = 'You can take e-scooter ID: ' . $escooterId;

        return redirect()->back()->with('message', $message);
    }

    public function dropoff(Request $request)
    {
        $stationId = $request->input('station');
        $escooterId = $request->input('escooter');

        // Update the number of available e-scooters in the stations table
        Escooter::where('id', $escooterId)->count('station_id');
        // Update the station_id in the escooters table
        Escooter::where('id', $escooterId)->update(['station_id' => $stationId]);

        // Show a message to the user indicating the end of the ride
        $message = 'Your ride is over. Thank you for using our service!';

        return redirect()->back()->with('message', $message);
    }
    


}