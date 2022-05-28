<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'customer_code', 'customer_code');
    }

    public function customers_pic()
    {
        return $this->hasMany(CustomersPic::class, 'customer_code', 'customer_code');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'ext_customer_code', 'profile_code');
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'ext_customer_code', 'guest_code');
    }
}
