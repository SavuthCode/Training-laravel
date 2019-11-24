<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable=['name','code','property_type_id','property_status_id','zone_id','shape_id','rent_price','sale_price','list_price','sold_price','created_by','updated_by'];
    protected $table='properties';


    public function propertyType()
    {
        return $this->belongsTo('App\Models\PropertiesType');
    }

    public function propertyStatuse(){
        return $this->belongsTo('App\Models\PropertyStatus','property_status_id','id');
    }

    public function zone(){
        return $this->belongsTo('App\Models\Zones');
    }

    public function shape(){
        return $this->belongsTo('App\Models\Shapes');
    }
    
    public function propertyPriceHistorys(){
        return $this->hasMany('App\Models\PropertyPriceHistory','property_id','id');
    }

    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
}
