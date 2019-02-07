<?php

namespace Anwar\Bulksmsbd;

use Illuminate\Support\ServiceProvider;

class BulksmsbdServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('smsbd', function () {
            return new \Anwar\Bulksmsbd\BulkSmsBD;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
