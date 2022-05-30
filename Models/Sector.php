<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $table='sector';
    public function cities()
    {
      return $this->hasOne('App\Models\City','id','city_id');
    }
}
