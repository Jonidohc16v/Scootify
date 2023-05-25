<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ride extends Model
{
    use HasFactory;
    protected $table = 'ride';
    
    protected $fillable = [
        'user_id',
        'scooter_id',
        'start_station',
        'end_station',
        'start_time',
        'end_time',
                // Add other fillable fields here

        ];


    //  Define relationships or other methods as needed    
      public function user()
     {
         return $this->belongsTo(User::class);
     }
}
