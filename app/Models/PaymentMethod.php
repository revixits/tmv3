<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    public function invoices_payment()
    {
        return $this->hasMany(InvoicesPayment::class, 'payment_method_code', 'payment_method_code');
    }

    public function payment_channel()
    {
        return $this->belongsTo(PaymentChannel::class, 'payment_channel_code', 'payment_channel_code');
    }
}
