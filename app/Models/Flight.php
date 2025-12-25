<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'airline_id',
        'origin_airport_id',
        'destination_airport_id',
        'departure_date',
        'departure_time',
        'price',
    ];

    public function airline() {
        return $this->belongsTo(Airline::class);
    }
}
