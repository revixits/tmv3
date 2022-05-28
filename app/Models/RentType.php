<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentType extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'rent_type_code', 'rent_type_code');
    }
}
