<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function index(){
        $product=product::all();
        return view('public.index',compact('product'));
    }
}
