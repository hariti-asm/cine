<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schema extends Model
{
  protected $fillable = ['name', 'rows', 'seats_per_row', 'sides'];

}
