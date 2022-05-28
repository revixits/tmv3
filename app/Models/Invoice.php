<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_code', 'reservation_code');
    }

    public function invoices_item()
    {
        return $this->hasMany(InvoicesItem::class, 'invoice_code', 'invoice_code');
    }

    public function invoices_payment()
    {
        return $this->hasOne(InvoicesPayment::class, 'invoice_code', 'invoice_code');
    }
}
