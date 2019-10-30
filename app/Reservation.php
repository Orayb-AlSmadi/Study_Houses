<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'cafe_id', 'start_at', 'end_at', 'reserved_seats'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cafe()
    {
        return $this->belongsTo('App\Cafe');
    }
}
