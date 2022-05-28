<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->hasOne(Customer::class, 'ext_customer_code', 'guest_code');
    }
}
