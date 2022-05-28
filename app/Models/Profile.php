<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->hasOne(Customer::class, 'ext_customer_code', 'profile_code');
    }

    public function account()
    {
        return $this->hasOne(Account::class, 'profile_code', 'profile_code');
    }

    public function customers_pic()
    {
        return $this->hasOne(CustomersPic::class, 'profile_code', 'profile_code');
    }

    public function driver()
    {
        return $this->hasOne(Driver::class, 'profile_code', 'profile_code');
    }
}
