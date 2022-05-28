<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentChannel extends Model
{
    use HasFactory;

    public function payment_method()
    {
        return $this->hasMany(PaymentMethod::class, 'payment_channel_code', 'payment_channel_code');
    }

    public function payment_channels_type()
    {
        return $this->belongsTo(PaymentChannelsType::class, 'payment_channels_type_code', 'payment_channels_type_code');
    }
}
