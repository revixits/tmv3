<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentsVehicle extends Model
{
    use HasFactory;

    public function reservation()
    {
        return $this->hasMany(Reservation::class, 'agents_vehicle_code', 'agents_vehicle_code');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_code', 'agent_code');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_code', 'vehicle_code');
    }
}
