<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'external_rider_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function performanceReports() {
        return $this->hasMany(RiderPerformanceReport::class);
    }
}
