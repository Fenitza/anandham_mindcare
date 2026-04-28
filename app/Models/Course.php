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
        'course_image',
        'course_time',
        'course_date',
        'duration',
        'fee',
        'capacity',
        'marquee_text',
        'status',
        'zoom_link',
        'enable_qr'
    ];

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
