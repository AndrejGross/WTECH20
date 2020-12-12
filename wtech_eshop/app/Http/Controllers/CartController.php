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

        return redirect()->route('cart-index');
    }

    public static function add_to_cart(Product $product)
    {

        if(!session()->get('cart')) {
             $cart = [
                     $product->id => [
                         "id" => $product->id,
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
             "id" => $product->id,
             "name" => $product->name,
             "quantity" => 1,
             "price" => $product->price,
             "image" => $product->image
         ];
         session()->put('cart', $cart);
         return redirect()->back()->with('success', 'Product added to cart successfully!');
     }

    public static function updatePlus($id)
    {
        $cart = session()->get('cart');

        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public static function updateMinus($id)
    {
        $cart = session()->get('cart');

        $cart[$id]['quantity']--;
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function get_cart_faze_3(request $request)
    {
        $shipment = $request->shipment;
        $payment = $request->payment;

        return view('shop_cart_3')->with('shipment', $shipment)->with('payment', $payment);
    }

    public static function cart_to_stage_two()
    {
        return view('shop_cart_2');
    }

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
