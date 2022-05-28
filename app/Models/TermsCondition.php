<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsCondition extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'terms_condition_code', 'terms_condition_code');
    }
}
