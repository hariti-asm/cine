<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model {
    protected $fillable = [ 'seat_number','status','schema_id'];

   
    public function schema() {
        return $this->belongsTo(Schema::class);
    }
}

