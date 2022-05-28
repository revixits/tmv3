<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclesBrand extends Model
{
    use HasFactory;

    public function vehicles_brands_model()
    {
        return $this->hasMany(VehiclesBrandsModel::class, 'vehicles_brand_code', 'vehicles_brand_code');
    }
}
