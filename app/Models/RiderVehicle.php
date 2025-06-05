<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiderVehicle extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'rider_id',
        'vehicle_type',
        'vehicle_brand',
        'plate_number',
        'manufacture_year',
        'operation_card_number',
        'vehicle_insurance_company',
        'vehicle_insurance_expiry'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }
}
