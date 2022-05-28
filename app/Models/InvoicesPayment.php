<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicesPayment extends Model
{
    use HasFactory;

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_code', 'invoice_code');
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_code', 'payment_method_code');
    }
}
