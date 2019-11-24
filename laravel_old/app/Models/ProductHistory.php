<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductHistory extends Model
{
    protected $table='product_price_histories';
    protected $fillable=['rent_price','list_price','sale_price','sold_price','created_by','updated_by'];
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
