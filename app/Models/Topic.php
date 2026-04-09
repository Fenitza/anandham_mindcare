<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'module_id',
        'name'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
