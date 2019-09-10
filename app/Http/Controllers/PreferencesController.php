<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Http\Request;

class PreferencesController extends Controller
{
    public function store($id)
    {
        $item = Item::findOrFail($id);

        $cart = session('cart') ?? Cart::create();

        $cart->items()->attach($item);

        session()->put('cart', $cart);

        return redirect('/productos');
    }

    public function confirm()
    {
        // Aqui vamos a implementar Mercado Pago
    }
}
