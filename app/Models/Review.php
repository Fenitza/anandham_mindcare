<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'appointment_id',
        'user_id',
        'rating',
        'review',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}