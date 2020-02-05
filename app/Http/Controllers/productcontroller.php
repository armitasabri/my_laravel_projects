<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kala;
use App\Models\images;
use App\Models\users;

class productcontroller extends Controller
{
    public function index(){
        $product=images::with('kala')->get();
        // dd($product);die;
        return view('product/category')->with('all',$product);
    }

    public function productview(){
        return view('product/singleproduct');
    }

    public function productcheckout(){
        return view('product/productcheckout');
        
    }

    public function trashed()
    {

     return   $trashed = users::onlyTrashed()->get();
   }

   
}
