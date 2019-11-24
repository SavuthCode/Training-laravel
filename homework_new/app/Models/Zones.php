<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    public function property()
    {
        return $this->hasMany('App\Models\Properties');
    }
}
