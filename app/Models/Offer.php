<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Offer extends Model
{
    protected $fillable = [
        'name',
        'discount_type',
        'discount_value',
        'description',
        'status',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'status' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    

    public function courses()
{
    return $this->belongsToMany(
        Course::class,
        'course_offer'
    );
}

    public function getIsActiveAttribute()
    {
        if (!$this->status) {
            return false;
        }

        $today = Carbon::today();

        if ($this->start_date && $today->lt($this->start_date)) {
            return false;
        }

        if ($this->end_date && $today->gt($this->end_date)) {
            return false;
        }

        return true;
    }

    public function calculateDiscount($amount)
    {
        if ($this->discount_type === 'percentage') {

            return $amount -
                (($amount * $this->discount_value) / 100);
        }

        return max(
            0,
            $amount - $this->discount_value
        );
    }
}