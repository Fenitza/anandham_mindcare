<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'course_type',
        'specialisation',
        'tags',
        'description',
        'organised_by',
        'venue',
        'mode',
        'course_image',
        'course_time',
        'course_date',
        'duration',
        'fee',
        'early_bird_fee',
        'international_pricing',
        // 'international_currency',
        // 'international_fee',
        // 'international_early_bird_fee',
        'capacity',
        'marquee_text',
        'status',
        'zoom_link',
        'enable_qr',
        'schedule_type',
        'course_dates',
        'month_start',
        'month_end',
        'year_start',
        'year_end',
    ];

    protected $casts = [
        'course_dates' => 'array',
        'enable_qr' => 'boolean',
        'international_pricing' => 'array',
    ];
   

    public function getFormattedScheduleAttribute()
    {
        switch ($this->schedule_type) {

            case 'dates':

                return collect($this->course_dates)
                    ->map(fn($date) => \Carbon\Carbon::parse($date)->format('d M Y'))
                    ->implode(', ');

            case 'month_range':

                return \Carbon\Carbon::parse($this->month_start)->format('M Y')
                    .' - '.
                    \Carbon\Carbon::parse($this->month_end)->format('M Y');

            case 'year_range':

                return $this->year_start.' - '.$this->year_end;

            default:
                return null;
        }
    }

    public function mentor()
    {
        return $this->hasOne(Mentor::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function bonuses()
    {
        return $this->hasMany(Bonus::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function tags()
{
    return $this->belongsToMany(Tag::class);
}
}
