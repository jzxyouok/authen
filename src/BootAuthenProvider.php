<?php

namespace Laravie\Authen;

use Illuminate\Support\Facades\Auth;

trait BootAuthenProvider
{
    /**
     * Register authen user provider.
     *
     * @return void
     */
    protected function bootAuthenProvider()
    {
        Auth::provider('authen', function ($app, array $config) {
            return new EloquentUserProvider($app['hash'], $config['model']);
        });
    }
}