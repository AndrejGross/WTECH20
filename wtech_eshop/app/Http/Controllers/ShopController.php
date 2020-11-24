<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show_product_detail(Product $product){
        return view('shop_product_detail')->with(['product'=>$product]);
    }
}
