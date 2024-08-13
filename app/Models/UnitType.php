<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnitType extends Model
{
    use HasFactory;


    protected $fillable = [
        name
    ];

    public function unit(): HasMany
    {
        return $this->hasMany(Unit::class);
    }
}
