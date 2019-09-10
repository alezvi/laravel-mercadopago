<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MercadoPago;

class MercadoPagoProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('MercadoPago', function ($app) {
            MercadoPago\SDK::setAccessToken(config('mercadopago.test.token'));
            return MercadoPago\SDK::class;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
