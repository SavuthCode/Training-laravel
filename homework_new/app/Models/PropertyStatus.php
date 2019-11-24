<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyStatus extends Model
{
    protected $table='property_statuses';
    protected $fillable=['name'];
    public function Property()
    {
        return $this->hasMany('App\Models\Properties','property_status_id','id');
    }
}
