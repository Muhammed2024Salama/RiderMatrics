<?php

namespace App\Models;

use App\Enums\ImportStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'file_name',
        'imported_by',
        'import_type',
        'status',
        'total_rows',
        'success_rows',
        'failed_rows',
        'started_at',
        'finished_at'
    ];

    /**
     * @var \class-string[]
     */
    protected $casts = [
        'status' => ImportStatus::class,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'imported_by');
    }
}
