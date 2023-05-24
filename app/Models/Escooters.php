<?php

namespace App\Models;

use App\Models\Ride;
use App\Models\Station;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Escooters extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'station_id',
        'battery_level',
        'status',
        'ride_id',
    ];
    
    /**
     * Get the station associated with the e-scooter.
     */
    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id');
    }
    
    /**
     * Get the ride associated with the e-scooter.
     */
    public function ride()
    {
        return $this->belongsTo(Ride::class);
    }
}
