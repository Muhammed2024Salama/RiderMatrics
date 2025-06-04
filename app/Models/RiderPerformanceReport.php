<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiderPerformanceReport extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'rider_id',
        'report_date',
        'city_id',
        'vehicle_id',
        'batch_number',
        'tga_status',
        'error_codes',

        // Working Hours
        'shifts_count',
        'working_days',
        'planned_working_hours',
        'actual_working_hours',
        'avg_working_hours_per_day',
        'attendance_rate',
        'break_hours',
        'lost_hours',

        // Delivery Metrics
        'acceptance_rate',
        'contact_rate',
        'no_shows',
        'no_show_percentage',
        'notified_deliveries',
        'completed_deliveries',
        'accepted_deliveries',
        'not_accepted_deliveries',
        'stacked_deliveries',
        'declined_deliveries',
        'cancelled_deliveries',

        'import_id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rider() {
        return $this->belongsTo(Rider::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city() {
        return $this->belongsTo(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function import() {
        return $this->belongsTo(Import::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function auditLogs() {
        return $this->hasMany(AuditLog::class, 'report_id');
    }
}
