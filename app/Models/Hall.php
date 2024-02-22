<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
        'cinema_id', 'name', 'capacity', 'schema_id'
    ];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function schema()
    {
        return $this->belongsTo(Schema::class);
    }}
