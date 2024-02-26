<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
       'name', 'capacity', 'schema_id'
    ];

    public function schema()
    {
        return $this->belongsTo(Schema::class);
    }}
