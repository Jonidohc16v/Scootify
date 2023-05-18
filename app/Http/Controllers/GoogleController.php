<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GoogleController extends Controller
{
    /**

     * Write code on Method

     *

     * @return response()

     */
    public function index()
    {
        
        // $locations = DB::table('stations')->select('desc', 'lat', 'lon')->get();
        // $locations = DB::table('stations')->select('id', 'desc', 'lat', 'lon', 'created_at', 'updated_at')->get();
        $locations = DB::table('stations')->select('id', 'name', 'address', 'lat', 'lon', 'capacity', 'photo', 'user_id', 'escooters_id', 'created_at', 'updated_at')->get();


        return view('googleAutocomplete', compact('locations'));
    }

//      public function index()

//      {
 
//     $locations = [
//         ['Gare', 49.599155, 6.133000],
//         ['Hamilius (Tram)', 49.611034, 6.126194],
//         ['Glacis', 49.617656, 6.125476],
//         ['Grund', 49.608425, 6.135106],
//         ['Kirchberg', 49.63231, 6.170772],
//         ['Gasperich', 49.583736, 6.124974],
//     ];

//     return view('googleAutocomplete', compact('locations'));
// }

}


  

