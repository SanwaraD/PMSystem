<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\sales;


class salescontroller extends Controller
{
    public function store(Request $request)
    {
            $sold_product = product::find($request->product_id);
            $name = $sold_product->name;
            $total_price = ($request->quantity) * ($sold_product->price);
            sales::create([
                'name'=>$name,
                'quantity'=>$request->quantity,
                'totalprice'=>$total_price
                
            ]);
    
            return redirect(route('dropdown.show'))->with('created','new sale added');
}
}