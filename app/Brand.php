<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function trucks() {
        return $this->hasMany(Truck::class, 'id');
    }
}
