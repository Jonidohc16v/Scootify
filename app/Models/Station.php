<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    /** 
     * 
     * @var array
     * 
    */
    protected $fillable = [
        'name',
        'address',
        'lat' ,
        'lon' ,
        'capacity',
        'photo' ,
        'user_id',
        'escooters_id',
        'created_at',
        'updated_at' ,
    ];

    public function escooters()
    {
        return $this->hasMany(Escooter::class);
    }

    // Define the computed attribute for available escooters count
    public function getAvailableEscootersAttribute()
    {
        $escooters=Escooter::all();
        return $this->capacity - ($this->escooters()->where('station_id', $this->id)->count());
    }

    // Define the computed attribute for parked escooters count
    public function getParkedEscootersAttribute()
    {
        return $this->escooters()->where('station_id', $this->id )->count();
    }


public function getNumberOfScooters($stationId)
{
    $station = Station::findOrFail($stationId);
    $numberOfScooters = $station->escooters->count();

    return $numberOfScooters;
    // $numberOfScooters = $this->getNumberOfScooters(5); 
}


}
