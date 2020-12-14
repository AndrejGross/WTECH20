<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class ShopAccessController extends Controller
{

public function paginate($items, $perPage = 8, $page = null, $options = [])
{
	$page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

	$items = $items instanceof Collection ? $items : Collection::make($items);

	return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}

     public function get_gaming_access($id)
     {
         $products = Product::where('category_id','=',$id)->where('type','=','herne')->simplePaginate(8);

         if (request('sort') == 'low_high') {
             $products = Product::where('category_id','=',$id)->where('type','=','herne')->orderBy('price')->simplePaginate(8);
         } elseif (request('sort') == 'high_low'){
             $products = Product::where('category_id','=',$id)->where('type','=','herne')->orderBy('price', 'desc')->simplePaginate(8);
         }

         if (request('brand')){
             $products = $products->where('category_id','=',$id)->where('type','=','herne')->where('brand', request('brand'));
             $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
         }

         if (request('price_from')){
             $products = $products->where('category_id','=',$id)->where('type','=','herne')->where('price', '>', request('price_from'));
             $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
         }

         if (request('price_to')){
             $products = $products->where('category_id','=',$id)->where('type','=','herne')->where('price', '<', request('price_to'));
             $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
         }

         return view('shop_access_gaming')->with(['products' => $products])->with(['id' => $id])->with(['category' => 'Príslušenstvo']);
     }

     public function get_office_access($id)
         {
             $products = Product::where('category_id','=',$id)->where('type','=','kancelarske')->simplePaginate(8);

             if (request('sort') == 'low_high') {
                  $products = Product::where('category_id','=',$id)->where('type','=','kancelarske')->orderBy('price')->simplePaginate(8);
              } elseif (request('sort') == 'high_low'){
                  $products = Product::where('category_id','=',$id)->where('type','=','kancelarske')->orderBy('price', 'desc')->simplePaginate(8);
              }

              if (request('brand')){
                  $products = Product::where('category_id','=',$id)->where('type','=','kancelarske')->where('brand', request('brand'));
                  $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
              }

              if (request('price_from')){
                  $products = $products->where('category_id','=',$id)->where('type','=','kancelarske')->where('price', '>', request('price_from'));
                  $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
              }

              if (request('price_to')){
                  $products = $products->where('category_id','=',$id)->where('type','=','kancelarske')->where('price', '<', request('price_to'));
                  $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
              }

              return view('shop_access_office')->with(['products' => $products])->with(['id' => $id])->with(['category' => 'Príslušenstvo']);
         }

}
