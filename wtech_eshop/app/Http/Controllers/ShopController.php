<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use App\Models\Order;

class ShopController extends Controller
{

public function paginate($items, $perPage = 8, $page = null)
{
	$page = $page ?: LengthAwarePaginator::resolveCurrentPage();

	$items = $items instanceof Collection ? $items : Collection::make($items);

	return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, [ 'path' => LengthAwarePaginator::resolveCurrentPath()]);
}


    public function show_product_detail(Product $product)
    {
        return view('shop_product_detail')->with(['product'=>$product]);
    }

    public function index($id)
    {
        $products = Product::where('category_id','=',$id)->simplePaginate(8);

        if (request('sort') == 'low_high') {
             $products = Product::where('category_id','=',$id)->orderBy('price')->simplePaginate(8);
         } elseif (request('sort') == 'high_low'){
             $products = Product::where('category_id','=',$id)->orderBy('price', 'desc')->simplePaginate(8);
         }

         if (request('brand')){
              $products = $products->where('category_id','=',$id)->where('brand', request('brand'));
              $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
          }

          if (request('price_from')){
              $products = $products->where('category_id','=',$id)->where('price', '>', request('price_from'));
              $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
          }

          if (request('price_to')){
              $products = $products->where('category_id','=',$id)->where('price', '<', request('price_to'));
              $products = $this->paginate($products, $perPage = 8, $page = null, $options = []);
          }

        if ($id == 1){
            return view('shop_pc')->with(['products' => $products])->with(['id' => $id])->with(['category' => 'Počítače']);
        }elseif ($id == 2){
            return view('shop_ntb')->with(['products' => $products])->with(['id' => $id])->with(['category' => 'Notebooky']);
        }elseif ($id == 3){
            return view('shop_access')->with(['products' => $products])->with(['id' => $id])->with(['category' => 'Príslušenstvo']);
        }

    }

    public function get_searched_products(request $request)
    {
        $searchText = $request->searchIt;

        $products = Product::search($searchText)->paginate(8);

        return view('shop')->with(['products' => $products]);
    }

    public function orders(){

        $orders = Order::where('user_id', auth()->user()->id)->get();

        return view('shop_user_orders')->with(['orders' => $orders]);

    }
}
