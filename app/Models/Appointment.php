<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address',
        'date',
        'start_time',
        'end_time',
        'service',
        'notes',
        'urgency',
        'user_id', 
        'status',
        'doctor_name', 
        'review_of',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

public function parentAppointment()
{
    return $this->belongsTo(Appointment::class, 'review_of');
}

public function reviewAppointments()
{
    return $this->hasMany(Appointment::class, 'review_of');
}

}
