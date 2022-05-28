<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentChannelsType extends Model
{
    use HasFactory;

    public function payment_channel()
    {
        return $this->hasMany(PaymentChannel::class, 'payment_channels_type_code', 'payment_channels_type_code');
    }
}
