<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'course_id',
        'name',
        'qualification',
        'bio',
        'image'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}