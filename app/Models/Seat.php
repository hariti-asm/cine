<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model {
    protected $fillable = [ 'seat_number','status','hall_id'];

   
    public function hall() {
        return $this->belongsTo(Hall::class);
    }
}

