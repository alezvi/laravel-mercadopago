<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Listar todos los productos
Route::get('/productos', 'ProductsController@index');

// Productos agregados al carrito
Route::get('/carrito', 'CartController@index');

// Confirmar la compra
Route::post('/carrito/confirmar', 'CartController@confirm');

// Agregar productos al carrito
Route::post('/carrito/{id}', 'PreferencesController@store');

// Notificacion de Mercado Pago
Route::any('/mercadopago', 'MercadoPagoController@store');

Route::get('/mp/success', 'MercadoPagoController@success');
Route::get('/mp/failure', 'MercadoPagoController@failure');
Route::get('/mp/pending', 'MercadoPagoController@pending');
