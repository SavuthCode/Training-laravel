<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shapes extends Model
{
    public function property()
    {
        return $this->hasOne('App\Models\Properties');
    }
}
