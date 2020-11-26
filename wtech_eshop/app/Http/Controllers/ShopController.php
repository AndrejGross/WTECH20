<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;





class ShopController extends Controller
{
<<<<<<< HEAD
    public function show_product_detail(Product $product)
    {
        return view('shop_product_detail')->with(['product'=>$product]);
    }

    public function index($id)
    {
        $products = Product::where('category_id','=',$id)->simplePaginate(8);

        return view('shop_pc')->with(['products' => $products])->with(['id' => $id]);
    }

    public function get_gaming_pc($id)
    {
        $products = Product::where('category_id','=',$id)->where('type','=','herne')->simplePaginate(8);

        return view('shop_pc_gaming')->with(['products' => $products])->with(['id' => $id]);
    }

    public function get_office_pc($id)
    {
        $products = Product::where('category_id','=',$id)->where('type','=','kancelarske')->simplePaginate(8);

        return view('shop_pc_office')->with(['products' => $products])->with(['id' => $id]);
    }
=======
    public function show_product_detail(Product $product){
        return view('shop_product_detail')->with(['product'=>$product]);
    }
>>>>>>> 561c475c3fff89721213e20f18eb3ea17a750ddf
}
/*public function search(Array $search)
{
     $search->validate([
         'query' => 'required|min:3',
     ]);

     $query = $search->input('query');

     products = Product::where('name', 'like', "%$query%")
     //                    ->orWhere('details', 'like', "%$query%")
     //                    ->orWhere('description', 'like', "%$query%")
     //                    ->paginate(10);

     $products = Product::search($query)->paginate(10);

     return view('search-results')->with('products', $products);
}/*
