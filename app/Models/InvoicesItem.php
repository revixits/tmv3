<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicesItem extends Model
{
    use HasFactory;

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_code', 'invoice_code');
    }
}
