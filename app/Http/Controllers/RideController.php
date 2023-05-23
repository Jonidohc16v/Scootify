<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class RideController extends Controller
{
    //

public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'start_station' => 'required',
        'end_station' => 'required',
    ]);

    // Create a new ride instance
    $ride = new Ride();
    $ride->start_station = $request->input('start_station');
    $ride->end_station = $request->input('end_station');
    $ride->user_id = $request->input('user_id');

    // Save the ride to the database
    $ride->save();

    // Redirect the user to a success page or wherever you'd like
    return redirect()->route('ride.success');
}
public function success()
{
    return view('ride.success');
}

}
