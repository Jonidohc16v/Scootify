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
        $locations = DB::table('stations')->select('id', 'name', 'address', 'lat', 'lon', 'capacity', 'photo', 'user_id', 'escooters_id', 'created_at', 'updated_at')->get();
        return view('googleAutocomplete', compact('locations'));
    }
}
