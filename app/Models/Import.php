<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'file_name',
        'imported_by',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports() {
        return $this->hasMany(RiderPerformanceReport::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function importedBy() {
        return $this->belongsTo(User::class, 'imported_by');
    }
}
