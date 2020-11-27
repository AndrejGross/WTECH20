<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;





class ShopController extends Controller
{
    public function show_product_detail(Product $product)
    {
        return view('shop_product_detail')->with(['product'=>$product]);
    }
    public function product_detail(request $request)
        {
            echo $request->all();
            //return view('shop_product_detail')->with(['product'=>$product]);
        }

    public function index($id)
    {
        $products = Product::where('category_id','=',$id)->simplePaginate(8);

        return view('shop_pc')->with(['products' => $products])->with(['id' => $id]);
    }

    public function get_gaming_pc($id)
        {
            $products = Product::where('category_id','=',$id)->where('type','=','herne')->simplePaginate(8);

            if (request('sort') == 'low_high') {
                $products = Product::where('category_id','=',$id)->where('type','=','herne')->orderBy('price')->simplePaginate(8);
            } elseif (request('sort') == 'high_low'){
                $products = Product::where('category_id','=',$id)->where('type','=','herne')->orderBy('price', 'desc')->simplePaginate(8);
            }

            if (request('brand')){
                $products = Product::where('category_id','=',$id)->where('type','=','herne')->where('brand', request('brand'))->orderBy('price')->simplePaginate(8);
            }

            if (request('price_from')){
                $products = $products->where('category_id','=',$id)->where('type','=','herne')->where('price', '>', request('price_from'));
            }

            if (request('price_to')){
                $products = $products->where('category_id','=',$id)->where('type','=','herne')->where('price', '<', request('price_to'));
            }

            return view('shop_pc_gaming')->with(['products' => $products])->with(['id' => $id]);
        }

    public function get_office_pc($id)
    {
        $products = Product::where('category_id','=',$id)->where('type','=','kancelarske')->simplePaginate(8);

        return view('shop_pc_office')->with(['products' => $products])->with(['id' => $id]);
    }

    public function get_searched_products(request $request)
    {
        $searchText = $request->searchIt;

        $products = Product::search($searchText)->paginate(8);

        return view('shop')->with(['products' => $products]);
    }
}
