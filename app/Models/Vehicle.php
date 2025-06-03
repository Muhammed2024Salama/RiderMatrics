<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
    ];

    public function riders()
    {
        return $this->hasMany(Rider::class);
    }
}
