<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schema extends Model
{
    protected $fillable = [
      'name', 'layout'
    ];

    protected $casts = [
        'layout' => 'array'
    ];
}
