<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart')->fresh();

        return view('cart.index')->with('cart', $cart);
    }

    public function confirm() 
    {
        $cart = session('cart');

        \MercadoPago\SDK::setAccessToken(env('MP_TEST_ACCESS_TOKEN'));

        $preference = new \MercadoPago\Preference();

        $productos = [];

        foreach ($cart->items as $product) {
            $item = new \MercadoPago\Item();
            $item->title = $product->title;
            $item->quantity = 1;
            $item->currency_id = $product->currency_id;
            $item->unit_price = $product->unit_price;
            $item->description = $product->description;
            $item->picture_url = $product->picture_url;
            $productos[] = $item;
        }

        $preference->items = $productos;

        $preference->back_urls = [
            'success' => url('/mp/success'),
            'failure' => url('/mp/failure'),
            'pending' => url('/mp/pending'),
        ];
        
        $preference->save();


        return redirect($preference->init_point);
    }
}
