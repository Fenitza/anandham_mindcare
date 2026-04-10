<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'course_type',
        'specialisation',
        'course_image',
        'duration',
        'fee',
        'capacity',
        'marquee_text',
        'status'
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
}
