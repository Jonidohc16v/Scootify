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
        'lat',
        'lon',
        'capacity',
        'photo',
        'user_id',
    ];

    public function escooters()
    {
        return $this->hasMany(Escooter::class);
    }
}
