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
        'offer_id',
        'early_bird_fee',
        'international_pricing',
        'indian_pricing',
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
        'weekend_start',
        'weekend_end',
        'weekend_days',
        'registration_contact',
    ];

    protected $casts = [
        'course_dates' => 'array',
        'weekend_days' => 'array',
        'enable_qr' => 'boolean',
        'international_pricing' => 'array',
    ];
   

   public function getEffectiveDateAttribute()
{
    switch ($this->schedule_type) {

        /*
        |--------------------------------------------------------------------------
        | MULTIPLE DATES
        |--------------------------------------------------------------------------
        */
        case 'dates':

            $dates = is_array($this->course_dates)
                ? $this->course_dates
                : json_decode($this->course_dates, true);

            $first = collect($dates)
                ->filter()
                ->sort()
                ->first();

            return $first
                ? \Carbon\Carbon::parse($first, 'Asia/Kolkata')->startOfDay()
                : null;

        /*
        |--------------------------------------------------------------------------
        | MONTH RANGE
        |--------------------------------------------------------------------------
        */
        case 'month_range':

            return $this->month_start
                ? \Carbon\Carbon::createFromFormat(
                    'Y-m',
                    $this->month_start,
                    'Asia/Kolkata'
                )->startOfMonth()
                : null;

        /*
        |--------------------------------------------------------------------------
        | WEEKEND RANGE
        |--------------------------------------------------------------------------
        */
        case 'weekend_range':

            return $this->weekend_start
                ? \Carbon\Carbon::createFromFormat(
                    'Y-m',
                    $this->weekend_start,
                    'Asia/Kolkata'
                )->startOfMonth()
                : null;

        /*
        |--------------------------------------------------------------------------
        | DEFAULT SINGLE DATE
        |--------------------------------------------------------------------------
        */
        default:

            return $this->course_date
                ? \Carbon\Carbon::parse(
                    $this->course_date,
                    'Asia/Kolkata'
                )->startOfDay()
                : null;
    }
}

public function getEffectiveEndDateAttribute()
{
    switch ($this->schedule_type) {

        /*
        |--------------------------------------------------------------------------
        | MULTIPLE DATES
        |--------------------------------------------------------------------------
        */
        case 'dates':

            $dates = is_array($this->course_dates)
                ? $this->course_dates
                : json_decode($this->course_dates, true);

            $last = collect($dates)
                ->filter()
                ->sort()
                ->last();

            return $last
                ? \Carbon\Carbon::parse($last, 'Asia/Kolkata')->endOfDay()
                : null;

        /*
        |--------------------------------------------------------------------------
        | MONTH RANGE
        |--------------------------------------------------------------------------
        */
        case 'month_range':

            return $this->month_end
                ? \Carbon\Carbon::createFromFormat(
                    'Y-m',
                    $this->month_end,
                    'Asia/Kolkata'
                )->endOfMonth()
                : null;

        /*
        |--------------------------------------------------------------------------
        | WEEKEND RANGE
        |--------------------------------------------------------------------------
        */
        case 'weekend_range':

            return $this->weekend_end
                ? \Carbon\Carbon::createFromFormat(
                    'Y-m',
                    $this->weekend_end,
                    'Asia/Kolkata'
                )->endOfMonth()
                : null;

        /*
        |--------------------------------------------------------------------------
        | DEFAULT SINGLE DATE
        |--------------------------------------------------------------------------
        */
        default:

            return $this->course_date
                ? \Carbon\Carbon::parse(
                    $this->course_date,
                    'Asia/Kolkata'
                )->endOfDay()
                : null;
    }
}
    public function getFormattedScheduleAttribute()
{
    switch ($this->schedule_type) {

        case 'dates':

            $dates = is_array($this->course_dates)
                ? $this->course_dates
                : json_decode($this->course_dates, true);

            return collect($dates)
                ->filter()
                ->map(fn($date) =>
                    \Carbon\Carbon::parse($date)->format('d M Y')
                )
                ->implode(', ');

        case 'month_range':

            return \Carbon\Carbon::parse($this->month_start)->format('M Y')
                .' - '.
                \Carbon\Carbon::parse($this->month_end)->format('M Y');

        case 'weekend_range':

            $start = \Carbon\Carbon::parse($this->weekend_start);
            $end   = \Carbon\Carbon::parse($this->weekend_end);

            // Format selected weekend days
            $days = [];

            if (is_array($this->weekend_days)) {
                $days = $this->weekend_days;
            } elseif (!empty($this->weekend_days)) {
                $days = json_decode($this->weekend_days, true) ?? [];
            }

            $daysText = '';

            if (count($days) === 2) {
                $daysText = 'Sat, Sun';
            } elseif (count($days) === 1) {
                $daysText = $days[0] === 'Saturday' ? 'Sat' : 'Sun';
            }

            return 'All ' . $daysText . ' of '
                . $start->format('M, Y')
                . ' - '
                . $end->format('M, Y');

        default:
            return null;
    }
}

    public function mentors()
    {
        return $this->hasMany(Mentor::class);
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
public function offer()
{
    return $this->belongsTo(Offer::class, 'offer_id');
}

public function offers()
{
    return $this->belongsToMany(
        Offer::class,
        'course_offer'
    );
}

public function getDiscountedFeeAttribute()
{
    if (!$this->offer || !$this->offer->is_active) {
        return $this->fee;
    }

    return $this->offer->calculateDiscount($this->fee);
}
}
