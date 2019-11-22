<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductHistory;

class TrainProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::with('productHistorys')->paginate(4);
        return view('Train.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Train.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'rent_price'=> 'required',
            'list_price'=> 'required',
            'sale_price'=> 'required',
            'sold_price'=> 'required',
            'updated_by'=> 'required',
            'created_by'=> 'required',
            'profile'=> 'required',
            'galleries'=> 'required',
        ]);
        $product=Product::create($request->all());
        //save product_price_history

        // $product_price=new ProductHistory::create([
        //     'rent_price'=>$product->rent_price,
        //     'list_price'=>$product->list_price,
        //     'sale_price'=>$product->sale_price,
        //     'sold_price'=>$product->sold_price,
        //     'updated_by'=>$product->updated_by,
        //     'created_by'=>$product->created_by,
        //     'product_id'=>$product->id,
        // ]);

        $product_price=new ProductHistory();
        $product_price->rent_price=$product->rent_price;
        $product_price->list_price=$product->list_price;
        $product_price->sale_price=$product->sale_price;
        $product_price->sold_price=$product->sold_price;
        $product_price->updated_by=$product->updated_by;
        $product_price->created_by=$product->created_by;
        $product_price->product_id=$product->id;
        $product_price->save();
        return redirect()->route('products.index')->with('success','Data save Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product=Product::find($id);
        return view('Train.edit',compact('product'));
        

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
        $product->update($request->only([
            'name','name',
            'rent_price','rent_price',
            'list_price','list_price',
            'sale_price','sale_price',
            'sold_price','sold_price',
            'profile','profile',
            'galleries','galleries',
            'created_by','created_by',
            'updated_by','updated_by',
        ]));
        $product->productHistorys()->create([
            'rent_price','rent_price',
            'list_price','list_price',
            'sale_price','sale_price',
            'sold_price','sold_price',
            'created_by','created_by',
            'updated_by','updated_by',
        ]);
        return view('Train.edit',compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return back()->with('success','Deleted successfull');
    }
}
