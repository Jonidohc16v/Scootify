<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Ride;
use App\Models\Subscription;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'address',
        'isAdmin'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the total number of users.
     *
     * @return int
     */
    public static function getUserCount()
    {
    return self::where('isAdmin', '<>', 1)->count();
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }

    public function ride(){
        return $this->hasMany(Ride::class);
    }

    public function stops(){
        return $this->belongsTo(Station::class);
    }

/// DELETE USER ///

use Notifiable;



public function delete()
{
    
    parent::delete();
}


}
