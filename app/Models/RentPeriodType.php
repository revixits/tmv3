<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentPeriodType extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'rent_period_type_code', 'rent_period_type_code');
    }
}
