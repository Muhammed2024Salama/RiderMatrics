<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiderPerformanceReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'rider_id',
        'city_id',
        'vehicle_id',
        'report_date',
        'batch_number',
        'tga_status',
        'error_codes',
        'shifts_count',
        'working_days',
        'planned_working_hours',
        'actual_working_hours',
        'avg_working_hours_per_day',
        'attendance_rate',
        'break_hours',
        'lost_hours',
        'acceptance_rate',
        'contact_rate',
        'no_shows',
        'no_show_percent',
        'notified_deliveries',
        'completed_deliveries',
        'accepted_deliveries',
        'not_accepted_deliveries',
        'stacked_deliveries',
        'declined_deliveries',
        'cancelled_deliveries'
    ];

    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
