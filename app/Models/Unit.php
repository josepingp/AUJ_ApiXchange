<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        name,
        symbol,
        conversion_factor_to_base,
        conversion_factor_from_base,
        unit_system_id,
        unit_type_id,
        is_base_unit
    ];

    public function unitSystem(): BelongsTo
    {
        return $this->belongsTo(UnitSystem::class);
    }

    public function unitType(): BelongsTo
    {
        return $this->belongsTo(UnitType::class);
    }
}
