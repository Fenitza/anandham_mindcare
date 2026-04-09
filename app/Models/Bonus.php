<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'value',
        'description'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
