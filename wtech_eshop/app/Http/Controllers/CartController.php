<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function delete_product($id)
    {
                    echo $id;
                    $cart = session()->get('cart');
                    if(isset($cart[$id])) {
                        unset($cart[$id]);
                        session()->put('cart', $cart);
                    }
                    session()->flash('success', 'Product removed successfully');

                    return redirect()->back();

    }
    public function index()
    {
        return view('shop_cart_1');
    }
    public function add_and_show(Product $product)
    {
        CartController::add_to_cart($product);

        return view('shop_cart_1');
    }

    public static function add_to_cart(Product $product)
    {

         if(!session()->get('cart')) {
                     $cart = [
                             $product->id => [
                                 "name" => $product->name,
                                 "quantity" => 1,
                                 "price" => $product->price,
                                 "image" => $product->image
                             ]
                     ];
                     session()->put('cart', $cart);
                     return redirect()->back()->with('success');
                 }

         $cart = session()->get('cart');

         // if cart not empty then check if this product exist then increment quantity
                 if(isset($cart[$product->id])) {
                     $cart[$product->id]['quantity']++;
                     session()->put('cart', $cart);
                     return redirect()->back()->with('success', 'Product added to cart successfully!');
                 }
                 // if item not exist in cart then add to cart with quantity = 1
                 $cart[$product->id] = [
                     "name" => $product->name,
                     "quantity" => 1,
                     "price" => $product->price,
                     "image" => $product->image
                 ];
                 session()->put('cart', $cart);
                 return redirect()->back()->with('success', 'Product added to cart successfully!');
             }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add($product->id, $product->name, 1, $product->price)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item was added to your cart!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

        if ($validator->fails()) {
            session()->flash('errors', collect(['Quantity must be between 1 and 5.']));
            return response()->json(['success' => false], 400);
        }

        if ($request->quantity > $request->productQuantity) {
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success' => false], 400);
        }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }

    /**
     * Switch item for shopping cart to Save for Later.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already Saved For Later!');
        }

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item has been Saved For Later!');
    }
}
