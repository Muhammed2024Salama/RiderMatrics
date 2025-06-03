<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function riders()
    {
        return $this->hasMany(Rider::class);
    }
}
