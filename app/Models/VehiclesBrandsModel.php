<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclesBrandsModel extends Model
{
    use HasFactory;

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class, 'vehicles_brands_model_code', 'vehicles_brands_model_code');
    }

    public function vehicles_brand()
    {
        return $this->belongsTo(VehiclesBrand::class, 'vehicles_brand_code', 'vehicles_brand_code');
    }
}
