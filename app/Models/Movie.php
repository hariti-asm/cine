<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name', 'description', 'genre_id', 'hall_id', 'actors', 'producer', 'running_time', 'image', 'publication_date', 'rating', 'quality','slug','playing_date'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}