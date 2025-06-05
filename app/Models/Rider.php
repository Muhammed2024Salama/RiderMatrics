<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'external_rider_id',
        'nationality',
        'city_id',
        'mobile_number',
        'iqama_number',
        'iqama_expiry_date',
        'health_insurance_company',
        'health_insurance_expiry',
        'email'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicles()
    {
        return $this->hasMany(RiderVehicle::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function performanceReports()
    {
        return $this->hasMany(RiderPerformanceReport::class);
    }
}
