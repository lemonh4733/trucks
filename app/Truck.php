<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $fillable = [
      'brand_id',
      'years',
      'owner',
      'numb_of_owners',
      'comment'  
    ];
    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
