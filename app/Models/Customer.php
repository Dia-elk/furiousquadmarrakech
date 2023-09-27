<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable =[
        'email',
        'phone_number',
    ];

    public function reservations():HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}