<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopPcController extends Controller
{
     public function index()
     {
         $categories = Category::all();

         $products = Product::with('categories')->simplePaginate(12);

         foreach ($products as $product) {

           }
         return view('shop_pc')->with(['products' => $products],['categories' => $categories]);
         /*$pagination = 9;
         $categories = Category::all();

         if (request()->category) {
             $products = Product::with('categories')->whereHas('categories', function ($query) {
                 $query->where('name', request()->category);
             });
             $categoryName = optional($categories->where('name', request()->category)->first())->name;
         }

         if (request()->sort == 'low_high') {
             $products = $products->orderBy('price')->paginate($pagination);
         } elseif (request()->sort == 'high_low') {
             $products = $products->orderBy('price', 'desc')->paginate($pagination);
         } else {
             $products = $products->paginate($pagination);
         }

         return view('shop')->with([
             'products' => $products,
             'categories' => $categories,
             'categoryName' => $categoryName,
         ]);*/
     }

     /**
      * Display the specified resource.
      *
      * @param  string  $slug
      * @return \Illuminate\Http\Response
      */
     public function show()
     {
         /*$product = Product::where('slug', $slug)->firstOrFail();
         $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();

         $stockLevel = getStockLevel($product->quantity);

         return view('product')->with([
             'product' => $product,
             'stockLevel' => $stockLevel,
             'mightAlsoLike' => $mightAlsoLike,
         ]);*/
     }

     public function search(Request $request)
     {
         /*$request->validate([
             'query' => 'required|min:3',
         ]);

         $query = $request->input('query');

         // $products = Product::where('name', 'like', "%$query%")
         //                    ->orWhere('details', 'like', "%$query%")
         //                    ->orWhere('description', 'like', "%$query%")
         //                    ->paginate(10);

         $products = Product::search($query)->paginate(10);

         return view('search-results')->with('products', $products);*/
     }

     public function searchAlgolia(Request $request)
     {
         /*return view('search-results-algolia');*/
     }
}
