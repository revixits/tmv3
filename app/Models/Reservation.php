<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function reservations_timeline()
    {
        return $this->hasMany(ReservationsTimeline::class, 'reservation_code', 'reservation_code');
    }

    public function agents_vehicle()
    {
        return $this->belongsTo(AgentsVehicle::class, 'agents_vehicle_code', 'agents_vehicle_code');
    }

    public function rent_period_type()
    {
        return $this->belongsTo(RentPeriodType::class, 'rent_period_type_code', 'rent_period_type_code');
    }

    public function rent_coverage_area()
    {
        return $this->belongsTo(RentCoverageArea::class, 'rent_coverage_area_code', 'rent_coverage_area_code');
    }

    public function rent_type()
    {
        return $this->belongsTo(RentType::class, 'rent_type_code', 'rent_type_code');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_code', 'customer_code');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_code', 'driver_code');
    }

    public function terms_condition()
    {
        return $this->belongsTo(TermsCondition::class, 'terms_condition_code', 'terms_condition_code');
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'reservation_code', 'reservation_code');
    }
}
