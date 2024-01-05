<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function regio_rel() {
        return $this->belongsTo(Region::class,'region','region_code');
    }

    public function comp_rel() {
        return $this->hasMany(Company::class,'city_id','id');
    }

}
