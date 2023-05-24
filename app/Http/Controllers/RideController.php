<?php 

namespace App\Http\Controllers;

use App\Models\Ride;
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

        $user = auth()->user();
         // Create a new ride instance.
         $ride = new Ride;
         $ride->start_station = $request->input('start_station', $stationId);
         $ride->scooter_id = $request->input('scooter_id', $escooterId);
         $ride->user_id = $request->input('user_id', $user['id']);
         $ride->start_time = now();
         $ride->save();


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
        
        $user = auth()->user();
        
        // Retrieve the previously created ride instance
        $ride = Ride::where('scooter_id', $escooterId)
        ->where('user_id', $user->id)
        ->orderBy('id', 'desc')
        ->first();

        if ($ride) {
            // Update the ride instance with the end station and end time
            $ride->end_station = $request->input('end_station', $stationId);
            $ride->end_time = now();
            $ride->save();
        }

        // Create a new ride instance.
        /*$ride = new Ride;
        $ride->end_station = $request->input('end_station', $stationId);
        //  take the current user_id from the session.
        $ride->user_id = $request->input('user_id', $user['id']);
        $ride->end_time = now();
        $ride->save();*/

        // Show a message to the user indicating the end of the ride
        $message = 'Your ride is over. Thank you for using our service!';

        return redirect()->back()->with('message', $message);
    }
    


}