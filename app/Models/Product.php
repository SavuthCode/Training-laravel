<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','rent_price','list_price','sale_price','sold_price','profile','galleries','created_by','updated_by'];
    
 public function productHistorys(){
     return $this->hasMany('App\Models\ProductHistory');
 }
}