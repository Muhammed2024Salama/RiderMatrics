<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiderReport extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'rider_id',
        'report_date',
        'total_deliveries',
        'delivered_on_time',
        'customer_rating',
        'remarks',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }
}
