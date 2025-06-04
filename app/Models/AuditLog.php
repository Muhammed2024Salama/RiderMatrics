<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'report_id',
        'action',
        'changes',
        'performed_by',
        'performed_at',
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function report() {
        return $this->belongsTo(RiderPerformanceReport::class, 'report_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function performedBy() {
        return $this->belongsTo(User::class, 'performed_by');
    }
}
