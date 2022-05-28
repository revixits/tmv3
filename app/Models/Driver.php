<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'driver_code', 'driver_code');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_code', 'profile_code');
    }
}
