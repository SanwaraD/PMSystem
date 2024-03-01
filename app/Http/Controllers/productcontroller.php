<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productcontroller extends Controller
{
    public function showDropdown()
    {
        $products = product::all();
        return view('orders', ['order'=>$products]);
    }
}
