<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertiesType extends Model
{
    protected $table='property_types';
    public function property()
    {
        return $this->hasMany('App\Models\Properties','property_type_id','id');
    }
}
