<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class OrderController extends Controller
{
    protected function addToOrdersTables(Request $request)
    {
        $total = 0;
        if(session('cart'))
            foreach(session('cart') as $id => $details){
                $total += $details['price'] * $details['quantity'];
            }


        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->order_email,
            'billing_name' => $request->order_name,
            'billing_address' => $request->order_address,
            'billing_city' => $request->order_city,
            'billing_postalcode' => $request->order_postal,
            'billing_phone' => $request->order_phone,
            'billing_subtotal' => round($total*0.8),
            'billing_total' => $total,
            'shipment' => $request->order_shipment,
            'payment' => $request->order_payment,
            'status' => 'prijaté',
        ]);

        $cart = session()->get('cart');

        foreach(session('cart') as $id => $details) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $details['id'],
                'quantity' => $details['quantity'],
            ]);
        }



        session()->forget('cart');


        return view('thank_you');
    }
}
