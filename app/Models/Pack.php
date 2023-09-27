<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'duration',
        'name',
        'dinner',
        'pictures',
        'tea',
        'pick_up',
        'private_pick_up',
        'lunch',
        'risk_insurance',
        'equipments',
        'desert_scarf',
        'drift',
    ];


    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Pack::class);
    }
}
