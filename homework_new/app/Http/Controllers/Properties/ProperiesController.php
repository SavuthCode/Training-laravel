<?php

namespace App\Http\Controllers\Properties;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Properties;
use App\Models\Shapes;
use App\Models\Zones;
use App\Models\PropertyStatus;
use App\Models\PropertiesType;
use App\Models\PropertyPriceHistory;
class ProperiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties=Properties::with(['propertyStatuse','propertyType','zone','shape','propertyPriceHistorys'])->get();
        // $properties=PropertyStatus::all();
        // dd($properties);
        return view('Property.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shap=Shapes::all();
        $zone=Zones::all();
        $protype=PropertiesType::all();
        $status=PropertyStatus::all();
        return view('property.create',compact('status','protype','zone','shap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $property=Properties::create($request->all());
        //     'name','name',
        //     'code','code',
        //     'property_type_id','property_type_id',
        //     'property_status_id','prostatus_id',
        //     'zone_id','zone_id',
        //     'shape_id','shape_id',
        //     'rent_price','rent_price',
        //     'sale_price','sale_price',
        //     'list_price','list_price',
        //     'sold_price','sold_price',
        //     'created_by','created_by',
        //     'updated_by','updated_by',
        // ]);  
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties=Properties::find($id);
        $shap=Shapes::all();
        $zone=Zones::all();
        $protype=PropertiesType::all();
        $status=PropertyStatus::all();
        return view('property.show',compact('status','protype','zone','shap','properties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $properties=Properties::find($id);
        $properties->delete();
        return back();
    }
}
