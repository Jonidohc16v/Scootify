<?php

namespace App\Models;

use App\Models\Station;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Escooter extends Model
{
    use HasFactory;
    protected $table = 'escooters';
    public function station()
    {
        return $this->belongsTo(Station::class, 'stations_id');
    }

}
