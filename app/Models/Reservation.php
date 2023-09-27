<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use function Termwind\render;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable =[
        'pack_id',
        'customer_id',
    ];

    public function pack():BelongsTo
    {
        return $this->belongsTo(Pack::class);
    }

    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
