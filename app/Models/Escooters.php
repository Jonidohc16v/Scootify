<?php

namespace App\Models;

use App\Models\Station;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Escooters extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'stations_id',
        'battery_level',
        'ride_id',
    ];

    public function station()
    {
        return $this->belongsTo(Station::class, 'stations_id');
    }
}
