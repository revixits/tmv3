<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    public function agents_vehicle()
    {
        return $this->hasMany(AgentsVehicle::class, 'vehicle_code', 'vehicle_code');
    }

    public function vehicles_brands_model()
    {
        return $this->belongsTo(VehiclesBrandsModel::class, 'vehicles_brands_model_code', 'vehicles_brands_model_code');
    }
}
