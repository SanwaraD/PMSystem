<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class addmedic extends Controller
{
    public function index(){
        return view('addingdata');
    }
    public function store(Request $req){

        $data = $req->validate([
         'name' => 'required',
         'price' => 'required|numeric'
        ]);
 
        $newProduct = product::create($data);
 
        return redirect(route('addmedic'))->with('status','new product is included');
 
     }
}
